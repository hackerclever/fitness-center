<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseCustomer extends Model
{
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function course()
    {
        return $this->belongsTo('App\Course');
    }
}
