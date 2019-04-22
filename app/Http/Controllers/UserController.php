<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::where('role_id', 1)->get();
      return view('admin.usersList', ['list' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.userAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $input = $request->all();
      $input['password'] = Hash::make($input['password']);
      User::create($input);
      $users = User::where('role_id', 1)->get();
      return view('admin.usersList', ['list' => $users]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = User::findOrFail($id);
      $actual_user = \Auth::user();
      if($actual_user->role_id == 1)
        return view('private.acountSettings', ['data' => $user]);
      if($actual_user->role_id == 3)
        return view('admin.userSettings', ['data' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $user = User::findOrFail($id);
      $input = $request->all();
      $user->fill($input)->save();
      $users = User::where('role_id', 1)->get();
      $actual_user = \Auth::user();
      if($actual_user->role_id == 1)
        return view('private.acountSettings', ['data' => $user]);
      if($actual_user->role_id == 3)
        return view('admin.usersList', ['list' => $users]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = User::findOrFail($id);
      $user->delete();
      $users = User::where('role_id', 1)->get();
      return view('admin.usersList', ['list' => $users]);
    }
}
