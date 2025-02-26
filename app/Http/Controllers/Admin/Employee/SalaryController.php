<?php

namespace App\Http\Controllers\Admin\Employee;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\EmployeeSalary;
use App\Http\Controllers\Controller;
use App\Http\Requests\SalaryRequest;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $user = EmployeeSalary::with('user')->orderBy('id','desc')->get();
            return DataTables::of($user)
                ->addIndexColumn()
                ->addColumn('action', function ($action) {

                    $isedit = "Y";
                    $isDelete = "Y";
                    $isViewModal = 'Y';
                    $route = route('salary.edit', $action->id);

                    return view('admin.button.button', compact('action', "route", 'isViewModal', 'isDelete', 'isedit'));
                })
                ->addColumn('name', function ($name) {
                    return $name->user->name;
                })
                ->rawColumns(['action', 'image'])
                ->make(true);
        }
        $title = "All Employees Salary";
        $extraJs = array_merge(
            config('js-map.admin.datatable.script'),
        );

        $extraCs = array_merge(
            config('js-map.admin.datatable.style'),
        );
        $employees = User::all();
        return view('admin.employee.salary.list', compact('employees', 'extraJs', 'extraCs', 'title'));
    }

    public function getEmployee($id)
    {
        try {
            $user = User::with('role')->find($id);
            return response()->json(['status' => true, 'message' => $user]);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
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
    public function store(SalaryRequest $request)
    {
        try {
            $total = 0;
            $fine = 0;
            $bonus = 0;
            $salary = EmployeeSalary::where('user_id', $request->user_id)->where('month', $request->salary_month)->first();
            if (empty($salary)) {
                if ($request->fine || $request->bonus) {
                    $net_salary = intval($request->net_salary);
                    $fine = intval($request->fine);
                    $bonus = intval($request->bonus);
                    $total = $net_salary + $bonus - $fine;
                } else {
                    $total = intval($request->net_salary);
                }
                EmployeeSalary::create([
                    'user_id' => $request->user_id,
                    'month' => $request->salary_month,
                    'salary_date' => $request->salary_date,
                    'net_salary' => $request->net_salary,
                    'bonus' => $request->bonus,
                    'fine' => $request->fine,
                    'total_salary' => $total,
                    'created_by' => $request->user_id,
                ]);
                return response()->json(['status' => true, 'message' => 'Salary Saved Successfully!']);
            } else {
                return response()->json(['status' => 403, 'message' => 'Salary Already Registered!']);
            }
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
        try {
            $salary = EmployeeSalary::with('user.role')->find($id);
            return response()->json(['status' => true, 'message' => $salary]);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SalaryRequest $request, string $id)
    {
        try {
            $salary = EmployeeSalary::find($id);
            if ($salary) {
                if ($request->fine || $request->bonus) {
                    $net_salary = intval($request->net_salary);
                    $fine = intval($request->fine);
                    $bonus = intval($request->bonus);
                    $total = $net_salary + $bonus - $fine;
                } else {
                    $total = intval($request->net_salary);
                }
                $salary->update([
                    'user_id' => $request->user_id,
                    'month' => $request->salary_month,
                    'salary_date' => $request->salary_date,
                    'net_salary' => $request->net_salary,
                    'bonus' => $request->bonus,
                    'fine' => $request->fine,
                    'total_salary' => $total,
                ]);
                return response()->json(['status'=>true,'message'=>'Salary Updated']);
            }else{
                return response()->json(['status'=>false,'message'=>'Something went wrong!']);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $salary=EmployeeSalary::find($id);
            if($salary){
                $salary->delete();
                return response()->json(['status'=>true,'message'=>'Salary Deleted Successfully!']);
            }else{
                return response()->json(['status'=>false,'message'=>'Something went wrong!']);
            }
        }catch(\Exception $e){
            return response()->json(['status'=>false,'message'=>$e->getMessage()]);
        }
    }
}
