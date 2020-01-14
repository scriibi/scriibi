<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
a lesson is targeted for at least one scriibi level. this class records that association.
*/

class lessons_scriibi_levels extends Model
{
    protected $primaryKey = 'lessons_scriibi_levels_Id';

}
