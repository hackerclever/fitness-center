<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function typeUser()
    {
        return $this->hasOne('App\TypeUser');
    }
    public function personality()
    {
        return $this->hasOne('App\Personality');
    }

    public function couse()  //Trainner
    {
        return $this->hasMany('App\Course');
    }

    public function booking()
    {
        return $this->hasMany('App\Booking');
    }
}
