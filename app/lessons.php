<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
a lesson is a teaching tool that is defined by scriibi. it contains teaching content, and is target at a specific level for a specific skill.
*/


class lessons extends Model
{
    protected $primaryKey = 'lesson_Id';

    public function teachers(){
        return $this->belongsToMany('App\teachers', 'teachers_lessons', 'lessons_lesson_Id', 'teachers_user_Id');
    }

    public function skills(){
        return $this->belongsToMany('App\skills', 'lessons_skills', 'lessons_skills_lessons_lesson_Id', 'lessons_skills_skills_skill_Id');
    }

    public function specific_writing_problems(){
        return $this->belongsToMany('App\specific_writing_problems', 'specific_writing_problems_lessons', 'lessons_lesson_Id', 'specific_writing_problem_specific_writing_problem_Id');
    }

    public function general_writing_problems(){
        return $this->belongsToMany('App\general_writing_problems', 'general_writing_problem_lessons', 'lessons_lesson_Id', 'categories_lesson_categories_Id');
    }

    public function scriibi_levels(){
        return $this->belongsToMany('App\ScriibiLevels', 'lessons_scriibi_levels', 'lessons_lesson_Id', 'scriibi_levels_scriibi_Level_Id');
    }
}
