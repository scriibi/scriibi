<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class TeacherPosition extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'teacher_position';
}
