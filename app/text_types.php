<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * a text type is scriibi-defined categorisation of a peice of writing.
 */
class text_types extends Model
{
    // ################################################################################# older model file (delete later) ########################################################################################
    protected $primaryKey = 'text_type_Id';

    public function skills(){
        return $this->belongsToMany('App\skills', 'text_types_skills', 'text_types_skills_text_type_Id', 'text_types_skills_skill_Id');
    }
}
