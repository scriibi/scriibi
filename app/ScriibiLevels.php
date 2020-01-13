<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScriibiLevels extends Model
{   
    protected $primaryKey = 'scriibi_Level_Id';

    public function tasks_students(){
        return $this->hasOne('App\tasks_students');
    }

    public function students(){
        return $this->hasOne('App\students');
    }
}
