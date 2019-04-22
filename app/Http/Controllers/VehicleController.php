<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vehicle;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
      $vehicles = vehicle::where('user_id', $id)->get();

      $actual_user = \Auth::user();
      if($actual_user->role_id == 1)
        return view('private.vehicles', ['list' => $vehicles])->with('u_id', $id);
      if($actual_user->role_id == 3)
        return view('admin.userVehicles', ['list' => $vehicles])->with('u_id', $id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($u_id)
    {
        $actual_user = \Auth::user();
        if($actual_user->role_id == 1)
          return view('private.vehicleAdd')->with('u_id',$u_id);
        if($actual_user->role_id == 3)
          return view('admin.vehicleAdd')->with('u_id',$u_id);
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
      Vehicle::create($input);
      $id =  $input['user_id'];
      $vehicles = Vehicle::where('user_id', $id)->get();

      $actual_user = \Auth::user();
      if($actual_user->role_id == 1)
        return view('private.vehicles', ['list' => $vehicles])->with('u_id', $id);
      if($actual_user->role_id == 3)
        return view('admin.userVehicles', ['list' => $vehicles])->with('u_id', $id);
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
      $vehicle = Vehicle::findOrFail($id);

      $actual_user = \Auth::user();
      if($actual_user->role_id == 1)
        return view('private.vehicleEdit', ['data' => $vehicle]);
      if($actual_user->role_id == 3)
        return view('admin.vehicleSettings', ['data' => $vehicle]);
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
      $vehicle = Vehicle::findOrFail($id);
      $input = $request->all();
      $vehicle->fill($input)->save();
      $id =  $vehicle['user_id'];
      $vehicles = Vehicle::where('user_id', $id)->get();

      $actual_user = \Auth::user();
      if($actual_user->role_id == 1)
        return view('private.vehicles', ['list' => $vehicles])->with('u_id', $id);
      if($actual_user->role_id == 3)
        return view('admin.userVehicles', ['list' => $vehicles])->with('u_id', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $vehicle = Vehicle::findOrFail($id);
      $u_id = $vehicle['user_id'];
      $vehicle->delete();
      $vehicles = Vehicle::where('user_id', $u_id)->get();

      $actual_user = \Auth::user();
      if($actual_user->role_id == 1)
        return view('private.vehicles', ['list' => $vehicles])->with('u_id', $id);
      if($actual_user->role_id == 3)
        return view('admin.userVehicles', ['list' => $vehicles])->with('u_id', $u_id);
    }
}
