<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','content','image','office_id'];

    function office(){
        return $this->belongsTo(Office::class);
    }
}
