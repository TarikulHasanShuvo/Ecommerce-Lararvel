<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use Session;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.dashboard');
    }
  
    public function godashboard()
    {
        return view('admin.dashboard');
    }
  

    
}
