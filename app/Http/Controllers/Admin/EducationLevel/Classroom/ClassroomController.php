<?php

namespace App\Http\Controllers\Admin\EducationLevel\Classroom;

use App\Models\Classroom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClassroomRequest;
use App\Models\AcademicYear;
use App\Models\EducationLevel;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $year = Classroom::with('user','year','educationLevel')->orderBy('id', 'desc')->get();
            return DataTables::of($year)
                ->addIndexColumn()
                ->addColumn('action', function ($action) {
                    $route = route('classroom.show', $action->id);
                    $isedit = "Y";
                    $isDelete = "Y";
                    return view('admin.button.button', compact('action', 'route', 'isedit', 'isDelete'));
                })
                ->addColumn('year',function($year){
                    return $year->year->academic_title;
                })
                ->addColumn('teacher',function($user){
                    return $user->user->name;
                })
                ->addColumn('education_level',function($level){
                    return $level->educationLevel->title;
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
        $title = "All Classrooms";
        $extraJs = array_merge(
            config('js-map.admin.datatable.script'),
        );

        $extraCs = array_merge(
            config('js-map.admin.datatable.style'),
        );
        $employees=User::with('role')->whereHas('role',function($q) {
            $q->where('title','Teacher');
        })
        ->where('status','Active')->get();
        $academicYears=AcademicYear::where('status','Active')->get();
        $educationLevels=EducationLevel::where('status','Active')->get();
        return view('admin.education-level.classroom.list', compact('title', 'extraJs', 'extraCs','employees','educationLevels','academicYears'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function statusToggle($id)
    {
        try {

            $year = Classroom::find($id);
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
    public function store(ClassroomRequest $request)
    {
        try{
            $data=$request->validated();
            Classroom::create($data);
            return response()->json(['status'=>true,'message'=>"Classroom created successfully!"]);
        }catch(\Exception $e){
            return response()->json(['status'=>false,'message'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $data = Classroom::find($id);
            return response()->json(['status' => true, 'message' => $data]);
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

    /**
     * Update the specified resource in storage.
     */
    public function update(ClassroomRequest $request, string $id)
    {
        try {
            $data = $request->validated();
            $year = Classroom::find($id);
            $year->update($data);
            return response()->json(['status' => true, 'message' => "Classroom  Updated"]);
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
            $class = Classroom::find($id);
            if ($class != null) {
                $class->delete();
                return response()->json(['status' => true, 'message' => "Classroom Deleted Successfully!"]);
            } else {
                return response()->json(['status' => false, 'message' => "Something went wrong"]);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }
}
