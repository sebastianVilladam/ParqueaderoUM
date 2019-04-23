<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\University;
use App\ParkingLot;

class Public_Controller extends Controller
{
  public function home()
  {
    return view('public.index');
  }

  public function parking()
  {
    $universities = University::all();
    return view('public.universities', ['list' => $universities]);
  }

  public function parkingU($id)
  {
    $parkingLots = ParkingLot::where('university_id', $id)->get();
    return view('public.UPage', ['list' => $parkingLots]);
  }

  public function parkingLot($id)
  {
    $parkingLot = ParkingLot::find($id);
    return view('public.parkingLot', ['data' => $parkingLot]);
  }
}
?>
