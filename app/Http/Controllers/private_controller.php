<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\ParkingLot;
use App\Favorite;

class Private_controller extends Controller
{
  public function fav($id)
  {
    $favorites = DB::table('parking_Lots')
                ->whereIn('id',function($query)use($id)
                {
                  $query->select(DB::raw('parkingLot_id'))
                  ->from('favorites')
                  ->where('user_id', '=' ,$id);
                })
                ->get();

    return view('private.fav', ['list' => $favorites])->with('id',$id);
  }
  public function favP($id)
  {
    $favorite = ParkingLot::find($id);
    return view('private.fav_ParkingLot',['data' => $favorite]);
  }

  public function destroy($id)
  {
    $actual_user = \Auth::user();
    $favorite = Favorite::where('user_id', $actual_user->id)->where('parkingLot_id', $id)->first();
    $favorite->delete();
    return redirect()->route('fav', ['id' => $actual_user->id]);
  }

  public function store(Request $request)
  {
    $input = $request->all();
    Favorite::create($input);
    return back();
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
