<?php

namespace Mrezauli\Lum\Repository\Eloquents;

use App\Entities\Department;
use Mrezauli\Lum\Repository\Eloquents\BaseEloquentRepository;
use Mrezauli\Lum\Repository\Contracts\DepartmentRepositoryInterface;

class DepartmentRepository extends BaseEloquentRepository implements DepartmentRepositoryInterface
{
    protected $model = Department::class;

    public function syncDepartments($owner, array $departments = [])
    {
        return $owner->departments()->sync($departments, true);
    }

    public function attachDepartment($owner, array $departments = [])
    {
        return $owner->departments()->attach($departments);
    }
}
