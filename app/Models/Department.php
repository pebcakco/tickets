<?php

namespace Tickets\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    /**
     * This department has many users
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('Tickets\User', 'department_id');
    }
}
