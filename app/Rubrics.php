<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * a rubric stores a title, description, and level, and is then associated with a group
 * of skills. it is then used to assess students.
 */
class Rubrics extends Model
{
    protected $primaryKey = 'rubric_Id';

    //
}
