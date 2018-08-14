<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stuclass extends Model
{

  protected $table = 'sclasses';
  public function academicyear(){
    return $this->belongsTo(AcademicYear::class);
  }

  public function stream(){
    return $this->belongsToMany(Stream::class);
  }

  public function student(){
    return $this->hasToMany(Student::class);
  }

  public function subject(){
    return $this->belongsToMany(Subject::class);
  }

}
