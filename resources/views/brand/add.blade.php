@extends('layout')
@section('content')
    <h1 class="text-center">Add Brand</h1>
    <form method="post" action="{{route('brand.save')}}" class="container">
        @csrf
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text">title</label>
                <input type="text" name="title" class="@error('title') is-invalid @enderror form-control" placeholder="title">
                @error('title')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
        </div>

        <button class="btn btn-primary" type="submit" >Add Brand</button>
    </form>
@endsection
