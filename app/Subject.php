<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //


    protected $fillable = ['code','name','is_core','available_for_stdgroup_id','teacher_id'];

    public function students(){

    	return $this->belongsToMany('App\Student');
    }

    public function classes(){

    	return $this->belongsToMany('App\Class');
    }

    public function exams(){

    	return $this->hasMany('App\Exam');
    }

    public function teachers(){

    	return $this->belongsToMany('App\Teacher');
    }

    public function studentgroup(){
    	return $this->belongsTo('App\StudentGroup');
    }
}
