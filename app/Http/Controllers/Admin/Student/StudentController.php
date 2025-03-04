<?php

namespace App\Http\Controllers\Admin\Student;

use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Support\Str;
use App\Models\AcademicYear;
use Illuminate\Http\Request;
use App\Models\InstituteInfo;
use App\Models\EducationLevel;
use App\Models\StudentAcademic;
use App\Models\StudentGuardian;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $student = Student::with('academicData.academicYear', 'academicData.educationLevel', 'academicData.classroom', 'studentMember')
                ->orderBy('id', 'desc')
                ->get();

            return DataTables::of($student)
                ->addIndexColumn()
                ->addColumn('action', function ($action) {
                    $route = route('student.show', $action->id);
                    $isedit = "Y";
                    $isDelete = "Y";
                    $isreset = 'Y';
                    $isViewModal = 'Y';
                    return view('admin.button.button', compact('action', 'route', 'isViewModal', 'isedit', 'isreset', 'isDelete'));
                })
                ->addColumn('image', function ($img) {
                    $image = $img->student_image ? asset('storage/' . $img->student_image) : asset('default/avatar-5.webp');
                    return '<img src="' . $image . '" class="img-circle" style="width:80px;height:80px;">';
                })
                ->addColumn('student_name', function ($name) {
                    return $name->student_name;
                })
                ->addColumn('academic_year', function ($year) {
                    return $year?->academicData?->academicYear?->academic_title ?? 'N/A';
                })
                ->addColumn('education_level', function ($year) {
                    return $year?->academicData?->educationLevel?->title ?? 'N/A';
                })
                ->addColumn('classroom', function ($level) {
                    return $level?->academicData?->classroom?->class_title ?? 'N/A';
                })
                ->addColumn('status', function ($status) {
                    $stat = $status->status === 'Active' ? 'checked' : '';
                    return '<div class="form-check form-switch d-flex">
                        <input class="form-check-input statusToggle mx-auto" type="checkbox" ' . $stat . '
                        data-id="' . $status->id . '" role="switch" id="flexSwitchCheckDefault">
                    </div>';
                })
                ->rawColumns(['action', 'status', 'image'])
                ->make(true);
        }

        $title = "Student List";
        $academicYears = AcademicYear::where('status', 'Active')->get();
        $educationLevels = EducationLevel::where('status', 'Active')->get();
        $classrooms = Classroom::where('status', 'Active')->get();
        $extraJs = array_merge(
            config('js-map.admin.datatable.script'),
        );

        $extraCs = array_merge(
            config('js-map.admin.datatable.style'),
        );
        return view('admin.student.list', compact('title', 'academicYears', 'educationLevels', 'classrooms', 'extraJs', 'extraCs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        DB::beginTransaction();
        try {
            $institute = InstituteInfo::first();
            $data = $request->validated();
            if ($request->hasFile('student_image')) {
                // dd($request->hasFile('student_image'));
                $path = "images/student";
                $imageName = time() . '-' . $request->student_image->getClientOriginalName();
                $imagePath = $request->student_image->storeAs($path, $imageName, 'public');
                $data['student_image'] = $imagePath;
            }

            $data['username'] = Str::upper(Str::limit($institute->schoolname, 2, '')) . date('Y') . Str::upper(Str::limit($request->student_name, 2, '')) . Str::upper(Str::random(2)) . date('md');
            $data['password'] = $data['username'];
            $data['institute_id'] = $institute->id;
            $data['created_by'] = 7;

            $student = Student::create($data);

            if ($request->academic_year_id || $request->education_level_id || $request->classroom_id || $request->registraion_number || $request->roll_number) {
                StudentAcademic::create([
                    'student_id' => $student->id,
                    'academic_year_id' => $request->academic_year_id,
                    'education_level_id' => $request->education_level_id,
                    'is_current' => 1,
                    'classroom_id' => $request->classroom_id,
                    'registraion_number' => $request->registraion_number,
                    'roll_number' => $request->roll_number
                ]);
            }

            if ($request->relation) {
                foreach ($request->relation as $key => $relation) {
                    StudentGuardian::create([
                        'student_id' => $student->id,
                        'relation' => $relation,
                        'guardian_name' => $request->guardian_name[$key],
                        'contact' => $request->contact[$key],
                        'occupation' => $request->occupation[$key]
                    ]);
                }
            }

            DB::commit();
            return response()->json(['status' => true, 'message' => 'Student Created Successfully']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $student = Student::with('studentMember', 'academicData')->find($id);
            return response()->json(['status' => true, 'message' => $student]);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }

    public function removeGuardians($id)
    {
        try {
            StudentGuardian::find($id)->delete();
            return response()->json(['status' => true, 'message' => 'Guardians removed Successfully']);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    public function update(StudentRequest $request, string $id)
    {
        try {
            $student = Student::find($id);
            if (!$student) {
                return response()->json(['status' => false, 'message' => 'Student not found'], 404);
            }

            $data = $request->validated();

            DB::beginTransaction();

            if ($request->hasFile('student_image')) {
                if ($student->student_image && Storage::disk('public')->exists($student->student_image)) {
                    Storage::disk('public')->delete($student->student_image);
                }

                $path = "images/student";
                $imageName = time() . '-' . $request->student_image->getClientOriginalName();
                $imagePath = $request->student_image->storeAs($path, $imageName, 'public');
                $data['student_image'] = $imagePath;
            }

            $student->update($data);

            if ($request->has('relation')) {
                foreach ($request->relation as $key => $relation) {
                    StudentGuardian::updateOrCreate(
                        [
                            'student_id' => $student->id,
                            'relation' => $relation
                        ],
                        [
                            'guardian_name' => $request->guardian_name[$key] ?? null,
                            'contact' => $request->contact[$key] ?? null,
                            'occupation' => $request->occupation[$key] ?? null
                        ]
                    );
                }
            }

            DB::commit();
            return response()->json(['status' => true, 'message' => 'Student Updated Successfully']);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function statusToggle($id)
    {
        try {

            $student = Student::find($id);
            if ($student->status == 'Active') {
                $student->status = 'Inactive';
            } else {
                $student->status = 'Active';
            }
            $student->save();
            return response()->json(['status' => true, 'message' => 'Status Updated']);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $student = Student::find($id);
            if ($student != null) {
                if($student->studentMember()->count() > 0){
                    return response()->json(['status' => 219, 'message' => "Please remove guardians first"]);
                }
                $student->delete();
                return response()->json(['status' => true, 'message' => "Student Deleted Successfully!"]);
            } else {
                return response()->json(['status' => false, 'message' => "Something went wrong"]);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }
}
