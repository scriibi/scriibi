<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/*
this class associates a student with a particlar skill at a particular level. this association is then used as a student goal, eg. in a goalsheet.
*/

class goals extends Model
{
    protected $primaryKey = 'goal_Id';

    public function skills_level(){
        return $this->belongsTo('App\skills_levels', 'skills_levels_skills_levels_Id', 'skills_levels_Id');
    }

    public function classes_student(){
        return $this->belongsTo('App\classes_students', 'classes_students_classes_students_Id', 'classes_students_Id');
    }
}   
