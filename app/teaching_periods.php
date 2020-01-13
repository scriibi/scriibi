<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teaching_periods extends Model
{
    public function writing_tasks(){
        return $this->hasOne('App/writing_tasks');
    }
}
