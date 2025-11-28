<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('file/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('file/bootstrap.bundle.min.js')}}"></script>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
    <form class="container" method="post" action="{{route('product.save')}}">
        <h1 class="container mt-3 mb-5">ADD PRODUCT</h1>
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" >title</span>
            <input type="text" name="title" class="form-control" placeholder="title" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">description</span>
            <input type="text" name="description" class="form-control" placeholder="description" required>
        </div><br>

        <div class="input-group mb-3">
            <span class="input-group-text">slug</span>
            <input type="text" name="slug" class="form-control" placeholder="slug" required>
        </div><br>

        <div class="input-group mb-3">
            <span class="input-group-text">image</span>
            <input type="text" name="image" class="form-control" placeholder="image" required>
        </div><br>

        <div class="input-group mb-3">
            <span class="input-group-text">brand id</span>
            <input type="text" name="brand_id" class="form-control" placeholder="brand id" required>
        </div><br>

        <div class="input-group mb-3">
            <span class="input-group-text">unlimited inventory</span>
            <input type="text" name="unlimited_inventory" class="form-control" placeholder="unlimited inventory" required>
        </div><br>

        <div class="input-group mb-3">
            <span class="input-group-text">max order</span>
            <input type="text" name="max_order" class="form-control" placeholder="max order" required>
        </div><br>

        <div class="input-group mb-3">
            <span class="input-group-text">warning border</span>
            <input type="text" name="warning_border" class="form-control" placeholder="warning border" required>
        </div><br>

        <button class="btn btn-primary" type="submit" >ADD</button>
    </form>
</body>
</html>
