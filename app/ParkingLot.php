<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParkingLot extends Model
{
    protected $fillable = ['university_id','name','adress','phone_number','schedule','capacity','free'];

    public function university()
    {
      return $this->belongsTo('App/University');
    }

    public function parking()
    {
      return $this->hasMany('App/Parking');
    }
}
