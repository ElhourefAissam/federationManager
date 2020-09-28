<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    function office(){
        return $this->belongsTo(Office::class);
    }

    function materials(){
        return $this->hasMany(Material::class);
    }
}
