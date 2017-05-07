<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function typeClass()
    {
        return $this->belongsTo('App\TypeClass');
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function timeCourse()
    {
        return $this->hasMany('App\TimeCourse');
    }
}
