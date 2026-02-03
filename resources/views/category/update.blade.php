@extends('layout')
@section('content')
    <form method="post" action="{{route('category.update',['category'=>$category])}}">
        <h1 class="text-center">Update Category</h1>
        @csrf
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">type</label>
                <select name="type_id" id="comment" class="form-control">
                    @foreach($types as $type)
                        <option value="{{$type->id}}" @if($type->id == $category->type_id)selected @endif>{{$type->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">title</label>
                <input name="title" placeholder="title" id="comment" class="form-control" value="{{$category->title}}">
            </div>
        </div>

        <button class="btn btn-info" type="submit" >Update Category</button>
@endsection
