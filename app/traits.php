<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traits extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'trait';

    /**
     * The skills that belong to the trait..
     */
    public function skills()
    {
        return $this->belongsToMany('App\Skill', 'skill_trait','trait_id', 'skill_id')
                    ->using('App\SkillTrait')
                    ->withPivot(['id', 'skill_id', 'trait_id', 'created_at', 'updated_at']);
    }
}
