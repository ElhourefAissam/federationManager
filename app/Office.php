<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    function employe(){
        return $this->hasMany(Employe::class);
    }

    function contract(){
        return $this->hasMany(Contract::class);
    }

    function room(){
        return $this->hasMany(Room::class);
    }

    function student(){
        return $this->hasMany(Student::class);
    }
}
