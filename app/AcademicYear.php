<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
    public function sclass()
    {
        return $this->hasMany('App\Sclass');
    }


}
