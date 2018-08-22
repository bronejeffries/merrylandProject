<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $casts = [
        'level'=> 'integer'
    ];
    protected $guarded = [];

    public function sclass_stream(){
    	return $this->hasOne(Sclass::class);
    }

    public function subjects(){
    	return $this->belongsToMany(Subject::class);
    }

    public function level(){
    	return $this->belongsTo(StudentGroup::class,'level');
    }

    public function caretaker(){
        return $this->belongsTo(Caretaker::class);
    }

     public function stream_class(){

    return $this->belongsTo(SclassStream::class, 'sclass_stream_id');
    
  }
}
