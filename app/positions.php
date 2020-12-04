<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
a position is held by a teacher at a school. eg: principal, literacy lead, etc. a teacher may have more than one psotion at a time
//Class - teacher can see all students in their student list
//Grade - teaher can see all students in their assigend year level
//School - teacher can see all students in their assigned school

Teachers will be assigned Class and Grade postions on first login
*/



class positions extends Model
{
    // ################################################################################# older model file (delete later) ########################################################################################
    protected $primaryKey = 'position_Id';

    public function teachers(){
        return $this->belongsToMany('App\teachers', 'teachers_positions', 'positions_position_Id', 'teachers_user_Id');
    }

}
