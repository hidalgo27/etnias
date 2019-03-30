<?php

namespace EtniasPeru;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {
        return $this
            ->belongsToMany('EtniasPeru\User')
            ->withTimestamps();
    }

    public function role_user()
    {
        return $this->hasMany(RoleUser::class, 'role_id');
    }
}
