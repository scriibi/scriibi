<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class RubricSkill extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rubric_skill';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
}
