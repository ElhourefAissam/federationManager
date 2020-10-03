<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['Numero','lebel','office_id'];
    
    function office(){
        return $this->belongsTo(Office::class);
    }

    function materials(){
        return $this->hasMany(Material::class);
    }
}
