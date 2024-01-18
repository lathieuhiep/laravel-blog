<?php

namespace App\Repositories\Admin\User;

use App\Models\User;
use App\Models\UserRole;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class AdminAdminUserRepository extends BaseRepository implements AdminUserRepositoryInterface
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }

    public function getAllPaginated()
    {
        return $this->model->select(['id', 'name', 'email'])
            ->with('roles:name')
            ->paginate(12);
    }

    public function createUser($request)
    {
        try {
            DB::beginTransaction();

            // Create the user
            $user = new User;
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->save();

            DB::commit();

            // add role user
            $userRole = new UserRole;
            $userRole->user_id = $user->id;
            $userRole->role_id = $request->input('roles');
            $userRole->save();

            return true;
        } catch (\Exception $e) {
            DB::rollback();

            return false;
        }
    }
}
