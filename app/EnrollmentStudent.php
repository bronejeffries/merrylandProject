<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnrollmentStudent extends Model
{
    //
    protected $table = 'enrollment_student';
    protected $fillable = ['enrollment_id','student_id','sclassstream_id'];


    public function student(){

      return $this->belongsTo(Student::class,'student_id');
    }

    public function enrollment(){

      return $this->belongsTo(Enrollment::class,'enrollment_id');
    }

    public function SclassStream(){

      return $this->belongsTo(SclassStream::class,'sclassstream_id');
    }





}
