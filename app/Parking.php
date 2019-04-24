<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    protected $fillable = ['parkingLot_id','vehicle_plate','hour','action','observations'];

    public function parkingLot()
    {
      return $this->belongsTo('App/ParkingLot');
    }
}
