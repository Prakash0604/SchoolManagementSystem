<?php

namespace App\Http\Controllers\Admin\Student;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\StudentAttendance;
use App\Http\Controllers\Controller;
use App\Models\AcademicYear;
use App\Models\Classroom;
use App\Models\EducationLevel;
use App\Models\Student;
use App\Models\StudentAcademic;
use Yajra\DataTables\Facades\DataTables;

class StudentAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $user = StudentAttendance::with('student')->orderBy('id', 'desc')->get();
            $start = $request->filter_start_date;
            $end = $request->filter_end_date;
            $academic_year_id = $request->academic_year_id;
            $education_level_id = $request->education_level_id;
            $classroom_id = $request->classroom_id;
            $filter_status = $request->filter_status;

            $user = $this->getAttendanceRequest($start, $end, $academic_year_id, $education_level_id, $classroom_id, $filter_status);
            return DataTables::of($user)
                ->addIndexColumn()
                ->addColumn('action', function ($action) {
                    $route = "";
                    $isedit = "Y";
                    $isDelete = "Y";
                    return view('admin.button.button', compact('action', 'route', 'isDelete', 'isedit'));
                })
                ->addColumn('day', function ($month) {
                    return Carbon::parse($month->attendance_date)->format('l');
                })

                ->addColumn('username', function ($name) {
                    return $name->user->username;
                })
                ->addColumn('name', function ($full_name) {
                    return $full_name->user->name;
                })
                ->addColumn('role', function ($role) {
                    return $role->user->role->title;
                })
                ->addColumn('status', function ($status) {
                    if ($status->status == 'P') {
                        return '<span class="badge badge-success">Present</span>';
                    } elseif ($status->status == 'L') {
                        return '<span class="badge badge-primary">Late In</span>';
                    } else {
                        return '<span class="badge badge-danger">Absent</span>';
                    }
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }
        $title = "All Employees Attendace";
        $extraJs = array_merge(
            config('js-map.admin.datatable.script'),
        );

        $extraCs = array_merge(
            config('js-map.admin.datatable.style'),
        );
        $years = AcademicYear::where('status', 'Active')->get();
        $educationLevels = EducationLevel::where('status', 'Active')->get();
        $date = $request->input('attendace_date', Carbon::now()->toDateString());
        // dd($date);
        $attendances = StudentAttendance::where('attendance_date', $date)->pluck('status', 'student_id');

        return view('admin.student.attendance.list', compact('attendances','years','educationLevels', 'title', 'extraJs', 'extraCs'));
    }


    public function getAttendanceRequest($start, $end, $academic_year_id, $education_level_id, $classroom_id, $filter_status)
    {
        return StudentAttendance::with('student', 'education', 'year', 'classroom')->when($start && $start !== 'null' && $end && $end !== 'null', function ($q) use ($start, $end) {
            $q->whereBetween('attendance_date', [$start, $end]);
        })
            ->when($start && $start !== 'null' && (!$end || $end === 'null'), function ($q) use ($start) {
                $q->where('attendance_date', '>=', $start);
            })
            ->when($end && $end !== 'null' && (!$start || $start === 'null'), function ($q) use ($end) {
                $q->where('attendance_date', '<=', $end);
            })
            ->when($academic_year_id && $academic_year_id !== 'null', function ($q) use ($academic_year_id) {
                $q->whereIn('year', function ($subq) use ($academic_year_id) {
                    $subq('id', $academic_year_id);
                });
            })
            ->when($education_level_id && $education_level_id !== 'null', function ($q) use ($education_level_id) {
                $q->whereIn('education', function ($subq) use ($education_level_id) {
                    $subq('id', $education_level_id);
                });
            })
            ->when($classroom_id && $classroom_id !== 'null', function ($q) use ($classroom_id) {
                $q->whereIn('classroom', function ($subq) use ($classroom_id) {
                    $subq('id', $classroom_id);
                });
            })
            ->when($filter_status && $filter_status !== 'null', function ($q) use ($filter_status) {
                $q->where('status', $filter_status);
            })
            ->orderBy('id', 'desc')->get();
    }

    public function getClassroom(Request $request){
        try{

            $academic_year_id=$request->academic_year_id;
            $education_level_id=$request->education_level_id;
            $classroom=Classroom::where('academic_year_id',$academic_year_id)->where('education_level_id',$education_level_id)->get();
            return response()->json(['status'=>true,'message'=>$classroom]);
        }catch(\Exception $e){
            return response()->json(['status'=>false,'message'=>$e->getMessage()]);
        }
    }

    public function getStudent(Request $request){
        try{

            $academic_year_id=$request->academic_year_id;
            $education_level_id=$request->education_level_id;
            $classroom_id=$request->classroom_id;
            $student=StudentAcademic::with('student')->where('academic_year_id',$academic_year_id)->where('education_level_id',$education_level_id)->where('classroom_id',$classroom_id)->get();
            return response()->json(['status'=>true,'message'=>$student]);
        }catch(\Exception $e){
            return response()->json(['status'=>false,'message'=>$e->getMessage()]);
        }
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
