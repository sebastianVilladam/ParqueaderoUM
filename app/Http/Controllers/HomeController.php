<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Redirect;

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
        $actual_user = \Auth::user();
        if($actual_user->role_id == 1)
          return redirect()->route('fav', ['id' => $actual_user->id]);
        if($actual_user->role_id == 2)
          return redirect()->route('selection', ['id' => $actual_user->id]);
        if($actual_user->role_id == 3)
          return view('admin.listSelection');
    }
}
