@extends('layout')
@section('content')
    <form method="post" action="{{route('product.save')}}">
        <h1>ADD PRODUCT</h1>
        @csrf
        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text" >title</label>
            <input type="text" name="title" class="form-control" placeholder="title" required>
        </div>


        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text">slug</label>
            <input type="text" name="slug" class="form-control" placeholder="slug" required>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text">image</label>
            <input type="file" name="image" class="form-control" placeholder="image" required>
        </div><br>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text">brand</label>
            <select name="brand_id" class="form-control" required>
                @foreach($brands as $brand)
                    <option value="{{$brand->id}}" >{{$brand->title}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text">max order</label>
            <input type="text" name="max_order" class="form-control" placeholder="max order" required>
        </div><br>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text">warning border</label>
            <input type="text" name="warning_border" class="form-control" placeholder="warning border" required>
        </div><br>


        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text">description</label>
            <textarea type="text" name="description" class="form-control" placeholder="description" required></textarea>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label style="margin: 30px" class="input-group-text">unlimited inventory</label>
            <input type="checkbox" name="unlimited_inventory" value="1" class="form-check-input" >
        </div><br>

        <div class="clearfix"></div>
        <button class="btn btn-primary" type="submit" >ADD</button>
    </form>
@endsection
