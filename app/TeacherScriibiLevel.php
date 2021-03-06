<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class TeacherScriibiLevel extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'teacher_scriibi_level';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
}
