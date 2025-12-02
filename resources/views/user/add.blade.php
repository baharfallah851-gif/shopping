@extends('layout')
@section('content')
    <h1>ADD USER</h1>
    <form method="post" action="{{route('user.save')}}" class="was-validated">
        @csrf
        <div class="form-row">
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <span class="input-group-text" >name</span>
                <input type="text" name="name" class="form-control" placeholder="Name" data-validate-length="6,8" required="required">
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <span class="input-group-text" >family</span>
                <input type="text" name="family" class="form-control" placeholder="family" required>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <span class="input-group-integer">mobile</span>
                <input type="text" name="mobile" class="form-control" placeholder="mobile" required>
            </div><br>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <span class="input-group-date">gender</span>
                <select name="gender" required class="form-control">
                    <option value="man">man</option>
                    <option value="woman">woman</option>
                </select>
            </div><br>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <span class="input-group-date">birth date</span>
                <input type="date" name="birth_date" class="form-control" placeholder="birth date" required>
            </div>


            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <span class="input-group-text">national code</span>
                <input type="text" name="national_code" class="form-control" placeholder="national code" required>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <span class="input-group-text">province</span>
                <select name="province_id" class="form-control" required>
                    @foreach($provinces as $province)
                        <option value="{{$province->id}}" >{{$province->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <span class="input-group-text">city</span>
                <select name="city_id" class="form-control" required>
                    @foreach($cities as $city)
                        <option value="{{$city->id}}" >{{$city->name}}</option>
                    @endforeach
                </select>
            </div><br>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <span class="input-group-text">job</span>
                <input type="text" name="job" class="form-control" placeholder="job" required>
            </div><br>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">username</span>
                </div>
                <input type="text" name="username" class="form-control" id="validationTooltipUsername" placeholder="Username" required>
            </div>


            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">password</span>
                </div>
                <input type="password" name="password" class="form-control" id="validationTooltipUsername" placeholder="password" required>
            </div><br>


            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">email</span>
                </div>
                <input type="text" name="email" class="form-control" id="validationTooltipUsername" placeholder="email" required>
            </div>


            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <span class="input-group-text">lat</span>
                <input type="text" name="lat" class="form-control" placeholder="lat" required>
            </div><br>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <span class="input-group-text">lan</span>
                <input type="text" name="lan" class="form-control" placeholder="lan" required>
            </div><br>
            <div class="clearfix"></div>
            <button class="btn btn-primary" type="submit" >ADD</button>
        </div>
    </form>





@endsection
k
