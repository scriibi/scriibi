<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
this is the scriibi-defined writing skill that serves as the basis of assessment.
*/
class skills extends Model
{
    // ################################################################################# older model file (delete later) ########################################################################################
    protected $primaryKey = 'skill_Id';

    public function lessons(){
        return $this->brlongsToMany('App\lessons', 'lessons_skills', 'lessons_skills_skills_skill_Id', 'lessons_skills_lessons_lesson_Id');
    }

    public function traits(){
        return $this->belongsToMany('App\traits', 'skills_traits', 'skills_traits_skills_skill_Id', 'skills_traits_traits_trait_Id');
    }

    public function text_types(){
        return $this->belongsToMany('App\text_types', 'text_types_skills', 'text_types_skills_skill_Id', 'text_types_skills_text_type_Id');
    }

    public function skills_level(){
        return $this->hasMany('App\skills_levels', 'skills_levels_skills_skill_Id', 'skill_Id');
    }

    public function task_skills_result(){
        return $this->hasMany('App\task_skills_results', 'skills_skill_Id', 'skill_Id');
    }

    public function writing_tasks(){
        return $this->belongsToMany('App\writing_tasks', 'tasks_skills', 'skills_skill_Id', 'writing_tasks_writing_task_Id');
    }
}
