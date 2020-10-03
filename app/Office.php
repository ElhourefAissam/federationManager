<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = ['lebelFr','lebelAr','AdressFr','AdressAr','Telephone'];

    function employe(){
        return $this->hasMany(Employe::class);
    }

    function contract(){
        return $this->hasMany(Contract::class);
    }

    function rooms(){
        return $this->hasMany(Room::class);
    }

    function student(){
        return $this->hasMany(Student::class,'registrations','office_id','student_id');
    }
    
}
