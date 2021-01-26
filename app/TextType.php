<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TextType extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'text_type';

    /**
     * The skills that belong to the text type.
     */
    public function skills()
    {
        return $this->belongsToMany('App\Skill', 'text_type_skill', 'text_type_id', 'skill_id')
                    ->using('App\TextTypeSkill')
                    ->withPivot(['id', 'text_type_id', 'skill_id', 'created_at', 'updated_at']);
    }
}
