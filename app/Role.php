<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * 多对多
     * 角色用户
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
