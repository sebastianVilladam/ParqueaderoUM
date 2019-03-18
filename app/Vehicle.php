<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = ['palte','brand','line','color'];

    public function owner()
    {
      return $this->belongsTo('App/User');
    }
}
