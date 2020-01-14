<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teaching_periods extends Model
{
    protected $primaryKey = 'teaching_period_Id';

    public function writing_tasks(){
        return $this->hasOne('App/writing_tasks', 'teaching_period_Id', 'teaching_period_Id);
    }
}
