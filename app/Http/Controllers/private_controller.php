<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Private_controller extends Controller
{
  public function fav()
  {
    return view('private.fav_ParkingLot');
  }

  public function settings()
  {
    return view('private.acountSettings');
  }
}
?>
