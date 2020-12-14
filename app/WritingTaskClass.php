<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class WritingTaskClass extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'writing_task_class';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
}
