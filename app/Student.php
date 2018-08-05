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

    public function sclass(){
    	return $this->belongsTo(SClass::class);
    }

    public function subjects(){
    	return $this->belongsToMany(Subject::class);
    }

    public function level(){
    	return $this->belongsTo(StudentGroup::class,'level');
    }

    public function mentor(){
        return $this->belongsTo(Teacher::class,'mentor_id');
    }
}
