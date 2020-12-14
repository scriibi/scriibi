<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class GradeLabel extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'grade_label';
}
