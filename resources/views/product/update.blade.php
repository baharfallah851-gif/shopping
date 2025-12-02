@extends('layout')
@section('content')
    <form method="post" action="{{route('product.update', ['product'=>$product])}}">
        @csrf
        <h1 class=" mt-5 mb-5">UPDATE PRODUCT</h1>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">title</label>
            <input name="title" placeholder="title" id="comment" class="form-control" value="{{$product->title}}">
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">description</label>
            <input name="description" placeholder="description" id="comment" class="form-control" value="{{$product->description}}">
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">slug</label>
            <input name="slug" placeholder="slug" id="comment" class="form-control" value="{{$product->slug}}">
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">image</label>
            <input name="image" placeholder="image" id="comment" class="form-control" value="{{$product->image}}">
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">brand id</label>
            <select name="brand_id" id="comment" class="form-control">
                @foreach($brands as $brand)
                    <option value="{{$brand->id}}" @if($brand->id == $product->brand_id) selected @endif>{{$brand->title}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">unlimited inventory</label>
            <input name="unlimited_inventory" placeholder="unlimited inventory" id="comment" class="form-control" value="{{$product->unlimited_inventory}}">
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">max order</label>
            <input name="max_order" placeholder="max order" id="comment" class="form-control" value="{{$product->max_order}}">
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">warning border</label>
            <input name="warning_border" placeholder="warning border" id="comment" class="form-control" value="{{$product->warning_border}}">
        </div>

        <button class="btn btn-primary" type="submit" >UPDATE</button>

    </form>
@endsection
