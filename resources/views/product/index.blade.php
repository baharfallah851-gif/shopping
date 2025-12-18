@extends('layout')
@section('content')
<div class="form-floating mb-3 mt-3">
    <a class="btn btn-app" href="{{Route('product.add')}}">
        <i class="fa fa-edit"></i> ADD
    </a>
    <table class="table table-bordered">
        <tr>
            <th class="text-center">title</th>
            <th class="text-center">description</th>
            <th class="text-center">slug</th>
            <th class="text-center">image</th>
            <th class="text-center">brand</th>
            <th class="text-center">unlimited inventory</th>
            <th class="text-center">max order</th>
            <th class="text-center">warning border</th>

            <th class="text-center">option</th>
        </tr>
        @foreach($products as $product)
            <tr class="table table-striped">
                <td>{{$product->title}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->slug}}</td>
                <td>{{$product->image}}</td>
                <td>{{$product->brand?->title}}</td>
                <td>{{$product->unlimited_inventory}}</td>
                <td>{{$product->max_order}}</td>
                <td>{{$product->warning_border}}</td>
                <td>
                    <a href="{{Route('product.edit',['product'=>$product])}}" class="btn btn-info"><i class="fa fa-pencil"></i>UPDATE</a>
                    <a href="{{Route('product.delete',['product'=>$product])}}" class="btn btn-danger"><i class="fa fa-trash-o"></i> DELETE</a>
                </td>
            </tr>
        @endforeach
    </table>

</div>
@endsection

