<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;

class WatchmanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
      $watchmen = User::where('uni_id', $id)->get();
      return view('admin.uEmployees', ['list' => $watchmen])->with('u_id', $id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($u_id)
    {
        return view('admin.emAdd')->with('u_id',$u_id);
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
      var_dump($input);
      $input['password'] = Hash::make($input['password']);
      User::create($input);
      $id =  $input['uni_id'];
      $watchmen = User::where('uni_id', $id)->get();
      return view('admin.uEmployees', ['list' => $watchmen])->with('u_id', $id);
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
      $watchmen = User::findOrFail($id);
      return view('admin.emSettings', ['data' => $watchmen]);
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
      $watchman = User::findOrFail($id);
      $input = $request->all();
      $watchman->fill($input)->save();
      $id =  $watchman['uni_id'];
      $watchmen = User::where('uni_id', $id)->get();
      return view('admin.uEmployees', ['list' => $watchmen])->with('u_id', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $watchman = User::findOrFail($id);
      $u_id = $watchman['uni_id'];
      $watchman->delete();
      $watchmen = User::where('uni_id', $u_id)->get();
      return view('admin.uEmployees', ['list' => $watchmen])->with('u_id', $u_id);
    }
}
