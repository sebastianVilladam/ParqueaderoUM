<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\University;
use App\ParkingLot;
use App\Favorite;

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
    $actual_user = \Auth::user();
    $flag = 0;
    if($actual_user != NULL)
    {
      $favorite = Favorite::where('user_id', $actual_user->id)->where('parkingLot_id', $id)->first();
      if($favorite != NULL)
        $flag = 1;
    }

    $parkingLot = ParkingLot::find($id);
    return view('public.parkingLot', ['data' => $parkingLot])->with('flag',$flag);
  }

  public function destroy($id)
  {
    $actual_user = \Auth::user();
    $favorite = Favorite::where('user_id', $actual_user->id)->where('parkingLot_id', $id)->first();
    $favorite->delete();
    return redirect()->route('parkingLot', ['id' => $id]);
  }
}
?>
