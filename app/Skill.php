<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'skill';

    /**
     * The rubrics that belong to the skill.
     */
    public function rubrics()
    {
        return $this->belongsToMany('App\Rubric', 'rubric_skill', 'skill_id', 'rubric_id')
                    ->using('App\RubricSkill')
                    ->withPivot(['id', 'rubric_id', 'skill_id', 'created_at', 'updated_at']);
    }

    /**
     * The traits that belong to the skill.
     */
    public function traits()
    {
        return $this->belongsToMany('App\Traits', 'skill_trait', 'skill_id', 'trait_id')
                    ->using('App\SkillTrait')
                    ->withPivot(['id', 'skill_id', 'trait_id', 'created_at', 'updated_at']);
    }

    /**
     * The text types that belong to the skill.
     */
    public function textTypes()
    {
        return $this->belongsToMany('App\TextType', 'text_type_skill', 'skill_id', 'text_type_id')
                    ->using('App\TextTypeSkill')
                    ->withPivot(['id', 'text_type_id', 'skill_id', 'created_at', 'updated_at']);
    }

    /**
     * The writing tasks that belong to the skill.
     */
    public function writingTasks()
    {
        return $this->belongsToMany('App\WritingTask', 'task_skill', 'skill_id', 'writing_task_id')
                    ->using('App\TaskSkill')
                    ->withPivot(['id', 'writing_task_id', 'skill_id', 'created_at', 'updated_at']);
    }

    /**
     * The scriibi levels that belong to the skill.
     */
    public function scriibiLevels()
    {
        return $this->belongsToMany('App\ScriibiLevel', 'skill_level', 'skill_id', 'scriibi_level_id')
                    ->using('App\SkillLevel')
                    ->withPivot(['id', 'skill_id', 'scriibi_level_id', 'created_at', 'updated_at']);
    }
}
