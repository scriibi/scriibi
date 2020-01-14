<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * this model is a scriibi defined teaching period such as term 1, term 2 etc.
 * we currently record the teaching period for any given writig task.
 */
class teaching_periods extends Model
{
    protected $primaryKey = 'teaching_period_Id';

    public function writing_tasks(){
        return $this->hasOne('App\writing_tasks', 'teaching_period_Id', 'teaching_period_Id');
    }

    public function formative_assessment(){
        return $this->hasMany('App\formative_assessments', 'teaching_period', 'teaching_period_Id');
    }
}
