<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeCourse extends Model
{
  protected $fillable = ['courseID', 'day','startTime', 'endTime'];
    public function course()
    {
        return $this->belongsTo('App\Course');
    }
}
