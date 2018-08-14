<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
  public function sclass_stream(){
    return $this->hasMany(SclassStream::class);
  }

}
