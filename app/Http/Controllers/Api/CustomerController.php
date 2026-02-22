<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\saveCustomerRequest;
use App\Models\Address;
use App\Models\city;
use App\Models\Customer;
use App\Models\Province;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $customers = Customer::query()->orderBy('id')->paginate(50);
        return ['success' => true, 'data' => $customers];
    }

    public function save(saveCustomerRequest $request)
    {

        $customer = Customer::query()->create([
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
        $postal_codes = $request->get('postal_code');
        $units = $request->get('unit');
        $titles = $request->get('title');
        $addresses = $request->get('address', []);
        foreach ($addresses as $index => $address) {
            if (!empty($address)) {
                $customer->addresses()->createMany([         // این مدلی دیگه نیازی به نوشتن کلید خارجی نیست
                    ['address' => $address,
                        'postal_code' => $postal_codes[$index],
                        'unit' => $units[$index],
                        'title' => $titles[$index]]
                ]);
            }
        }
        return [
            'success' => true
        ];
    }

    public function edit(Customer $customer)
    {
        $provinces = Province::all();
        $cities = City::all();
        return ['success' => true, 'data' => $customer, 'provinces' => $provinces, 'cities' => $cities];
    }

    public function update(saveCustomerRequest $request, Customer $customer)
    {
        if(! empty($request->get('name')))
            $customer->name = $request->get('name');

        if(! empty($request->get('family')))
            $customer->family = $request->get('family');

        $customer->mobile = $request->get('mobile', $customer->mobile);

        if(! empty($request->get('gender')))
            $customer->gender = $request->get('gender');

        if(! empty($request->get('national_code')))
            $customer->national_code = $request->get('national_code');

        if(! empty($request->get('province_id')))
            $customer->province_id = $request->get('province_id');

        if(! empty($request->get('birth_date')))
            $customer->birth_date = $request->get('birth_date');

        if(! empty($request->get('birth_date')))
            $customer->birth_date = $request->get('birth_date');
        $customer->city_id = $request->get('city_id');
        $customer->job = $request->get('job');
        $customer->username = $request->get('username');
        $customer->password = $request->get('password');
        $customer->lat = $request->get('lat');
        $customer->lan = $request->get('lan');
        $customer->update();

        $postal_codes = $request->get('postal_code');
        $units = $request->get('unit', []);
        $titles = $request->get('title', []);
        $addresses = $request->get('address', []);
        $address_ids = $request->get('address_id', []);

        $address_id_in_db = $customer->addresses()->pluck('id')->toArray();   //از مدل کاستومر میاد
        $deleted_ids = array_diff($address_id_in_db, $address_ids);                             //حذف ادرس
        foreach ($deleted_ids as $deleted_id) {
            $address = Address::find($deleted_id);
            $address->delete();
        }

        foreach ($addresses as $index => $address) {                                        //تغییر ادرس
            if (!empty($address_ids[$index]) && !empty($address)) {
                $old_address = Address::find($address_ids[$index]);
                $old_address->title = $titles[$index];
                $old_address->postal_code = $postal_codes[$index];
                $old_address->unit = $units[$index];
                $old_address->address = $address;
                $old_address->update();
            } else {                                                              //اضافه کردن ادرس جدید
                if (!empty($address)) {
                    Address::create([
                        'customer_id' => $customer->id,
                        'address' => $address,
                        'postal_code' => $postal_codes[$index],
                        'unit' => $units[$index],
                        'title' => $titles[$index],
                    ]);
                }
            }
        }
        return ['success' => true, 'data' => $customer];
    }

    public function delete(customer $customer)
    {
        $customer->delete();
        return ['success' => true];
    }
}
