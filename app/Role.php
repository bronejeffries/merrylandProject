<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //

    protected $fillable = ['name'];

    public function teachers(){

    	return $this->belongsToMany(Teacher::class);
    }
}
