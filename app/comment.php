<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $guarded = [];

    public function posts () 
    {
        return $this->belongsTo('App\Post')
    }
}
