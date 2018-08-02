<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectTeacher extends Model
{
    //

    protected $table = "subject_teachers";

    protected $fillable = ['teacher_id','subject_id'];
}
