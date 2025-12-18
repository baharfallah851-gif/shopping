@extends('layout')
@section('content')
    <form method="post" action="{{route('category.update',['category'=>$category])}}">
        <h1 class="container mt-5 mb-5">UPDATE CATEGORY</h1>
        @csrf
        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">type</label>
            <input name="type_id" placeholder="type" id="comment" class="form-control" value="{{$category->type_id}}">
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">title</label>
            <input name="title" placeholder="title" id="comment" class="form-control" value="{{$category->title}}">
        </div>

        <div class="clearfix"></div>
        <button class="btn btn-primary" type="submit" >UPDATE</button>
@endsection
