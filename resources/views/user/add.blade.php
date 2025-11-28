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
    <h1>ADD USER</h1>
    @if(\Illuminate\Support\Facades\Session::exists('message'))
        <p>{{\Illuminate\Support\Facades\Session::get('message')}}</p>
    @endif
    <form method="post" action="{{route('user.save')}}" class="was-validated">
        @csrf
        <div class="form-row">
            <div class="input-group mb-3">
                <span class="input-group-text" >Person</span>
                <input type="text" name="name" class="form-control" placeholder="name" required>
                <input type="text" name="family" class="form-control" placeholder="family" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-integer">mobile</span>
                <input type="text" name="mobile" class="form-control" placeholder="mobile" required>
            </div><br>

            <div class="col-md-2">
                <label for="validationTooltip02">gender</label>
                <select name="gender" required>
                    <option value="man">man</option>
                    <option value="woman">woman</option>
                </select>
            </div><br>

            <div class="input-group mb-3">
                <span class="input-group-date">birth date</span>
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

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">username</span>
                </div>
                <input type="text" name="username" class="form-control" id="validationTooltipUsername" placeholder="Username" required>
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group">username</span>
                </div>
                <input type="text" name="password" class="form-control" id="validationTooltipUsername" placeholder="password" required>
            </div><br>


            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">email</span>
                </div>
                <input type="text" name="email" class="form-control" id="validationTooltipUsername" placeholder="email" required>
            </div>


            <div class="input-group mb-3">
                <span class="input-group-text">lat</span>
                <input type="text" name="lat" class="form-control" placeholder="lat" required>
            </div><br>

            <div class="input-group mb-3">
                <span class="input-group-text">lan</span>
                <input type="text" name="lan" class="form-control" placeholder="lan" required>
            </div><br>

            <button class="btn btn-primary" type="submit" >ADD</button>
        </div>
    </form>
</div>

</body>
