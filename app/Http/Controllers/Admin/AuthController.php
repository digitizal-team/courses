<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;

class AuthController extends Controller
{
    public function index(){
        return view('admin/auth/login');
    }

    public function verify(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
                return true;
        }
        
        return 0;
    }

    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
