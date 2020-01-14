<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * a teacher may hold one or more roles at a school such as literacy lead, principal etc . this records that association.
 */
class teachers_positions extends Model
{
    protected $primaryKey = 'teachers_positions_Id';

}
