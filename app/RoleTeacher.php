<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleTeacher extends Model
{
    //

    protected $table = "role_teacher";
    protected $fillable=['role_id','teacher_id'];
}
