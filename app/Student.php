<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['numero','NomFr','NomAr','CNI','Sexe','Statut','DNS',
                            'AdressFr','AdressAr','Telephone','handicap_id'];

    function office(){
        return $this->belongsTo(Office::class,'registrations','student_id','office_id');
    }

    function parent(){
        return $this->belongsTo(Parent::class);
    }
}
