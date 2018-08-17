<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sclass extends Model
{
  protected $fillable = [
      'name',
      'class_number'
    ];

    public function student()
    {
        return $this->hasMany('App\Student');
    }
    public function sclass_stream()
    {
        return $this->hasMany('App\SclassStream','sclass_id');
    }
}
