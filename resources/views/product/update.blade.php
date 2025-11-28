<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('file/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('file/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
<div class="container">
    <form method="post" action="{{route('product.update', ['product'=>$product])}}">
        @csrf
        <h1 class="container mt-5 mb-5">UPDATE PRODUCT</h1>

        <div class="form-floating mb-3 mt-3">
            <input name="title" placeholder="title" id="comment" class="form-control" value="{{$product->title}}">
            <label for="comment">title</label>
        </div>

        <div class="form-floating mb-3 mt-3">
            <input name="description" placeholder="description" id="comment" class="form-control" value="{{$product->description}}">
            <label for="comment">description</label>
        </div>

        <div class="form-floating mb-3 mt-3">
            <input name="slug" placeholder="slug" id="comment" class="form-control" value="{{$product->slug}}">
            <label for="comment">slug</label>
        </div>

        <div class="form-floating mb-3 mt-3">
            <input name="image" placeholder="image" id="comment" class="form-control" value="{{$product->image}}">
            <label for="comment">image</label>
        </div>

        <div class="form-floating mb-3 mt-3">
            <input name="brand_id" placeholder="brand id" id="comment" class="form-control" value="{{$product->brand_id}}">
            <label for="comment">brand id</label>
        </div>

        <div class="form-floating mb-3 mt-3">
            <input name="unlimited_inventory" placeholder="unlimited inventory" id="comment" class="form-control" value="{{$product->unlimited_inventory}}">
            <label for="comment">unlimited inventory</label>
        </div>

        <div class="form-floating mb-3 mt-3">
            <input name="max_order" placeholder="max order" id="comment" class="form-control" value="{{$product->max_order}}">
            <label for="comment">max order</label>
        </div>

        <div class="form-floating mb-3 mt-3">
            <input name="warning_border" placeholder="warning border" id="comment" class="form-control" value="{{$product->warning_border}}">
            <label for="comment">warning border</label>
        </div>

        <button class="btn btn-primary" type="submit" >UPDATE</button>

    </form>
</div>
</body>
</html>
