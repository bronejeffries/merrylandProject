<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //

    protected $guarded= [];

    protected $casts=["others"=>"array"];

    public function students(){
    	return $this->hasMany(Student::class,'mentor_id');
    }

    public function role(){
    	return $this->belongsTo(Role::class);
    }

    public function subjects(){
    	return $this->belongsToMany('App\Subject');
    }

}
