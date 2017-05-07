<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeClass extends Model
{
    protected $fillable = ['name','price'];

    public function course()
    {
        return $this->hasMany('App\Course');
    }


}
