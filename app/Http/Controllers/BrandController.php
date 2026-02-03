<?php

namespace App\Http\Controllers;

use App\Http\Requests\saveBrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        $brands = Brand::all();
        return view('brand.index',compact('brands'));
    }

    public function add(){
        return view('brand.add');
    }

    public function save(saveBrandRequest $request){
        Brand::query()->create([
            'title' => $request->get('title'),
            ]);
        return redirect(route('brand.index'));
    }

    public function edit(Brand $brand){
        return view('brand.update',compact('brand'));
    }

     public function update(saveBrandRequest $request, Brand $brand){
        $brand->title = $request->get('title');
        $brand->update();

        return redirect(route('brand.index'));

     }

     public function delete(Brand $brand){
        $brand->delete();
        return redirect(route('brand.index'));

     }
}




