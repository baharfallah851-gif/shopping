@extends('layout')
@section('content')
    <form method="post" action="{{route('brand.update', ['brand'=>$brand])}}">
        @csrf
        <h1 class="text-center">Update Brand</h1>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">title</label>
                <input name="title" placeholder="title" id="comment" class="form-control" value="{{$brand->title}}">
            </div>
        </div>

        <button class="btn btn-info" type="submit" >Update Brand</button>
    </form>
@endsection
