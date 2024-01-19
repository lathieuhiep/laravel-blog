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

    public function getUserAdmin($id, array $with = [])
    {
        return $this->userRepository->find($id, $with);
    }

    public function updateUserAdmin($request, $id)
    {
        return $this->userRepository->updateUser($request, $id);
    }
}
