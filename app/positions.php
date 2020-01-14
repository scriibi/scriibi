<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
a position is held by a teacher at a school. eg: principal, literacy lead, etc. a teacher may have more than one psotion at a time
*/



class positions extends Model
{
    protected $primaryKey = 'position_Id';

    public function teachers(){
        return $this->belongsToMany('App\teachers', 'teachers_positions', 'positions_position_Id', 'teachers_user_Id');
    }

}
