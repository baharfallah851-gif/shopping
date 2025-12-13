<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(){
        $addresses = Address::all();
        return view('address.index', compact('addresses'));
    }

    /*
    public function save(Request $request){
        Address::create([
            'customer_id' => $request->get('customer_id'),
            'address' => $request->get('address'),
            'postcode_code' => $request->get('postcode_code'),
            'unit' => $request->get('unit'),
            'title' => $request->get('title'),
        ]);
        return redirect(Route('address.index'));
    }


    public function show(Address $address){
        return view('address.index', compact('address'));
    }

    public function edit(Request $request , Address $address){
        return view('address.update', compact('request', 'address'));
    }

    public function update(Request $request , Address $address){
        $address->customer_id = $request->get('customer_id');
        $address->address = $request->get('address');
        $address->postel_code = $request->get('postel_code');
        $address->unit = $request->get('unit');
        $address->title = $request->get('title');

        $address->update();
        return redirect(Route('address.index'));
    }

    public function delete(Address $address){
        $address->delete();
        return redirect(route('address.index'));
    }*/
}
