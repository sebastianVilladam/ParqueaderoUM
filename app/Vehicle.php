<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = ['plate','brand','line','color','user_id'];

    public function owner()
    {
      return $this->belongsTo('App/User');
    }
}
