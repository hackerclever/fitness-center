<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function customer()
    {
        return $this->hasOne('App\Customer');
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
