<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    protected $fillable = ['firstname','surname','fathername','gender_id','payment'];

    public function  gender(){
        return $this->belongsTo('App\Gender');
    }

    public function departments(){
        return $this->belongsToMany('App\Department');
    }
}
