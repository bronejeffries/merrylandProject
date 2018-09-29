<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    protected $table = 'staffs';
    protected $guarded = [];

    protected $casts=[
        "others"=>"array"
    ];

    public function students(){
    	return $this->hasMany(Student::class,'mentor_id');
    }

    // public function subjects(){

    // 	return $this->belongsToMany('App\Subject');
    // }

}
