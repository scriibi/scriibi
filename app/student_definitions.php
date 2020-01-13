<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student_definitions extends Model
{   
    protected $primaryKey = 'student_definitions_Id';

    public function skills_level(){
        return $this->hasOne('App\skills_levels', 'student_definitions_student_definitions_Id', 'student_definitions_Id');
    }
}
