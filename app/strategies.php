<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class strategies extends Model
{   
    protected $primaryKey = 'strategies_Id';

    public function skills_levels(){
        return $this->hasOne('App\skills_levels');
    }
}
