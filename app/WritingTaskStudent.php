<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class WritingTaskStudent extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'writing_task_student';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
}
