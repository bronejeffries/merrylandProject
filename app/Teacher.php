<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //

    protected $fillable = ['name'];

    public function students(){
    	return $this->hasMany(Student::class,'mentor_id');
    }

    public function role(){

    	return $this->belongsTo(Role::class);
    }

}
