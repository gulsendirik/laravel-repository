<?php

namespace App\Http\Controllers\User;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\User\UserRepositoryInterface;

class UserController extends Controller
{
    protected $repository;
    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $users = $this->repository->getAll();
        return response()->json($users);
    }

    public function store(Request $request)
    {
        $user = $this->repository->create(array_merge($request->all()));
        return response()->json($user,200);
    }

    public function update(Request $request, $id)
    {
        $user = $this->repository->update($request->all(), $id);
        return response()->json($user);
    }

    public function destroy($id)
    {
        $user = $this->repository->destroy($id);
        return response()->json($user);
    }
}