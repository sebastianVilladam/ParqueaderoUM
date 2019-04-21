<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        //return view('home');
        $actual_user = \Auth::user();
        if($actual_user->role_id == 1)
          return view('private.fav');
        if($actual_user->role_id == 2)
          return view('employees.selection');
        if($actual_user->role_id == 3)
          return view('admin.listSelection');
    }
}
