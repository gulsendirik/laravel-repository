<?php

namespace App\Repositories\User;

interface UserRepositoryInterface {
    public function getAll();
    public function create(array $attributes);
    public function update(array $attributes, int $id);
    public function destroy(int $id);
}