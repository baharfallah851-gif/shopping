<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Type;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('category.index',compact('categories'));
    }

    public function add(){
        $types = Type::all();
        return view('category.add',compact('types'));
    }

    public function save(){
        Category::create([
            'type_id' => request('type_id'),
            'title' => request('title'),
        ]);
        return redirect(route('category.index'));
    }
    public function edit(Category $category){
        $types = Type::all();
        return view('category.update',compact('category','types'));
    }

    public function update(Request $request, Category $category)
    {
        $category -> type_id = $request->get('type_id');
        $category -> title = $request ->get('title');
        $category ->update();
        return redirect(route('category.index'));
    }


    public function delete(Category $category){
        $category -> delete();
        return redirect(route('category.index'));

    }
}
