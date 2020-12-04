<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
for any given skill at any given level, there exists a corresponding "student definition" that describes the skill in students terms. this is used in goalsheets.
*/

class student_definitions extends Model
{
    // ################################################################################# older model file (delete later) ########################################################################################
    protected $primaryKey = 'student_definitions_Id';

    public function skills_level(){
        return $this->hasOne('App\skills_levels', 'student_definitions_student_definitions_Id', 'student_definitions_Id');
    }
}
