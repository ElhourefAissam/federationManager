<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['roleName','permission'];

    function users(){
        return $this->hasMany(User::class);
    }
}
