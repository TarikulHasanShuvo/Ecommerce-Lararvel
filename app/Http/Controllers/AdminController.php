<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use Session;

class AdminController extends Controller
{
    public function index(){

        return view('admin.admin_login');
    }

    public function goDashboard(){

        return view('admin.dashboard');
    }

    public function dashboard(Request $request){

        $email=$request->email;
        $password=$request->password;

        $result=admin::where('email',$email) ->where('password',$password)->first();
        if($result)
        {
        return redirect('dashboard')->with('results',$result);
        }
        else{
            // Session::put('messege','Eamil or Password Invalid');
            return redirect()->back();
        }
    }
}
