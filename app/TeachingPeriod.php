<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeachingPeriod extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'teaching_period';

    /**
     * Get the classes for the teaching period.
     */
    public function classes()
    {
        return $this->hasMany('App\Clss', 'teaching_period_id');
    }

    /**
     * Get the writing tasks for the teaching period.
     */
    public function writingTasks()
    {
        return $this->hasMany('App\WritingTask', 'teaching_period_id');
    }
}
