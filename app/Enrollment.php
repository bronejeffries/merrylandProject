<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    //
    protected $table = 'enrollments';
    protected $fillable = ['period','term_id'];


    public function term()
    {
        return $this->belongsTo('App\Term','term_id');
    }

    public function enrolled_students(){

      return $this->hasMany('App\EnrollmentStudent','enrollment_id');

    }
    public function exams(){
      return $this->hasMany(Exam::class,'enrollment_id');
    }
}
