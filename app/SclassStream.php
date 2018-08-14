<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SclassStream extends Model
{
  public function sclass(){
    return $this->belongsTo(Sclass::class);
  }
  public function stream(){
    return $this->belongsTo(Sclass::class);
  }
  public function student(){
    return $this->belongsToMany(Sclass::class);
  }
}
