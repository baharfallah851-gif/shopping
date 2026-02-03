@extends('layout')
@section('content')
    <form method="post" action="{{route('product.save')}}">
        <h1 class="text-center">Add Product</h1>
        @csrf
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text" >title</label>
                <input type="text" name="title" class="@error('title') is-invalid @enderror form-control" placeholder="title">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text">slug</label>
                <input type="text" name="slug" class="@error('slug') is-invalid @enderror form-control" placeholder="slug">
                @error('slug')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text">image</label>
                <input type="file" name="image" class="@error('image') is-invalid @enderror form-control" placeholder="image">
                @error('image')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text">brand</label>
                <select name="brand_id" class="form-control">
                    @foreach($brands as $brand)
                        <option value="{{$brand->id}}" >{{$brand->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text">max order</label>
                <input type="text" name="max_order" class="@error('max_order') is-invalid @enderror form-control" placeholder="max order">
                @error('max_order')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text">warning border</label>
                <input type="text" name="warning_border" class="@error('warning_border') is-invalid @enderror form-control" placeholder="warning border">
                @error('warning_border')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text">description</label>
                <textarea type="text" name="description" class="@error('description') is-invalid @enderror form-control" placeholder="description"></textarea>
                @error('description')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label style="margin: 30px" class="input-group-text">unlimited inventory</label>
                <input type="checkbox" name="unlimited_inventory" value="1" class="form-check-input" style="margin: -28px">
            </div>
        </div>

        <button class="btn btn-primary" type="submit" >Add Product</button>
    </form>
@endsection
