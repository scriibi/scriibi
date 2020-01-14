<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 *
 * a writing task is created by a teacher in order to asses the skill level of students.
 *
 */
class writing_tasks extends Model
{
    protected $primaryKey = 'writing_task_Id';

    public function teaching_periods(){
        return $this->belongsTo('App/teaching_periods', 'teaching_period_Id', 'teaching_period_Id');
    }
}
