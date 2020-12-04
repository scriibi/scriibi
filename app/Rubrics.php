<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * a rubric stores a title, description, and level, and is then associated with a group
 * of skills. it is then used to assess students.
 */
class Rubrics extends Model
{
    // ################################################################################# older model file (delete later) ########################################################################################
    protected $primaryKey = 'rubric_Id';

    public function writing_tasks(){
        return $this->hasMany('App\writing_tasks', 'fk_rubric_id', 'rubric_Id');
    }
}
