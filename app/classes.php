<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
a Class is a grouping of students that are taught by a teacher.
*/

class classes extends Model
{
    protected $primaryKey = 'class_Id';

    public function teachers(){
        return $this->belongsToMany('App\teachers', 'classes_teachers', 'classes_teachers_classes_class_Id', 'teachers_user_Id');
    }

    public function students(){
        return $this->belongsToMany('App\students', 'classes_students', 'classes_class_Id', 'students_student_Id');
    }

    public function school(){
        return $this->belongsTo('App\schools', 'schools_school_Id', 'school_Id');
    }
}
