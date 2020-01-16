<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tnc extends Model
{
    protected $table = 'tnc';
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
