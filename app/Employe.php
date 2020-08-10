<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    public function contracts()
    {
        return $this->hasMany('App\contract');
    }
}
