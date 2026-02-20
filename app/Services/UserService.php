<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepository;

class UserService
{
    protected $repo;            // for create Repository by laravel
    public function __construct(UserRepository $repo)
    {
        $this->repo = $repo;
    }
    public function indexservice()
    {
        return $this->repo->indexRepository();
    }
    public function addservice()
    {
        return $this->repo->addRepository();
    }
    public function saveService(array $data)
    {
        return $this->repo->saveRepository($data);
    }
    public function editService(User $user)
    {
        return $this->repo->editRepository($user);
    }
    public function updateService(User $user, array $data)
    {
        return $this->repo->updateRepository($user, $data);
    }
    public function deleteService(User $user)
    {
        return $this->repo->deleteRepository($user);
    }
}
