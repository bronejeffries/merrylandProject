<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = ['regiNo',
                            'stdNo',
                            'class_id',
                            'level',
                            'mentor_id',
                            'stream',
                            'shift',
                            'firstName',
                            'middleName',
                            'lastName',
                            'gender',
                            'religion',
                            'nationality',
                            'dob',
                            'photo',
                            'extraActivity',
                            'remarks',
                            'fatherName',
                            'fatherCellNo',
                            'motherName',
                            'motherCellNo',
                            'localGuardian',
                            'localGuardianCell',
                            'presentAddress',
                            'parmanentAddress',
                            'isActive'];

    public function class(){
    	return $this->belongsTo('App\Class');
    }

    public function subjects(){
    	return $this->hasMany('App\Subject');
    }

    public function level(){
    	return $this->belongsTo('App\StudentGroup','level');
    }

    public function mentor(){
        return $this->belongsTo('App\Teacher','mentor_id');
    }
}
