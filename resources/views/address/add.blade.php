<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('file/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('file/bootstrap.bundle.min.js')}}"></script>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
<form class="container" method="post" action="{{route('address.save')}}">
    <h1 class="container mt-3 mb-5">ADD ADDRESS</h1>
    @csrf
    <div class="input-group mb-3">
        <span class="input-group-text" >customer id</span>
        <input type="text" name="customer_id" class="form-control" placeholder="customer id" required>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" >address</span>
        <input type="text" name="address" class="form-control" placeholder="address" required>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" >postel code</span>
        <input type="text" name="postel_code" class="form-control" placeholder="postel code" required>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" >unit</span>
        <input type="text" name="unit" class="form-control" placeholder="unit" required>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" >title</span>
        <input type="text" name="title" class="form-control" placeholder="title" required>
    </div>

    <button class="btn btn-primary" type="submit" >ADD</button>
</form>
</body>
</html>

