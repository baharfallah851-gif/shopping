@extends('layout')
@section('content')
    <form method="post" action="{{route('type.save')}}">
        <h1>ADD TYPE</h1>
        @csrf
        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text" >title</label>
            <input type="text" name="title" class="form-control" placeholder="title" required>
        </div>

        <div class="clearfix"></div>
        <button class="btn btn-primary" type="submit">ADD</button>
    </form>
@endsection
