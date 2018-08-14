<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentGroup extends Model
{
    //this is to mean like level O and A levels

	protected $table="student_groups";

    protected $fillable=['name'];

    public function students(){

    	return $this->hasMany(Student::class,'level');
    }

    public function subjects(){

    	return $this->hasMany(Subject::class,'available_for_stdgroup_id');
    }

}
