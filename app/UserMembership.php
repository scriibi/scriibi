<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserMembership extends Pivot
{
    /**
     * The table associated with the pivot.
     *
     * @var string
     */
    protected $table = 'user_membership';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
}
