<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
scriibilevels is the global value that can be assigned to a student, a teacher, an assesment, a curriculum etc.
this provides a way of normalising data across different curriculums.
*/

class ScriibiLevels extends Model
{
    protected $primaryKey = 'scriibi_Level_Id';

    public function tasks_students(){
        return $this->hasOne('App\tasks_students', 'level_before_attempt', 'scriibi_Level_Id');
    }

    public function students_rubrik_level(){
        return $this->hasOne('App\students', 'rubrik_level', 'scriibi_Level_Id');
    }

    public function students_enrolled_level(){
        return $this->hasOne('App\students', 'enrolled_Level_Id', 'scriibi_Level_Id');
    }

    public function lessons(){
        return $this->belongsToMany('App\lessons', 'lessons_scriibi_levels', 'scriibi_levels_scriibi_Level_Id', 'lessons_lesson_Id');
    }

    public function teachers(){
        return $this->belongsToMany('App\teachers', 'teachers_scriibi_levels', 'scriibi_levels_scriibi_Level_Id', 'teachers_user_Id');
    }

    public function curriculum_scriibi_levels_local(){
        return $this->hasMany('App\curriculum_scriibi_levels', 'local_level', 'scriibi_Level_Id');
    }

    public function curriculum_scriibi_levels_global(){
        return $this->hasMany('App\curriculum_scriibi_levels', 'global_level', 'scriibi_Level_Id');
    }
}
