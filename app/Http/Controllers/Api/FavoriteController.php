<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ParkingLot;
use App\Favorite;

class FavoriteController extends BaseApiController
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
    $favorites = DB::table('parking_Lots')
                ->whereIn('id',function($query)use($id)
                {
                  $query->select(DB::raw('parkingLot_id'))
                  ->from('favorites')
                  ->where('user_id', '=' ,$id);
                })
                ->get();
    return $this->sendResponse($favorites, "Bienvenido!!");
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
