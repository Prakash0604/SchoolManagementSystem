<?php

namespace App\Http\Controllers\Admin\Employee;

use App\Models\Role;
use App\Models\User;
use Nette\Utils\Random;
use App\Models\Religion;
use App\Models\BloodGroup;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\ResetPasswordRequest;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $user = User::all();
            return DataTables::of($user)
                ->addIndexColumn()
                ->addColumn('image', function ($image) {
                    $img = $image->image ? '/storage/' . $image->image : 'default/avatar-5.webp';
                    return '<img src="' . $img . '" class="img-circle" style="width:80px;height:80px;">';
                })
                ->addColumn('action', function ($action) {
                    $route = route('employee.show', $action->id);
                    $isedit = "Y";
                    $isView = "Y";
                    $isDelete = "Y";
                    $isreset = "Y";

                    return view('admin.button.button', compact('action', 'route','isView', 'isedit', 'isDelete', 'isreset'));
                })
                ->addColumn('role', function ($role) {
                    return $role->role->title;
                })
                ->rawColumns(['action', 'image'])
                ->make(true);
        }
        $title = "All Employees";
        $roles = Role::where('status', 'active')->get();
        $religions = Religion::where('status', 'active')->get();
        $bloodgroups = BloodGroup::where('status', 'active')->get();
        $extraJs = array_merge(
            config('js-map.admin.datatable.script'),
        );

        $extraCs = array_merge(
            config('js-map.admin.datatable.style'),
        );
        return view('admin.employee.employee', compact('title', 'religions', 'roles', 'bloodgroups', 'extraJs', 'extraCs'));
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
    public function store(UserRequest $request)
    {
        try {
            // $data=$request->validated();
            if ($request->hasFile('image')) {
                $imagePath = "images/users";
                $imageName = time() . '.' . $request->image->getClientOriginalName();
                $store = $request->image->storeAs($imagePath, $imageName, 'public');
                $data['image'] = $store;
            }
            $registration_id = Str::upper(Str::random(4) . '' . date('Ymd') . time());
            $username = Str::upper(Str::random(4) . '' . time() . '' . date('Ymd'));
            $password = $username;
            User::create([
                'name' => $request->name,
                'contact' => $request->contact,
                'join_date' => $request->join_date,
                'role_id' => $request->role_id,
                'monthly_salary' => $request->monthly_salary,
                'guardains' => $request->guardains,
                'national_id' => $request->national_id,
                'education' => $request->education,
                'gender' => $request->gender,
                'religion_id' => $request->religion_id,
                'blood_group_id' => $request->blood_group_id,
                'experience' => $request->experience,
                'email' => $request->email,
                'dob' => $request->dob,
                'home_address' => $request->home_address,
                'image' => $store,
                'registration_id' => $registration_id,
                'username' => $username,
                'password' => $password,
            ]);
            return response()->json(['status' => true, 'message' => 'User Created Successfully!']);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $employee = User::with('role', 'blood_group', 'religion')->find($id);
        // dd($employee);
        $title = "Detail -" . $employee->name;
        return view('admin.employee.employeeDetail', compact('employee', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $data = User::with('role', 'blood_group', 'religion')->find($id);
            return response()->json(['status' => true, 'message' => $data]);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {
        try {
            $user = User::find($id);
            $data = $request->validated();
            if ($request->hasFile('image')) {
                if (!empty($user->image)) {
                    Storage::disk('public')->delete($user->image);
                }
                $imagePath = "images/users";
                $imageName = time() . '.' . $request->image->getClientOriginalName();
                $store = $request->image->storeAs($imagePath, $imageName, 'public');
                $data['image'] = $store;
            }
            $user->update($data);
            return response()->json(['status' => true, 'message' => "Employee Updated Successfully"]);
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
            $user = User::find($id);
            if (!empty($user->image)) {
                Storage::disk('public')->delete($user->image);
            }
            $user->delete();
            return response()->json(['status' => true, 'message' => 'User Deleted Successfully!']);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }

    public function resetPassword(ResetPasswordRequest $request,$id){
        try{
            $user=User::find($id);
            $user->update([
                'password'=>$request->confirm_password
            ]);
            return response()->json(['status' => true, 'message' => 'Password Updated Successfully!']);
        }catch(\Exception $e){
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }
}
