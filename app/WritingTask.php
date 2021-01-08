<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WritingTask extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'writing_task';

    /**
     * Get the status that owns the writing task.
     */
    public function status()
    {
        return $this->belongsTo('App\Status', 'status_id');
    }

    /**
     * Get the school that owns the writing task.
     */
    public function school()
    {
        return $this->belongsTo('App\School', 'school_id');
    }

    /**
     * Get the teaching period that owns the writing task.
     */
    public function teachingPeriod()
    {
        return $this->belongsTo('App\TeachingPeriod', 'teaching_period_id');
    }

    /**
     * The rubrics that belong to the writing task.
     */
    public function rubrics()
    {
        return $this->belongsToMany('App\Rubric', 'rubric_writing_task', 'writing_task_id', 'rubric_id')
                    ->using('App\RubricWritingTask')
                    ->withPivot(['id', 'rubric_id', 'writing_task_id', 'created_at', 'updated_at']);
    }

    /**
     * The classes that belong to the writing task.
     */
    public function classes()
    {
        return $this->belongsToMany('App\Clss', 'writing_task_class', 'writing_task_id', 'class_id')
                    ->using('App\WritingTaskClass')
                    ->withPivot(['id', 'class_id', 'writing_task_id', 'created_at', 'updated_at']);
    }

    /**
     * The students that belong to the writing task.
     */
    public function students()
    {
        return $this->belongsToMany('App\Student', 'writing_task_student', 'writing_task_id', 'student_id')
                    ->using('App\WritingTaskStudent')
                    ->withPivot(['id', 'student_id', 'writing_task_id', 'comment', 'status_flag', 'created_at', 'updated_at']);
    }

    /**
     * The skills that belong to the writing task.
     */
    public function skills()
    {
        return $this->belongsToMany('App\Skill', 'task_skill', 'writing_task_id', 'skill_id')
                    ->using('App\TaskSkill')
                    ->withPivot(['id', 'writing_task_id', 'skill_id', 'created_at', 'updated_at']);
    }

    /**
     * Get the writing task skill results for the writing task.
     */
    public function taskSkillStudentResults()
    {
        return $this->hasMany('App\TaskSkillStudentResult', 'writing_task_id');
    }

    /**
     * Get the user/teacher that owns the writing task.
     */
    public function teacher()
    {
        return $this->belongsTo('App\User', 'primary_owner_id');
    }
}
