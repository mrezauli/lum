<?php

namespace Mrezauli\Lum\Entities;

use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
}
