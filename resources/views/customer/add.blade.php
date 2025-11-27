<!doctype html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('file/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('file/bootstrap.bundle.min.js')}}"></script>
</head>
<body>

<div class="input-group mb-3">
    <h1>CUSTOMER</h1><br>
    <h1>ADD</h1><br><br>
    @if(\Illuminate\Support\Facades\Session::exists('message'))
        <p>{{\Illuminate\Support\Facades\Session::get('message')}}</p>
    @endif
        <form method="post" action="{{Route('customer.save')}}">
            @csrf
            <div class="form-row">
                <div class="input-group mb-3">
                    <span class="input-group-text" >Person</span>
                    <input type="text" class="form-control" placeholder="Name">
                    <input type="text" class="form-control" placeholder="family">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">mobile</span>
                    <input type="text" class="form-control" placeholder="mobile">
                </div><br>

                <div>
                    <span class="input-group-text">gender</span>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio1" name="gender" value="option1" checked>man
                        <label class="text-bg-secondary" for="radio1"></label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio2" name="gender" value="option2">woman
                        <label class="text-bg-secondary" for="radio2"></label>
                    </div>
                </div><br>

                <div class="input-group mb-3">
                    <span class="input-group-text">birth date</span>
                    <input type="text" class="form-control" placeholder="birth date">
                </div><br>

                <div class="input-group mb-3">
                    <span class="input-group-text">national code</span>
                    <input type="text" class="form-control" placeholder="national code">
                </div><br>

                <div class="input-group mb-3">
                    <span class="input-group-text">province id</span>
                    <input type="text" class="form-control" placeholder="province id">
                </div><br>

                <div class="input-group mb-3">
                    <span class="input-group-text">city id</span>
                    <input type="text" class="form-control" placeholder="city id">
                </div><br>

                <div class="input-group mb-3">
                    <span class="input-group-text">job</span>
                    <input type="text" class="form-control" placeholder="job">
                </div><br>

                <div class="col-md-4 mb-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="validationTooltipUsernamePrepend">username</span>
                        </div>
                        <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
                        <div class="invalid-tooltip">
                            Please choose a unique and valid username.
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">password</span>
                    <input type="text" class="form-control" placeholder="password">
                </div><br>

                <div class="input-group mb-3">
                    <span class="input-group-text">lat</span>
                    <input type="text" class="form-control" placeholder="lat">
                </div><br>

                <div class="input-group mb-3">
                    <span class="input-group-text">lan</span>
                    <input type="text" class="form-control" placeholder="lan">
                </div><br>

                <button class="btn btn-primary" type="submit" >ADD</button>

        </form>
</div>

</body>
