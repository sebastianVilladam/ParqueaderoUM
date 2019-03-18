<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $fillable = ['name','phone_number','email'];

    public function employees()
    {
      return $this->hasMany('App/Watchman');
    }

    public function lots()
    {
      return $this->hasMany('App/ParkingLot');
    }
}
