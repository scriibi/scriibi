<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * this lets us records which teacher taught which lesson and when, as well as recording whether the lesson is a teacher's "favourite"
 * based on this we can then serve a list of favourites or "not completed" lessons to a teacher.
 */
class teachers_lessons extends Model
{
    // ################################################################################# older model file (delete later) ########################################################################################
    protected $primaryKey = 'teachers_lessons_Id';

}
