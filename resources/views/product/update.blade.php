@extends('layout')
@section('content')
    <form method="post" action="{{route('product.update', ['product'=>$product])}}">
        @csrf
        <h1 class="text-center">Update Product</h1>

        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">title</label>
                <input name="title" placeholder="title" id="comment"
                       class="@error('title') is-invalid @enderror form-control" value="{{$product->title}}">
                @error('title')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">slug</label>
                <input name="slug" placeholder="slug" id="comment"
                       class="@error('slug') is-invalid @enderror form-control" value="{{$product->slug}}">
                @error('slug')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">image</label>
                <input type="file" name="image" placeholder="image" id="comment"
                       class="@error('image') is-invalid @enderror form-control" value="{{$product->image}}">
                @error('image')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">brand</label>
                <select name="brand_id" id="comment" class="form-control">
                    @foreach($brands as $brand)
                        <option value="{{$brand->id}}"
                                @if($brand->id == $product->brand_id) selected @endif>{{$brand->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">max order</label>
                <input name="max_order" placeholder="max order" id="comment"
                       class="@error('max_order') is-invalid @enderror form-control" value="{{$product->max_order}}">
                @error('max_order')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">warning border</label>
                <input name="warning_border" placeholder="warning border" id="comment"
                       class="@error('warning_border') is-invalid @enderror form-control"
                       value="{{$product->warning_border}}">
                @error('warning_border')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="description">description</label>
                <textarea name="description" placeholder="description" id="description"
                          class="@error('description') is-invalid @enderror form-control">{{$product->description}}</textarea>
                @error('description')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment" style="margin: 30px">unlimited inventory</label>
                <input name="unlimited_inventory" type="checkbox" value="1" id="comment" class="form-check-input"
                       style="margin: -28px" @if($product->unlimited_inventory)checked @endif>
            </div>
        </div>

        <button class="btn btn-info" type="submit">Update Product</button>

    </form>
@endsection
