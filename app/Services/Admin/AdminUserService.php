<?php

namespace App\Services\Admin;

use App\Repositories\Admin\User\AdminUserRepositoryInterface;

class AdminUserService
{
    protected AdminUserRepositoryInterface $userRepository;

    public function __construct(AdminUserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAllUsersPaginated()
    {
        return $this->userRepository->getAllPaginated();
    }

    public function createUserAdmin($request)
    {
        return $this->userRepository->createUser($request);
    }
}
