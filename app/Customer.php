<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // protected $fillable = ['name','image'];
    protected $visible = ['name', 'id', 'tel', 'img'];


    public function coursesCustomer()
    {
        return $this->hasMany('App\CoursesCustomer');
    }

    public function booking()
    {
        return $this->hasMany('App\Booking');
    }

    public function normalCustomer()
    {
        return $this->hasOne('App\NormalCustomer');
    }

    public function vipCustomer()
    {
        return $this->hasOne('App\NormalCustomer');
    }
}
