<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index(){
        $types = Type::all();
        return view('type.index',compact('types'));
    }

    public function add(){
        return view('type.add');
    }

    public function save(Request $request){
        Type::create([
            'title' => $request -> get('title'),
        ]);
        return redirect(route('type.index'));
    }

    public function edit(Type $type){
        $categories = Category::all();
        return view('type.update',compact('type','categories'));
    }

    public function update(Request $request,Type $type){
        $type->title = $request-> get('title');
        $type->update();
        return redirect(route('type.index'));
    }
    public function delete(Type $type){
        $type->delete();
        return redirect(route('type.index'));
    }
}
