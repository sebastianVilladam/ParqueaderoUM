<?php

namespace App\Http\Controllers\Api;

use App\ParkingLot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParkingLotController extends BaseApiController
{
    public function index()
    {
      $parkingLots = ParkingLot::orderBy('id','asc')->get();
      return $this->sendResponse(
        $parkingLots, 'ParkingLots retrieved succssfully'
      );
    }

    public function store (Request $request)
  {
    $input = $request->all();

    $parkingLot = ParkingLot::create($input);

    return $this->sendResponse(
      $parkingLot, 'ParkingLot created successfully'
    );
  }

  public function show($id)
  {
    $parkingLot = ParkingLot::find($id);
    return $this->sendResponse(
      $parkingLot, 'ParkingLot retieved successfully'
    );
  }

  public function update(Request $request, ParkingLot $parkingLot)
  {
    $input = $request->all();

    $parkingLot -> fill($input);
    $parkingLot -> save();

    return $this ->sendResponse(
      $parkingLot, 'ParkingLot uodated successfully'
    );
  }

  public function destroy(ParkingLot $parkingLot)
  {
    $parkingLot->delete();

    return $this->sendResponse(
      $parkingLot, 'ParkingLot deleted ok!'
    );
  }
}
