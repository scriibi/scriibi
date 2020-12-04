<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
/**
 * teachers is the main "user" entity.
 * we records, firstname, lastname and email address.
 */
class teachers extends Authenticatable
{
    // ################################################################################# older model file (delete later) ########################################################################################
    protected $primaryKey = 'user_Id';

    protected $fillable = [
        'name',
        'teacher_Email',
        'sub'
    ];

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

    public function scriibi_level(){
        return $this->belongsToMany('App\ScriibiLevels', 'teachers_scriibi_levels', 'teachers_user_Id', 'scriibi_levels_scriibi_Level_Id');
    }

    public function writing_task(){
        return $this->hasMany('App\writing_tasks', 'created_By_Teacher_User_Id', 'user_Id');
    }

    public function formative_assessment(){
        return $this->hasMany('App\formative_assessments', 'created_by', 'user_Id');
    }

    public function student_rubrik_level_changelog(){
        return $this->hasMany('App\student_rubrik_level_changelog', 'teachers_user_Id', 'user_Id');
    }
}
