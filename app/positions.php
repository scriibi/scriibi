<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class positions extends Model
{
    protected $primaryKey = 'position_Id';

    public function teachers(){
        return $this->belongsToMany('App\teachers', 'teachers_positions', 'positions_position_Id', 'teachers_user_Id');
    }

}
