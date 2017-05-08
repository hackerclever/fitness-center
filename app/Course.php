<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  protected $fillable = ['type_class_id', 'trainer_id'];
    public function typeClass()
    {
        return $this->belongsTo('App\TypeClass');
    }

    public function user() //Trainner
    {
        return $this->belongsTo('App\User');
    }

    public function timeCourse()
    {
        return $this->hasMany('App\TimeCourse');
    }
}
