<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'membership';

    /**
     * The users that belong to the membership.
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'user_membership', 'membership_id', 'user_id')
                    ->using('App\UserMembership')
                    ->withPivot(['id', 'user_id', 'membership_id', 'created_at', 'updated_at']);
    }
}
