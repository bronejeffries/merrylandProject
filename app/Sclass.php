<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sclass extends Model
{

//  protected $table = 'sclasses';
  public function academicyear(){
    return $this->belongsTo(AcademicYear::class);
  }

  public function sclass_stream(){
    return $this->hasMany(SclassStream::class);
  }

  public function subject(){
    return $this->belongsToMany(Subject::class);
  }

}
