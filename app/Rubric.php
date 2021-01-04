<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rubric';

    /**
     * Get the scriibi level that owns the rubric.
     */
    public function scriibiLevel()
    {
        return $this->belongsTo('App\ScriibiLevel', 'scriibi_level_id');
    }

    /**
     * The skills that belong to the rubric.
     */
    public function skills()
    {
        return $this->belongsToMany('App\Skill', 'rubric_skill', 'rubric_id', 'skill_id')
                    ->using('App\RubricSkill')
                    ->withPivot(['id', 'rubric_id', 'skill_id', 'created_at', 'updated_at']);
    }

    /**
     * The teachers that belong to the rubric.
     */
    public function teachers()
    {
        return $this->belongsToMany('App\User', 'rubric_teacher_template', 'rubric_id', 'teacher_id')
                    ->using('App\RubricTeacherTemplate')
                    ->withPivot(['id', 'rubric_id', 'teacher_id', 'created_at', 'updated_at']);
    }

    /**
     * The writing tasks that belong to the rubric.
     */
    public function writingTasks()
    {
        return $this->belongsToMany('App\WritingTask', 'rubric_writing_task', 'rubric_id', 'writing_task_id')
                    ->using('App\RubricWritingTask')
                    ->withPivot(['id', 'rubric_id', 'writing_task_id', 'created_at', 'updated_at']);
    }

    /**
     * The curriculum school types that belong to the rubric.
     */
    public function curriculumSchoolType()
    {
        return $this->belongsToMany('App\CurriculumSchoolType', 'rubric_scriibi', 'rubric_id', 'curriculum_school_type_id')
            ->using('App\RubricScriibi')
            ->withPivot(['id', 'rubric_id', 'curriculum_school_type_id', 'created_at', 'updated_at']);
    }
}
