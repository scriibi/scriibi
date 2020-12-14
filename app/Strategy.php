<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Strategy extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'strategy';

    /**
     * The skill levels that belong to the strategy.
     */
    public function skillLevels()
    {
        return $this->belongsToMany('App\SkillLevel', 'skill_level_strategy', 'strategy_id', 'skill_level_id')
                    ->using('App\SkillLevelStrategy')
                    ->withPivot(['id', 'skill_level_id', 'strategy_id', 'created_at', 'updated_at']);
    }
}
