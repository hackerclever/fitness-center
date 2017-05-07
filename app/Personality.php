<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personality extends Model
{
    protected $fillable = ['name','image'];
    protected $visible = ['name', 'id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
