<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    public function employe()
    {
        return $this->belongsTo('App\employe');
    }
}
