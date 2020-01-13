<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class writing_tasks extends Model
{
    public function teaching_periods(){
        return $this->belongsTo('App/teaching_periods', 'teaching_period_Id', 'teaching_period_Id');
    }
}
