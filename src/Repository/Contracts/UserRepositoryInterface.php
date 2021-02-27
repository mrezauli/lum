<?php

namespace Mrezauli\Lum\Repository\Contracts;

interface UserRepositoryInterface extends BaseRepositoryInterface
{
    public function allWithTrashed();

    public function restoreUser(int $ID);
}
