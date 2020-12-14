<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class RubricTeacherTemplate extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rubric_teacher_template';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
}
