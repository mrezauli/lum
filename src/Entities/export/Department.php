<?php

namespace App\Entities;

use Mrezauli\Lum\Entities\Department as UserManagementDepartment;

class Department extends UserManagementDepartment
{
    protected $fillable = [
        'title',
        'slug',
        'parent_id',
    ];
}
