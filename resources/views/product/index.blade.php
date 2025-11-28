<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('file/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('file/bootstrap.bundle.min.js')}}"></script>
</head>
<body >
<div class="form-floating mb-3 mt-3">
    <table class="table table-bordered" >
        <tr>
            <th>title</th>
            <th>description</th>
            <th>slug</th>
            <th>image</th>
            <th>brand id</th>
            <th>unlimited inventory</th>
            <th>max order</th>
            <th>warning border</th>

            <th>option</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$product->title}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->slug}}</td>
                <td>{{$product->image}}</td>
                <td>{{$product->brand_id}}</td>
                <td>{{$product->bnlimited_inventory}}</td>
                <td>{{$product->max_order}}</td>
                <td>{{$product->warning_border}}</td>
                <td>
                    <a href="{{Route('product.edit',['product'=>$product])}}">UPDATE</a>
                    <a href="{{Route('product.delete',['product'=>$product])}}">DELETE</a>
                </td>
            </tr>
        @endforeach
    </table>

    <a type="button" class="btn btn-outline-info" href="{{Route('product.add')}}">ADD</a>
</div>
</body>

