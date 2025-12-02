@extends('layout')
@section('content')
    <h1 CLASS="container">ADD BRAND</h1>
    <form method="post" action="{{route('brand.save')}}" class="container">
        @csrf
        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <span class="input-group-text">title</span>
            <input type="text" name="title" class="form-control" placeholder="title" required>
        </div>
        <div class="clearfix"></div>
        <button class="btn btn-primary" type="submit" >ADD</button>
    </form>
@endsection
