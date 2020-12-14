<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class AssessedLabel extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'assessed_label';
}
