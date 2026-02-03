@extends('layout')
@section('content')
    <form method="post" action="{{route('type.save')}}">
        <h1 class="text-center">Add Type</h1>
        @csrf
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text" >title</label>
                <input type="text" name="title" class="form-control" placeholder="title" required>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Add Type</button>
    </form>
@endsection
