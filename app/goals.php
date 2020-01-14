<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/*
this class associates a student with a particlar skill at a particular level. this association is then used as a student goal, eg. in a goalsheet.
*/

class goals extends Model
{
    protected $primaryKey = 'goal_Id';

}
