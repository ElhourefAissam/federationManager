<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Handicap extends Model
{
    protected $fillable = ['lebelFr','lebelAr','descriptionfr','descriptionAr'];

    function students(){
        return $this->hasMany(Student::class);
    }

    
}
