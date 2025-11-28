<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('file/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('file/bootstrap.bundle.min.js')}}"></script>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">

<div class="container">
    <h1>ADD CUSTOMER</h1><br>
    @if(\Illuminate\Support\Facades\Session::exists('message'))
        <p>{{\Illuminate\Support\Facades\Session::get('message')}}</p>
    @endif
        <form method="post" action="{{Route('customer.save')}}" class="was-validated">
            @csrf
            <div class="form-row">
                <div class="input-group mb-3">
                    <span class="input-group-text" >Person</span>
                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                    <input type="text" name="family" class="form-control" placeholder="family" required>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">mobile</span>
                    <input type="text" name="mobile" class="form-control" placeholder="mobile" required>
                </div><br>

                <div>
                    <span class="input-group-text">gender</span>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio1" name="gender" value="man" checked>man
                        <label class="text-bg-secondary" for="radio1"></label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio2" name="gender" value="woman">woman
                        <label class="text-bg-secondary" for="radio2"></label>
                    </div>
                </div><br>

                <div class="input-group mb-3">
                    <span class="input-group-text">birth date</span>
                    <input type="date" name="birth_date" class="form-control" placeholder="birth date" required>
                </div><br>

                <div class="input-group mb-3">
                    <span class="input-group-text">national code</span>
                    <input type="text" name="national_cade" class="form-control" placeholder="national code" required>
                </div><br>

                <div class="input-group mb-3">
                    <span class="input-group-text">province</span>
                    <select name="province_id" class="form-control" required>
                        @foreach($provinces as $province)
                            <option value="{{$province->id}}" >{{$province->name}}</option>
                        @endforeach
                    </select>
                </div><br>

                <div class="input-group mb-3">
                    <span class="input-group-text">city</span>
                    <select name="city_id" class="form-control" required>
                        @foreach($cities as $city)
                            <option value="{{$city->id}}" >{{$city->name}}</option>
                        @endforeach
                    </select>
                </div><br>

                <div class="input-group mb-3">
                    <span class="input-group-text">job</span>
                    <input type="text" name="job" class="form-control" placeholder="job" required>
                </div><br>


                <div class="mb-3 mt-3">
                    <label for="uname" class="form-label">Username:</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="username" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>


                <div class="mb-3">
                    <label for="pwd" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div><br>

                <div class="input-group mb-3">
                    <span class="input-group-text">lat</span>
                    <input type="text" name="lat" class="form-control" placeholder="lat" required>
                </div><br>

                <div class="input-group mb-3">
                    <span class="input-group-text">lan</span>
                    <input type="text" name="lan" class="form-control" placeholder="lan" required>
                </div><br>

                <button class="btn btn-primary" type="submit" >ADD</button>

        </form>
</div>

</body>
