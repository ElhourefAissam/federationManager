<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeRecord extends Model
{
    function employe(){
        return $this->belongsTo(Employe::class);
    }
}
