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
}
