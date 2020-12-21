<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskSkillStudentResult extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'task_skill_student_result';

    /**
     * Get the student that owns the task skill student result.
     */
    public function student()
    {
        return $this->belongsTo('App\Student', 'student_id');
    }

    /**
     * Get the writing task that owns the task skill student result.
     */
    public function writingTask()
    {
        return $this->belongsTo('App\WritingTask', 'writing_task_id');
    }

    /**
     * Get the scriibi level that owns the task skill student result.
     */
    public function scriibiLevel()
    {
        return $this->belongsTo('App\ScriibiLevel', 'result');
    }

    /**
     * Get the skill that owns the task skill student result.
     */
    public function skill()
    {
        return $this->belongsTo('App\Skill', 'skill_id');
    }

    /**
     * Get the task skill that owns the task skill student result.
     */
    public function taskSkill()
    {
        return $this->belongsTo('App\TaskSkill', 'task_skill_id');
    }
}
