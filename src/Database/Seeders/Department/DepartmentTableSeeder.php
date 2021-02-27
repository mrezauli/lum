<?php

use Mrezauli\Lum\Seeders\Department\MasterDepartmentTableSeeder;

namespace Mrezauli\Lum\Database\Seeders\Department;

class DepartmentTableSeeder extends MasterDepartmentTableSeeder
{
    protected $departments = [
        [
            'title'     => "Clients",
            'parent'    => '',
        ],

    ];
}