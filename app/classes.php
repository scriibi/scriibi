<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
a Class is a grouping of students that are taught by a teacher.
this is logically equivalent to a teacher's "student list".
first release fof scriibi web app only allows teachers to see/create
ONE "student list/class", but in future a teacher may have more than ONE.]
*/

class classes extends Model
{
    // ################################################################################# older model file (delete later) ########################################################################################
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
