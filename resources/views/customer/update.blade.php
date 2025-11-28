<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('file/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('file/bootstrap.bundle.min.js')}}"></script>
</head>
<body>


    <div class="container">
        <form method="post" action="{{route('customer.update', ['customer'=>$customer])}}">
            <h1>UPDATE CUSTOMER</h1>
            @csrf
            <div class="form-floating mb-3 mt-3">
                <input name="name" placeholder="name" id="comment" class="form-control" value="{{$customer->name}}">
                <label for="comment">name</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input name="family" placeholder="family" id="comment" class="form-control" value="{{$customer->family}}">
                <label for="comment">family</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input name="mobile" placeholder="mobile" id="comment" class="form-control" value="{{$customer->mobile}}">
                <label for="comment">mobile</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input name="gender" placeholder="gender" id="comment" class="form-control" value="{{$customer->gender}}">
                <label for="comment">gender</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input name="birth_date" placeholder="birth_date" id="comment" class="form-control" value="{{$customer->birth_date}}">
                <label for="comment">birth date</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input name="national_code" placeholder="national_code" id="comment" class="form-control" value="{{$customer->national_code}}">
                <label for="comment">national_code</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input name="province_id" placeholder="province id" id="comment" class="form-control" value="{{$customer->province_id}}">
                <label for="comment">province id</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input name="city_id" placeholder="city_id" id="comment" class="form-control" value="{{$customer->city_id}}">
                <label for="comment">city id</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input name="job" placeholder="job" id="comment" class="form-control" value="{{$customer->job}}">
                <label for="comment">job</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input name="username" placeholder="username" id="comment" class="form-control" value="{{$customer->username}}">
                <label for="comment">username</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input name="password" placeholder="password" id="comment" class="form-control" value="{{$customer->password}}">
                <label for="comment">password</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input name="lat" placeholder="lat" id="comment" class="form-control" value="{{$customer->lat}}">
                <label for="comment">lat</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input name="lan" placeholder="lan" id="comment" class="form-control" value="{{$customer->lan}}">
                <label for="comment">lan</label>
            </div>


            <button class="btn btn-primary" type="submit" >UPDATE</button>

        </form>
    </div>

</body>
