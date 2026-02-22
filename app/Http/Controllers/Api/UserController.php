<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }
    public function index()
    {
        $users = $this->service->indexservice();
        return UserResource::collection($users);
    }
    public function add()
    {
        $data = $this->service->addservice();
        return response()->json($data, 200);
    }
    public function store(Request $request)
    {
        $data = $request->only([
            'name','family','mobile','gender','birth_date','national_code',
            'province_id','city_id','job','username','password','email','lat','lan'
        ]);

        $data['password'] = Hash::make($data['password']);
        $user = $this->service->saveService($data);

        return (new UserResource($user))
            ->response()
            ->setStatusCode(201);
    }
    public function show(User $user)
    {
        $user = $this->service->editService($user);
        return new UserResource($user);
    }
    public function update(Request $request, User $user)
    {
        $data = $request->only([
            'name','family','mobile','gender','birth_date','national_code',
            'province_id','city_id','job','username','password','email','lat','lan'
        ]);

        if(isset($data['password'])){
            $data['password'] = Hash::make($data['password']);
        }

        $user = $this->service->updateService($user, $data);

        return new UserResource($user);
    }
    public function destroy(User $user)
    {
        $this->service->deleteService($user);

        return response()->json([
            'message' => 'User deleted successfully'
        ], 200);
    }
}
