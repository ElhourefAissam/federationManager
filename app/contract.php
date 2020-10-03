<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = ['FunctionFr','FunctionAr','DateDebut','DateFin','Salaire'
                            ,'employe_id','office_id'];

    public function employe()
    {
        return $this->belongsTo('App\employe');
    }
}
