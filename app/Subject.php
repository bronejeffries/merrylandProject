<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //


    protected $guarded = [];

    public function students(){

    	return $this->belongsToMany(Student::class);
    }

    public function stuclasses(){

    	return $this->belongsToMany(StuClass::class);
    }

    public function exams(){

        return $this->hasMany('App\Exam','subject_id');
    }

    public function teachers(){

    	return $this->belongsToMany('App\Teacher');
    }



    public function studentgroup(){

        return $this->belongsTo('App\StudentGroup','available_for_stdgroup_id');

    }
}
