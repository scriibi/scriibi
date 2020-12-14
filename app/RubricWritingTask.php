<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class RubricWritingTask extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rubric_writing_task';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
}
