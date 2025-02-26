<?php

namespace App\Http\Controllers\Admin\Employee;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\EmployeeAttendance;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class EmployeeAttendanceController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $user = EmployeeAttendance::with('user.role')->orderBy('id', 'desc')->get();
            $start = $request->filter_start_date;
            $end = $request->filter_end_date;
            $employee = $request->employee_id;
            $filter_status = $request->filter_status;

            $user = $this->getAttendanceRequest($start, $end, $employee, $filter_status);
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
        $employees = User::with('role')->get();
        $date = $request->input('attendace_date', Carbon::now()->toDateString());
        // dd($date);
        $attendances = EmployeeAttendance::where('attendance_date', $date)->pluck('status', 'user_id');

        return view('admin.employee.attendance.list', compact('employees', 'attendances', 'title', 'extraJs', 'extraCs'));
    }

    public function getAttendanceRequest($start, $end, $employee, $filter_status)
    {
        return EmployeeAttendance::when($start && $start !== 'null' && $end && $end !== 'null', function ($q) use ($start, $end) {
            $q->whereBetween('attendance_date', [$start, $end]);
        })
            ->when($start && $start !== 'null' && (!$end || $end === 'null'), function ($q) use ($start) {
                $q->where('attendance_date', '>=', $start);
            })
            ->when($end && $end !== 'null' && (!$start || $start === 'null'), function ($q) use ($end) {
                $q->where('attendance_date', '<=', $end);
            })
            ->when($employee && $employee !== 'null', function ($q) use ($employee) {
                $q->where('user_id', $employee);
            })
            ->when($filter_status && $filter_status !== 'null', function ($q) use ($filter_status) {
                $q->where('status', $filter_status);
            })
            ->orderBy('id', 'desc')->get();
    }


    public function storeEmployeeAttendace(Request $request)
    {
        try {
            foreach ($request->attendance as $employeeId => $status) {
                // Store or update attendance
                EmployeeAttendance::updateOrCreate(
                    ['user_id' => $employeeId, 'attendance_date' => $request->attendance_date],
                    ['status' => $status]
                );
            }
            return response()->json(['status' => true, 'message' => "Attendace Updated Successfully"]);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }

    public function checkEmployeeAttendance($date)
    {
        try {
            $data = EmployeeAttendance::where('attendance_date', $date)->first();
            if ($data) {
                return response()->json(['status' => 403, 'message' => "Already Taken"]);
            } else {
                return response()->json(['status' => 402, 'message' => 'Not taken yet']);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }
}
