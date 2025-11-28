<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('file/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('file/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
<div class="offcanvas offcanvas-start text-bg-dark" id="demo">
    <div class="offcanvas-header">
        <h1 class="offcanvas-title">Capabilities</h1>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <a class="btn btn-outline-info" type="button" href="{{Route('customer.add')}}">ADD CUSTOMER</a><br><br>
        <a class="btn btn-outline-info" type="button" href="{{Route('user.add')}}">ADD USER</a><br><br>
        <a class="btn btn-outline-info" type="button" href="{{Route('product.add')}}">ADD PRODUCT</a><br><br>
        <a class="btn btn-outline-light" type="button" href="{{Route('customer.index')}}">show list customer</a><br><br>
        <a class="btn btn-outline-light" type="button" href="{{Route('user.index')}}">show list user</a><br><br>
        <a class="btn btn-outline-light" type="button" href="{{Route('product.index')}}">show list product</a><br><br>
    </div>
</div>

<div class="container-fluid mt-3">
    <h1 class="shadow p-3 mb-2 bg-white">SHOPPING BAHAR</h1>
    <p>Product buying and selling site</p>
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
        option list
    </button><br><br>

    {{--<form>
        <label for="myColor" class="form-label">Color picker</label>
        <input type="color" class="form-control form-control-color" id="myColor" value="#CCCCCC" title="Choose a color">
    </form><br><br>--}}

    <button type="button" class="btn btn-primary" id="toastbtn">help</button>
    <div class="toast">
        <div class="toast-header">
            <strong class="me-auto">:)</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
        </div>
        <div class="toast-body">
            <p>bezan rooy option list  :)</p>
        </div>
    </div>
</div>
    <script>
        document.getElementById("toastbtn").onclick = function() {
            var toastElList = [].slice.call(document.querySelectorAll('.toast'))
            var toastList = toastElList.map(function(toastEl) {
                return new bootstrap.Toast(toastEl)
            })
            toastList.forEach(toast => toast.show())
        }
    </script><br><br>



    <img class="img-thumbnail" alt="Cinque Terre" width="304" height="236" src="file/my_image.jpg">
</div>
</body>
</html>
