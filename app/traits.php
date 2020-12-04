<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * writing traits are the top-level categorisation of writing skills. all skills belong to a trait
 */
class traits extends Model
{
    // ################################################################################# older model file (delete later) ########################################################################################
    protected $primaryKey = 'trait_Id';

    public function skills(){
        return $this->belongsToMany('App\skills', 'skills_traits', 'skills_traits_traits_trait_Id', 'skills_traits_skills_skill_Id');
    }


}

