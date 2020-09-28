<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parent extends Model
{
    protected $fillable = ['NomFr','NomAr','CNI','ParenteFr','ParenteAr','Telephone','AdressFr','AdressAr'];

    function students(){
        return $this->hasMany(Student::class);
    }

    function employes(){
        return $this->hasMany(Employe::class);
    }
}
