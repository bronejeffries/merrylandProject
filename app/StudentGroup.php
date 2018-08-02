<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentGroup extends Model
{
    //this is to mean like level O and A levels

	protected $table="student_groups";

    protected $fillable=['name'];

    public function students(){

    	return $this->hasMany('App\Student','level');
    }
}
