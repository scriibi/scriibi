<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ClassScriibiLevel extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'class_scriibi_level';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
}
