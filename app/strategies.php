<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/*
for any given skill at any given level, there exists a corresponding "strategy" that is designed to advance that particular skill to the next level. this strategy is used in goal sheets.
*/


class strategies extends Model
{
    protected $primaryKey = 'strategies_Id';

    public function skills_levels(){
        return $this->hasOne('App\skills_levels', 'strategies_strategies_Id', 'strategies_Id');
    }
}
