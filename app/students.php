<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
