<?php

namespace App\Http\Controllers\BackEndControllers;

use App\Backend\All_users;
use App\Http\Requests\passwordConfirm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $email = $request->email;
            $password = $request->password;
            $remember = $request->remember;
            if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {


                if (Auth::user()->roles->name == 'admin') {

                    return redirect()->route('admin-index')->with('success', 'Login Successful Welcome to the admin pannel');
                }
            } else {
                return redirect()->back()->with('Error', 'Records Not found');
            }
        } else {
            return view('BackEnd/login/index');
        }


    }

    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('admin-login')->with('delete', 'Logged Out Successfully');
    }

    public function u_pass(passwordConfirm $request,$id){
        $detail = All_users::findOrFail($id);
        $pwd = $detail->password;
        $current = $request->current_password;
        $new_pwd = $request->password;

        if(Hash::check($current,$pwd)){
            $detail->password = Hash::make($new_pwd);
            $detail->update();

            return redirect()->back()->with('success','Password Changed Successfully');
        }else{
            return redirect()->back()->with('Error','Current Password Incorrect please try again');
        }
    }
}
