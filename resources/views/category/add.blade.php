@extends('layout')
@section('content')
    <form method="post" action="{{route('category.save')}}">
        <h1>ADD CATEGORY</h1>
        @csrf
        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text" >type</label>
            <select type="text" name="type_id" class="form-control">
                @foreach($types as $type)
                    <option value="{{$type->id}}">{{$type->title}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text" >title</label>
            <input type="text" name="title" class="form-control" placeholder="title" required>
        </div>

        <div class="clearfix"></div>
        <button class="btn btn-primary" type="submit" >ADD</button>
    </form>

@endsection
