<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class general_writing_problems extends Model
{
    protected $primaryKey = 'lesson_categories_Id';

    public function lessons(){
        return $this->belongsToMany('App\lessons', 'general_writing_problem_lessons', 'categories_lesson_categories_Id', 'lessons_lesson_Id');
    }
}
