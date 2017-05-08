<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeClass extends Model
{
    protected $fillable = ['name','price','description'];

    public function course()
    {
        return $this->hasMany('App\Course');
    }


}
