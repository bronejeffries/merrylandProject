<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{

    public function enrollments(){
      return $this->hasMany(Enrollment::class,'term_id');
    }

    public function exam(){
      return $this->hasMany(Exam::class);
    }
}
