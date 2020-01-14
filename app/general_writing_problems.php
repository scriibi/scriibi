<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
a general writing problem is a way of categorising a particlar lesson. a lesson may be designed to target 0 or many general writing problems.
*/

class general_writing_problems extends Model
{
    protected $primaryKey = 'lesson_categories_Id';

    public function lessons(){
        return $this->belongsToMany('App\lessons', 'general_writing_problem_lessons', 'categories_lesson_categories_Id', 'lessons_lesson_Id');
    }
}
