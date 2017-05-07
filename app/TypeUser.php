<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeUser extends Model
{
    protected $fillable = ['role'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
