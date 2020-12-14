<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class TextTypeSkill extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'text_type_skill';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
}
