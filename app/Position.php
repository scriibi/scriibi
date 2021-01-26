<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'position';

    /**
     * The users/teachers that belong to the position.
     */
    public function teachers()
    {
        return $this->belongsToMany('App\User', 'teacher_position', 'position_id', 'teacher_id')
                    ->using('App\TeacherPosition')
                    ->withPivot(['id', 'teacher_id', 'position_id', 'created_at', 'updated_at']);
    }
}
