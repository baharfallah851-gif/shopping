<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $customer = Customer::all();
        return view('customer.save', compact('customer'));
    }

    public function add(){
        return view('customer.add');
    }
    public function save(Request $request){
        try {
            Customer::create([
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
                'lat' => $request->get('lat'),
                'lan' => $request->get('lan'),
            ]);
            return redirect(Route('customer.index'));

        }catch (\Exception $exception){
            $message =  'khata :) ';
            return redirect(Route('customer.add'))->with('message', $exception->getMessage());
        }

    }


    public function show(Customer $customer){
        return view('customer.save', compact('customer'));
    }

    public function edit(Request $request , Customer $customer){
        return view('customer.update', compact('request', 'customer'));
    }

    public function update(Request $request , customer $customer){
        $customer->name = $request->get('name');
        $customer->family = $request->get('family');
        $customer->mobile = $request->get('mobile');
        $customer->gender = $request->get('gender');
        $customer->birth_date = $request->get('birth_date');
        $customer->national_code = $request->get('national_code');
        $customer->province_id = $request->get('province_id');
        $customer->city_id = $request->get('city_id');
        $customer->job = $request->get('job');
        $customer->username = $request->get('username');
        $customer->password = $request->get('password');
        $customer->lat = $request->get('lat');
        $customer->lan = $request->get('lan');
        $customer->update();
        return redirect(Route('customer.index'));
    }

    public function delete(customer $customer){
        $customer->delete();
        return redirect(route('customer.index'));
    }
}
