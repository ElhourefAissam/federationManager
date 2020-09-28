<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $fillable = ['NomFr','NomAr','CNI','DNS','Sexe','StatutFamilierFr',
                            'StatutFamilierAr','Telephone','AdressFr','AdressAr','Picture'];
                            
    public function contracts()
    {
        return $this->hasMany('App\contract');
    }

    function files(){
        return $this->hasMany(EmployeeRecord::class,'employee_records','employee_id','id');
    }

    
}
