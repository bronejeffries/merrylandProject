<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
  protected $fillable = [
      'name'
    ];

  public function sclass_stream()
  {
    return $this->hasMany('App\SclassStream','stream_id');
  }

}
