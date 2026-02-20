<?php

namespace App\Repositories;

use App\Models\city;
use App\Models\Province;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository
{
    public function indexRepository()
    {
        return User::orderBy('id')->paginate(50);
    }
    public function addRepository()
    {
        $provinces = Province::all();
        $cities = City::all();
        return compact('provinces', 'cities');
    }
    public function saveRepository(array $data)
    {
        return User::create($data);
    }
    public function editRepository(User $user)
    {
        $provinces = Province::all();
        $cities = City::all();
        return compact('user', 'provinces', 'cities');
    }
    public function updateRepository(User $user, array $data)
    {
        if(isset($data['password'])){
            $data['password'] = Hash::make($data['password']);
        }
        $user->update($data);
        return $user;
    }
    public function deleteRepository(User $user)
    {
        return $user->delete();
    }
}
