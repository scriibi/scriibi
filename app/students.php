<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
students are not currently users.
students have an "enrolled level" and a "rubrik level".
"enrolled level" denotes the scriibi level in which they are enrolled eg. grade 3.
"rubrik level" denotes the teacher-assigned scriibi level accoding to a teacher's assessment.
$this allows us to records whether a student is below or above their enrolled level, as well as which teachers have students above or below enrolled level.
*/


class students extends Model
{
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

    public function teachers(){
        return $this->belongsToMany('App\teachers', 'teacher_students', 'students_student_Id', 'teachers_user_Id');
    }
}
