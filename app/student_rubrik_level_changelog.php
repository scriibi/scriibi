<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
this records any changes made to any students "rubrik level" over time. "rubrik level" can only be adjusted by the students teacher.
*/

class student_rubrik_level_changelog extends Model
{
    protected $primaryKey = 'student_rubrik_level_changelog_Id';

}
