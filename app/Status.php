<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'status';

    /**
     * Get the wirting tasks for the status.
     */
    public function writingTasks()
    {
        return $this->hasMany('App\WritingTask', 'status_id');
    }
}
