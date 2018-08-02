<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    //

    protected $fillable = ['student_id','class_id','subject_id','test','mid','final','total','grade'];

    public function subject(){

    	return $this->belongsTo(Subject::class);
    }

    public function class(){
    	return $this->belongsTo('App\Class');
    }

    public function student(){
    	return $this->belongsTo('App\Student');
    }
}
