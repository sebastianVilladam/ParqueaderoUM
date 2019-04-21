<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'info_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function vehicles()
    {
      return $this->hasMany('App/Vehicle');
    }

    public function favorites()
    {
      return $this->hasMany('App/Favorite');
    }

    public function estraInfo()
    {
      return $this->hasOne('App/Watchman');
    }

    public function role()
    {
      return $this->hasOne('App/Role');
    }
}
