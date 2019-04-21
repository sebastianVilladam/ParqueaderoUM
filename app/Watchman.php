<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Watchman extends Model
{
    protected $fillable = ['university_id','name','phone_number','company'];

    public function university()
    {
      return $this->belongsTo('App/University');
    }

    public function user()
    {
      return $this->hasMany('App/User');
    }
}
