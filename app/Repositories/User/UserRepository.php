<?php 

namespace App\Repositories\User;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function getAll()
    {
        return User::all();
    }

    public function create(array $attributes)
    {
        return User::create($attributes);
    }

    public function update(array $attributes,int $id)
    {
        return User::find($id)->update($attributes);
    }

    public function destroy(int $id)
    {
        return User::find($id)->delete();
    }
}