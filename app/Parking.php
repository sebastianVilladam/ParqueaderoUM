<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    protected $fillable = ['vehicle_plate','observations'];

    public function parkingLot()
    {
      return $this->belongsTo('App/ParkingLot');
    }
}
