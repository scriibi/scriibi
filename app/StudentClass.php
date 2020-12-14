<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class StudentClass extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'student_class';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
}
