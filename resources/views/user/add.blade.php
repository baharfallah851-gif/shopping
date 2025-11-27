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
    @csrf
    @if(\Illuminate\Support\Facades\Session::exists('message'))
        <p>{{\Illuminate\Support\Facades\Session::get('message')}}</p>
    @endif
    <form method="post" action="{{Route('user.save')}}">

        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationTooltip01">name : </label>
                <input class="form-control" placeholder="name">
            </div><br>

            <div class="col-md-4 mb-3">
                <label for="validationTooltip02">family : </label>
                <input class="form-control" placeholder="family">
            </div><br>

            <div class="col-md-4 mb-3">
                <label for="validationTooltip02">mobile : </label>
                <input class="form-control" placeholder="mobile">
            </div><br>

            <div class="col-md-2">
                <label for="validationTooltip02">gender : </label>
                <select name="gender">
                    <option>mane</option>
                    <option>woman</option>
                </select>
            </div><br>

            <div class="col-md-4 mb-3">
                <label for="validationTooltip02">birth_date : </label>
                <input type="date" class="form-control" placeholder="birth_date">
            </div><br>

            <div class="col-md-4 mb-3">
                <label for="validationTooltip02">national_code : </label>
                <input class="form-control" placeholder="national_code">
            </div><br>

            <div class="col-md-4 mb-3">
                <label for="validationTooltip02">province_id : </label>
                <input class="form-control" placeholder="province_id">
            </div><br>

            <div class="col-md-4 mb-3">
                <label for="validationTooltip02">city_id : </label>
                <input class="form-control" placeholder="city_id">
            </div><br>

            <div class="col-md-4 mb-3">
                <label for="validationTooltip02">job : </label>
                <input class="form-control" placeholder="job">
            </div><br>

            <div class="col-md-4 mb-3">
                <label for="validationTooltipUsername">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                    </div>
                    <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Please choose a unique and valid username.
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <label for="validationTooltip02">password : </label>
                <input class="form-control" placeholder="password">
            </div><br>

            <div class="col-md-4 mb-3">
                <label for="validationTooltip02">lat : </label>
                <input class="form-control" placeholder="lat">
            </div><br>

            <div class="col-md-4 mb-3">
                <label for="validationTooltip02">lan : </label>
                <input class="form-control" placeholder="lan">
            </div><br>

            <button class="btn btn-primary" type="submit" >ADD</button>

    </form>
</div>

</body>
