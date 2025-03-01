<?php

namespace App\Http\Controllers\Admin\EducationLevel\AssignGradeSubject;

use App\Models\User;
use App\Models\Subject;
use App\Models\AcademicYear;
use Illuminate\Http\Request;
use App\Models\EducationLevel;
use App\Models\AssignGradeSubject;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\AssignGradeSubjectRequest;

class AssignSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $academicYears = AcademicYear::where('status', 'Active')->get();
        $levels = EducationLevel::where('status', 'Active')->get();
        $assignSubject = AssignGradeSubject::pluck('subject_id')->toArray();
        $subjects = Subject::where('status', 'Active')
            ->whereNotIn('id', $assignSubject)
            ->get();
        return view('admin.education-level.assign-subject.assign-subject', compact('academicYears', 'levels', 'subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function getSubject($academicYear, $educationLevel)
    {
        try {
            $academicYear = is_array($academicYear) ? $academicYear : (isset($academicYear) ? [$academicYear] : []);
            $educationLevel = is_array($educationLevel) ? $educationLevel : (isset($educationLevel) ? [$educationLevel] : []);

            $assignSubject = AssignGradeSubject::whereIn('academic_year_id', $academicYear)
                ->whereIn('education_level_id', $educationLevel)
                ->pluck('subject_id')
                ->toArray();

            $subjects = Subject::where('status', 'Active')
                ->whereNotIn('id', $assignSubject)
                ->get();

            return response()->json(['status' => true, 'message' => $subjects]);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }

    public function assignSubjectList(Request $request)
    {
        $grades = EducationLevel::where('status', 'Active')->get();
        $academicYear = AcademicYear::where('status', 'Active')->get();
        if ($request->ajax()) {

            $academicYear = $request->academicYear;
            $educationLevel = $request->educationLevel;

            $subject = $this->getGradeSubjectRequest($academicYear, $educationLevel);
            return DataTables::of($subject)
                ->addIndexColumn()
                ->addColumn('action', function ($action) {
                    $route = "";
                    $isedit = "Y";
                    $isDelete = "Y";
                    return view('admin.button.button', compact('action', 'route', 'isDelete', 'isedit'));
                })
                ->addColumn('subject', function ($sub) {
                    return $sub->subject->title;
                })
                ->addColumn('status', function ($status) {
                    $stat = $status->status == 'Active' ? 'checked' : '';
                    return '<div class="form-check form-switch d-flex">
                    <input class="form-check-input statusToggle mx-auto" type="checkbox" ' . $stat . ' data-id="' . $status->id . '" role="switch" id="flexSwitchCheckDefault">
                    </div>';
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }


        $extraJs = array_merge(
            config('js-map.admin.datatable.script'),
        );

        $extraCs = array_merge(
            config('js-map.admin.datatable.style'),
        );
        $title = "All Assign Subject List";

        return view('admin.education-level.assign-subject.list-assign-subject', compact('grades', 'extraJs', 'extraCs', 'academicYear', 'title'));
    }

    public function getGradeSubjectRequest($academicYear, $educationLevel)
    {
        return AssignGradeSubject::with('subject')
            ->when($academicYear && $academicYear !== 'null' && $educationLevel && $educationLevel !== 'null', function ($q) use ($academicYear, $educationLevel) {
                $q->where('academic_year_id', $academicYear)->where('education_level_id', $educationLevel);
            })
            ->orderBy('id', 'desc')->get();
    }

    public function statusToggle($id)
    {
        try {

            $year = AssignGradeSubject::find($id);
            if ($year->status == 'Active') {
                $year->status = 'Inactive';
            } else {
                $year->status = 'Active';
            }
            $year->save();
            return response()->json(['status' => true, 'message' => 'Status Updated']);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AssignGradeSubjectRequest $request)
    {
        // dd($request->all());
        $grade = EducationLevel::find($request->education_level_id);
        $user = User::first();
        try {
            foreach ($request->subject_id as $index => $subject) {
                AssignGradeSubject::create([
                    'subject_id' => $subject,
                    'full_marks' => $request->full_marks[$index] ?? 0,
                    'pass_marks' => $request->pass_marks[$index] ?? 0,
                    'education_level_id' => is_array($request->education_level_id) ? ($request->education_level_id[$index] ?? null) : $request->education_level_id,
                    'academic_year_id' => is_array($request->academic_year_id) ? ($request->academic_year_id[$index] ?? null) : $request->academic_year_id,
                    'created_by' => $user->id,
                ]);
            }
            // return back()->with(['success' => 'Subject has been assigned to ' . $grade->title]);
            return response()->json(['status' => true, 'message' => 'Subject has been assigned to ' . $grade->title]);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
