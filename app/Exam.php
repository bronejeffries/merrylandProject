<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    //

    protected $fillable = ['student_id','class_id','subject_id','test','mid','final','total','grade','term_id','academic_year_id'];

    public function subject(){

        return $this->belongsTo('App\Subject');
    }

    public function class(){
        return $this->belongsTo('App\Class_');
    }

    public function academicyear(){
        return $this->belongsTo('App\Academicyear');
    }
    public function term(){
        return $this->belongsTo('App\Term');
    }

    public function student(){
        return $this->belongsTo('App\Student');
    }
}
