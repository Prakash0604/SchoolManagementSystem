<?php

namespace App\Http\Controllers\Admin\Institute;

use App\Http\Controllers\Controller;
use App\Http\Requests\InstituteRequest;
use App\Models\InstituteInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class InstituteController extends Controller
{
    public function index(){
        $institute=InstituteInfo::first();
        $title="Update Profile";
        return view('admin.institute.profile',compact('institute','title'));
    }

    public function storeInstitute(InstituteRequest $request){
        try {
            $data = $request->except('logo');
            $institute = InstituteInfo::first();

            if ($request->hasFile('logo')) {
                if (!empty($institute) && !empty($institute->logo)) {
                    Storage::disk('public')->delete($institute->logo);
                }
                $imagePath = 'images/logo';
                $imageName = time() . '.' . $request->logo->getClientOriginalExtension();
                $store = $request->logo->storeAs($imagePath, $imageName, 'public');
                $data['logo'] = $store;
            } elseif (!empty($institute)) {
                $data['logo'] = $institute->logo;
            }

            if (!empty($institute)) {
                $institute->update($data);
            } else {
                InstituteInfo::create($data);
            }

            return back()->with(['success' => 'Profile has been updated Successfully.']);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            // return response()->json(['status' => false, 'message' => $e->getMessage()]);
            return back()->with(['error'=>'Something went wrong!']);
        }

    }
}
