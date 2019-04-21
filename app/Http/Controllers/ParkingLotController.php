<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ParkingLot;

class ParkingLotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
      $parkingLots = ParkingLot::where('university_id', $id)->get();
      return view('admin.uLots', ['list' => $parkingLots])->with('u_id', $id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($u_id)
    {
        return view('admin.lotAdd')->with('u_id',$u_id);
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
      ParkingLot::create($input);
      $id =  $input['university_id'];
      $parkingLots = ParkingLot::where('university_id', $id)->get();
      return view('admin.uLots', ['list' => $parkingLots])->with('u_id', $id);
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
      $parkingLot = ParkingLot::findOrFail($id);
      return view('admin.lotSettings', ['data' => $parkingLot]);
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
      $parkingLot = ParkingLot::findOrFail($id);
      $input = $request->all();
      $parkingLot->fill($input)->save();
      $id =  $parkingLot['university_id'];
      $parkingLots = ParkingLot::where('university_id', $id)->get();
      return view('admin.uLots', ['list' => $parkingLots])->with('u_id', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $parkingLot = ParkingLot::findOrFail($id);
      $u_id = $parkingLot['university_id'];
      $parkingLot->delete();
      $parkingLots = ParkingLot::where('university_id', $u_id)->get();
      return view('admin.uLots', ['list' => $parkingLots])->with('u_id', $u_id);
    }
}
