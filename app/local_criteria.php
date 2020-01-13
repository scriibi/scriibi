<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class local_criteria extends Model
{
    public function curriculum_scriibi_levels_criteria(){
        return $this->hasOne('App\curriculum_scriibi_levels_criteria');
    }
}
