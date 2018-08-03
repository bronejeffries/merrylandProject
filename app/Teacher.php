<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //

    protected $fillable = ['name'];

    public function students(){
    	return $this->hasMany('App\Student','mentor_id');
    }

    public function role(){

    	return $this->belongsTo('App\Role');
    }

    public function subjects(){

    	return $this->belongsToMany('App\Subject');
    }

}
