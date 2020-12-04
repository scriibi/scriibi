<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
a lesson may target 0 or more specific writing problems. this a way of further categorising lessons
*/
class specific_writing_problems extends Model
{
    // ################################################################################# older model file (delete later) ########################################################################################
    protected $primaryKey = 'specific_writing_problem_Id';

    public function lessons(){
        return $this->belongsToMany('App\lessons', 'specific_writing_problems_lessons', 'specific_writing_problem_specific_writing_problem_Id', 'lessons_lesson_Id');
    }
}
