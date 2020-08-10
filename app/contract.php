<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contract extends Model
{
    public function employe()
    {
        return $this->belongsTo('App\employe');
    }
}
