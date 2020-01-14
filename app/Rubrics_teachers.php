<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * this associates teachers with rubrics. allows them to create rubrics and then save and return to them later.
 * in future, we could implement rubric-sharing based on this table.
 */
class Rubrics_teachers extends Model
{
    //
    protected $primaryKey = 'rubrics_teachers_Id';

}
