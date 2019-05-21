<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ParkingLot;

class ULotController extends BaseApiController
{
  public function index($id)
  {
    //
  }

  public function store (Request $request)
  {
    //
  }

  public function show($id)
  {
    $parkingLots = ParkingLot::where('university_id', $id)->get();
    return $this->sendResponse($parkingLots, "good");
  }

  public function update(Request $request, University $university)
  {
    //
  }

  public function destroy(University $university)
  {
    //
  }
}
