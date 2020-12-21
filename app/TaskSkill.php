<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class TaskSkill extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'task_skill';

    /**
     * Get the writing task skill results for the task skill.
     */
    public function taskSkillStudentResults()
    {
        return $this->hasMany('App\TaskSkillStudentResult', 'task_skill_id');
    }
}
