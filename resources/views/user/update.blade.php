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
        <form method="post" action="{{route('user.update', ['user'=>$user])}}">
            <h1 class="container mt-5 mb-5">UPDATE CUSTOMER</h1>
            @csrf
            <div class="form-floating mb-3 mt-3">
                <input name="name" placeholder="name" id="comment" class="form-control" value="{{$user->name}}">
                <label for="comment">name</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input name="family" placeholder="family" id="comment" class="form-control" value="{{$user->family}}">
                <label for="comment">family</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input name="mobile" placeholder="mobile" id="comment" class="form-control" value="{{$user->mobile}}">
                <label for="comment">mobile</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input name="gender" placeholder="gender" id="comment" class="form-control" value="{{$user->gender}}">
                <label for="comment">gender</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input name="birth_date" placeholder="birth_date" id="comment" class="form-control" value="{{$user->birth_date}}">
                <label for="comment">birth date</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input name="national_code" placeholder="national_code" id="comment" class="form-control" value="{{$user->national_code}}">
                <label for="comment">national_code</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input name="province_id" placeholder="province id" id="comment" class="form-control" value="{{$user->province_id}}">
                <label for="comment">province id</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input name="city_id" placeholder="city_id" id="comment" class="form-control" value="{{$user->city_id}}">
                <label for="comment">city id</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input name="job" placeholder="job" id="comment" class="form-control" value="{{$user->job}}">
                <label for="comment">job</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input name="username" placeholder="username" id="comment" class="form-control" value="{{$user->username}}">
                <label for="comment">username</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input name="password" placeholder="password" id="comment" class="form-control" value="{{$user->password}}">
                <label for="comment">password</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input name="email" placeholder="email" id="comment" class="form-control" value="{{$user->email}}">
                <label for="comment">email</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input name="lat" placeholder="lat" id="comment" class="form-control" value="{{$user->lat}}">
                <label for="comment">lat</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input name="lan" placeholder="lan" id="comment" class="form-control" value="{{$user->lan}}">
                <label for="comment">lan</label>
            </div>


            <button class="btn btn-primary" type="submit" >UPDATE</button>

        </form>
    </div>
</body>
</html>
