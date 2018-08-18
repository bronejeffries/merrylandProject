<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SclassStream extends Model
{
  protected $fillable = [
      'sclass_id',
      'stream_id'
    ];

  public function sclass()
  {
    return $this->belongsTo('App\Sclass');
  }
  public function stream()
  {
    return $this->belongsTo('App\Stream');
  }

}