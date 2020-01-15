<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assessed_level_label extends Model
{
    protected $primaryKey = 'assessed_level_label_id';

    public function school_type(){
        return $this->belongsTo('App\school_type', 'school_type_id_fk', 'school_type_id');
    }
}
