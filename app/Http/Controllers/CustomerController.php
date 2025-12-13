<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\city;
use App\Models\Customer;
use App\Models\Province;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::all();
        return view('customer.index', compact('customers'));
    }

    public function add(){
        $provinces = Province::all();
        $cities = City::all();
        return view('customer.add', compact('provinces' ,'cities'));
    }
    public function save(Request $request){

            $customer = Customer::create([
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
            $postel_codes = $request->get('postel_code');
            $units = $request->get('unit');
            $titles = $request->get('title');
            $addresses = $request->get('address', []);
            foreach ($addresses as $index => $address){
                if(! empty($address)) {
                    Address::create([
                        'customers_id' => $customer->id,
                        'address' => $address,
                        'postel_code' => $postel_codes[$index],
                        'unit' => $units[$index],
                        'title' => $titles[$index],
                    ]);
                }
            }
            return redirect(Route('customer.index'));




    }

    //public function show(Customer $customer){
       // $cities = City::all();
       // $provinces = Province::all();
       // return view('customer.index', compact('customer','cities','provinces'));
    //}

    public function edit(Request $request , Customer $customer){
        $provinces = Province::all();
        $cities = City::all();
        return view('customer.update', compact('request', 'customer','cities','provinces'));
    }

    public function update(Request $request , Customer $customer){
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

        $postel_codes = $request->get('postel_code');
        $units = $request->get('unit', []);
        $titles = $request->get('title', []);
        $addresses = $request->get('address', []);
        $address_ids = $request->get('address_id', []);

        $address_id_in_db = $customer->addresses()->pluck('id')->toArray();   //از مدل کاستومر میاد
        $deleted_ids = array_diff($address_id_in_db, $address_ids);              //حذف ادرس
        foreach ($deleted_ids as $deleted_id){
            $address = Address::find($deleted_id);
            $address->delete();
        }

        foreach ($addresses as $index => $address){          //تغییر ادرس
            if(! empty($address_ids[$index]) && !empty($address)){
                $old_address = Address::find($address_ids[$index]);
                $old_address->title = $titles[$index];
                $old_address->postel_code = $postel_codes[$index];
                $old_address->unit = $units[$index];
                $old_address->address = $address;
                $old_address->update();
            } else{                              //اضافه کردن ادرس جدید
                if(! empty($address)){
                    Address::create([
                        'customers_id' => $customer->id,
                        'address' => $address,
                        'postel_code' => $postel_codes[$index],
                        'unit' => $units[$index],
                        'title' => $titles[$index],
                    ]);
                }
            }
        }

        return redirect(Route('customer.index'));
    }

    public function delete(customer $customer){
        $customer->delete();
        return redirect(route('customer.index'));
    }
/*
    public  function save_address(Request $request)
    {
       Address::create([
           'address_title' => $request->get('address_title'),
           'address' => $request->get('address'),
           'postal_code' => $request->get('postal_code'),
           'unit' => $request->get('unit'),
       ]);
        return redirect(Route('address.index'));
    }

    public function update_address(Request $request , address $address)
    {
        $address->address_title = $request->get('address_title');
        $address->address = $request->get('address');
        $postal_code->postal_code = $request->get('postal_code');
        $unit->unit = $request->get('unit');
    }*/
}




