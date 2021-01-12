<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $reports = Report::latest('report_id')->get();
        
        return view('home', compact('reports'));
    }

    public function staffHome()
    {
        return view('staffHome');
    }

    public function loginstudent()
    {
        return view('loginstudent');
    }

    public function loginstaff()
    {
        return view('reports.loginstaff');
    }

    public function adminHome()
    {
        return view('adminHome');
    }

    public function welcome()
    {
        return view('welcome');
    }


}
