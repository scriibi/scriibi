<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class TeacherSchool extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'teacher_school';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
}
