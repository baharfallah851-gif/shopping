<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\Province;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function add(){
        $provinces = Province::all();
        $cities = City::all();
        return view('user.add', compact('provinces' ,'cities'));
    }
    public function save(Request $request){
        try {
            User::create([
                'name' => $request->get('name'),
                'family' => $request->get('family'),
                'mobile' => $request->get('mobile'),
                'gender' => $request->get('gender'),
                'birth_date' => $request->get('birth_date'),
                'national_code' => $request->get('national_code'),
                'province_id' => $request->get('province_id'),
                'city_id' => $request->get('city_id'),
                'job' => $request->get('job'),
                'username' => $request->get('username'),
                'password' => $request->get('password'),
                'email' => $request->get('email'),
                'lat' => $request->get('lat'),
                'lan' => $request->get('lan'),
            ]);
            return redirect(Route('user.index'));

        }catch (\Exception $exception){
            $message =  'khata :) ';
            return redirect(Route('user.add'))->with('message', $exception->getMessage());
        }

    }

    public function edit(Request $request , User $user){
        $provinces = Province::all();
        $cities = City::all();
        return view('user.update', compact('request', 'user','provinces','cities'));
    }

    public function update(Request $request , user $user){
        $user->name = $request->get('name');
        $user->family = $request->get('family');
        $user->mobile = $request->get('mobile');
        $user->gender = $request->get('gender');
        $user->birth_date = $request->get('birth_date');
        $user->national_code = $request->get('national_code');
        $user->province_id = $request->get('province_id');
        $user->city_id = $request->get('city_id');
        $user->job = $request->get('job');
        $user->username = $request->get('username');
        $user->password = $request->get('password');
        $user->email = $request->get('email');
        $user->lat = $request->get('lat');
        $user->lan = $request->get('lan');
        $user->update();
        return redirect(Route('user.index'));
    }

    public function delete(user $user){
        $user->delete();
        return redirect(route('user.index'));
    }
}
