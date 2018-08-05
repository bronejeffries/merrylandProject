<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
  public function sclass(){
    return $this->belongsToMany(Sclass::class);
  }
  
}
