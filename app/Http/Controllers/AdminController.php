<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admin;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.admin_login');
    }

    public function dashboard(Request $request)
    {
        
        $val= Admin::all()->where('email',$request->email)->where('password',$request->password)->first();
        if($val)
        {
        session()->put('admin',$val);
        return view('admin.dashboard');
        }
        else
        {
            return redirect()->back();
        }
    }
  
    public function godashboard()
    {
        return view('admin.dashboard');
    }
    public function logout()
    {
        session()->forget('admin');
        return view('admin.admin_login');
    }
}
