<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class strategies extends Model
{
    public function skills_levels(){
        return $this->hasOne('App\skills_levels');
    }
}
