<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * teachers is the main "user" entity.
 * we records, firstname, lastname and email address.
 */
class teachers extends Model
{
    protected $primaryKey = 'user_Id';

    public function schools_primary_contact(){
        return $this->hasOne('App\schools', 'primary_Contact_Id', 'user_Id');
    }

    public function lessons(){
        return $this->belongsToMany('App\lessons', 'teachers_lessons', 'teachers_user_Id', 'lessons_lesson_Id');
    }

    public function position(){
        return $this->belongsToMany('App\positions', 'teachers_positions', 'teachers_user_Id', 'positions_position_Id');
    }

    public function classes(){
        return $this->belongsToMany('App\classes', 'classes_teachers', 'teachers_user_Id', 'classes_teachers_classes_class_Id');
    }

    public function schools(){
        return $this->belongsToMany('App\schools', 'school_teachers', 'teachers_user_Id', 'schools_school_Id');
    }

    public function students(){
        return $this->belongsToMany('App\students', 'teacher_students', 'teachers_user_Id', 'students_student_Id');
    }
}
