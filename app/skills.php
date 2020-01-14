<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
this is the scriibi-defined writing skill that serves as the basis of assessment.
*/
class skills extends Model
{
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
}
