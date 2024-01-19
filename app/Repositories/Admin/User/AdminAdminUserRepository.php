<?php

namespace App\Repositories\Admin\User;

use App\Models\User;
use App\Models\UserRole;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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

    public function createUser($request): bool
    {
        try {
            DB::beginTransaction();

            // Create the user
            $user = new User;
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->save();

            // add role user
            $userRole = new UserRole;
            $userRole->user_id = $user->id;
            $userRole->role_id = $request->input('roles');
            $userRole->save();

            DB::commit();

            return true;
        } catch (\Exception $e) {
            DB::rollback();

            return false;
        }
    }

    public function updateUser($request, int $id): bool
    {
        $role = $request->input('roles');

        try {
            DB::beginTransaction();

            // update user
            $user = $this->model->find($id);
            $user->name = $request->input('name');
            $user->save();

            // update user_role
            $userRole = UserRole::where('user_id', $id)->first();

            if ( $userRole ) {
                $userRole->role_id = $request->input('roles');
                $userRole->save();
            } else {
                $userRole = new UserRole;
                $userRole->user_id = $id;
                $userRole->role_id = $request->input('roles');
                $userRole->save();
            }

            DB::commit();

            return true;
        } catch (\Exception $e) {
            DB::rollback();

            return false;
        }
    }
}
