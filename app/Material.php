<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    function room(){
        return $this->belongsTo(Room::class);
    }
}
