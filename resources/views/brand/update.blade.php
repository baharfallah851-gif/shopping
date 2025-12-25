@extends('layout')
@section('content')
    <form method="post" action="{{route('brand.update', ['brand'=>$brand])}}">
        @csrf
        <h1 class="container mt-5 mb-5">UPDATE BRAND</h1>
        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">title</label>
            <input name="title" placeholder="title" id="comment" class="form-control" value="{{$brand->title}}">
        </div>
        <div class="clearfix"></div>
        <button class="btn btn-primary" type="submit" >UPDATE</button>
    </form>
@endsection
