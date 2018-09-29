<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    //

   protected $fillable = ['student_id','sclassstream_id','subject_id','test','mid','final','grade','enrollment_id'];


    public function subject(){


    	return $this->belongsTo(Subject::class);

    }

    public function sclassstream(){
        return $this->belongsTo('App\SclassStream','sclassstream_id');
    }

    public function enrollment(){
        return $this->belongsTo('App\Enrollment','enrollment_id');
}

    public function student(){
        return $this->belongsTo('App\Student');
    }
}
