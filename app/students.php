<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
students are not currently users.
students have an "enrolled level" and a "rubrik level".
"enrolled level" denotes the scriibi level in which they are enrolled eg. grade 3.
"rubrik level" denotes the teacher-assigned scriibi level accoding to a teacher's assessment.
this allows us to record whether a student is below or above their enrolled level, as well as which teachers have students above or below enrolled level.
*/


class students extends Model
{
    // ################################################################################# older model file (delete later) ########################################################################################
    protected $primaryKey = 'student_Id';

    public function ScriibiLevels_rubrik_level(){
        return $this->belongsTo('App\ScriibiLevels', 'rubrik_level', 'scriibi_Level_Id');
    }

    public function ScriibiLevels_enrolled_level(){
        return $this->belongsTo('App\ScriibiLevels', 'enrolled_Level_Id', 'scriibi_Level_Id');
    }

    public function classes(){
        return $this->belongsToMany('App\classes', 'classes_students', 'students_student_Id', 'classes_class_Id');
    }

    public function school(){
        return $this->belongsTo('App\schools', 'schools_school_Id', 'school_Id');
    }

    public function task_student(){
        return $this->hasMany('App\tasks_students', 'student_Id', 'student_Id');
    }

    public function student_rubrik_level_changelog(){
        return $this->hasMany('App\student_rubrik_level_changelog', 'students_student_Id', 'student_Id');
    }

    public function writing_tasks(){
        return $this->belongsToMany('App\writing_tasks', 'writting_task_students', 'fk_student_id', 'fk_writting_task_id');
    }
}
