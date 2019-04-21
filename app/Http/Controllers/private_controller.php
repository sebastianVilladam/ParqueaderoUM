<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Private_controller extends Controller
{
  public function fav()
  {
    return view('private.fav');
  }
  public function favP()
  {
    return view('private.fav_ParkingLot');
  }

  public function settings()
  {
    return view('private.acountSettings');
  }

  public function vehicles()
  {
    return view('private.vehicles');
  }

  public function vehicleEdit()
  {
    return view('private.vehicleEdit');
  }

  public function vehicleAdd()
  {
    return view('private.vehicleAdd');
  }

  public function history()
  {
    return view('private.history');
  }
}
?>
