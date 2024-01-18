<?php

namespace App\Repositories\Admin\User;

use App\Repositories\BaseRepositoryInterface;

interface AdminUserRepositoryInterface extends BaseRepositoryInterface
{
    public function getAllPaginated();
    public function createUser($request);
}
