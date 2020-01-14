<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class traits extends Model
{
    protected $primaryKey = 'trait_Id';

    public function skills(){
        return $this->belongsToMany('App\skills', 'skills_traits', 'skills_traits_traits_trait_Id', 'skills_traits_skills_skill_Id');
    }

}
