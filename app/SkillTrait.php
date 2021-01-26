<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class SkillTrait extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'skill_trait';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
}
