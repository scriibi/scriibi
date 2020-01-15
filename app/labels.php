<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class labels extends Model
{
    protected $primaryKey = 'label_id';

    public function curriculum(){
        return $this->belongsTo('App\curriculum', 'fk_curriculum_id', 'curriculum_Id');
    }

    public function scriibi_levels(){
        return $this->belongsTo('App\ScriibiLevels', 'fk_local_scriibi_level', 'scriibi_Level_Id');
    }

}
