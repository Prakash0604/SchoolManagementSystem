<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{

    public function index(){
        return view('login');
    }

    public function loginEmployee(Request $request)
    {

        try {

            $data = $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:4'
            ]);

            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                if (Auth::user()->user_type == 'employee') {
                    return redirect()->route('employee.index');
                }
            }
            return back()->with(['error' => 'Invalid Login Crediantials']);
            // dd($data);
            // Redirect back on failure
        } catch (\Throwable $e) {
            Log::error($e->getMessage());
            return back()->withInput()->with('error', 'Invalid Credentials.');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
