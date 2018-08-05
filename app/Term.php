<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    public function academicyear(){
      return $this->hasMany(AcademicYear::class);
    }

    public function exam(){
      return $this->hasMany(Exam::class);
    }
}
