<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    //

       protected $fillable = ['student_id','sclass_id','subject_id','term_id','test','mid','final','grade','academic_year_id'];


    public function subject(){


    	return $this->belongsTo(Subject::class);

    }

    public function sclass(){
        return $this->belongsTo('App\Sclass_');
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
