<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GlobalCriteria extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'global_criteria';

    /**
     * The skill levels that belong to the global criteria.
     */
    public function skillLevels()
    {
        return $this->belongsToMany('App\SkillLevel', 'skill_level_global_criteria', 'global_criteria_id', 'skill_level_id')
                    ->using('App\SkillLevelGlobalCriteria')
                    ->withPivot(['id', 'skill_level_id', 'global_criteria_id', 'created_at', 'updated_at']);
    }
}
