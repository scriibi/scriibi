<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class specific_writing_problems extends Model
{
    protected $primaryKey = 'specific_writing_problem_Id';

    public function lessons(){
        return $this->belongsToMany('App\lessons', 'specific_writing_problems_lessons', 'specific_writing_problem_specific_writing_problem_Id', 'lessons_lesson_Id');
    }
}
