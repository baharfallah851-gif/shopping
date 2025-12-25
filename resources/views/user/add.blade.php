@extends('layout')
@section('content')
    <form method="post" action="{{route('user.save')}}" class="was-validated">
        <h1>ADD USER</h1>
        @csrf
        <div class="form-row">
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text" >name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" data-validate-length="6,8" required="required">
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text" >family</label>
                <input type="text" name="family" class="form-control" placeholder="family" required>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-integer">mobile</label>
                <input type="text" name="mobile" class="form-control" placeholder="mobile" required>
            </div><br>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-date">gender</label>
                <select name="gender" required class="form-control">
                    <option value="man">man</option>
                    <option value="woman">woman</option>
                </select>
            </div><br>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-date">birth date</label>
                <input type="date" name="birth_date" class="form-control" placeholder="birth date" required>
            </div>


            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text">national code</label>
                <input type="text" name="national_code" class="form-control" placeholder="national code" required>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text">province</label>
                <select name="province_id" class="form-control" required>
                    @foreach($provinces as $province)
                        <option value="{{$province->id}}" >{{$province->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text">city</label>
                <select name="city_id" class="form-control" required>
                    @foreach($cities as $city)
                        <option value="{{$city->id}}" >{{$city->name}}</option>
                    @endforeach
                </select>
            </div><br>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text">job</label>
                <input type="text" name="job" class="form-control" placeholder="job" required>
            </div><br>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <div class="input-group-prepend">
                    <label class="input-group-text">username</label>
                </div>
                <input type="text" name="username" class="form-control" id="validationTooltipUsername" placeholder="Username" required>
            </div>


            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <div class="input-group-prepend">
                    <label class="input-group-text">password</label>
                </div>
                <input type="password" name="password" class="form-control" id="validationTooltipUsername" placeholder="password" required>
            </div><br>


            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <div class="input-group-prepend">
                    <label class="input-group-text">email</label>
                </div>
                <input type="text" name="email" class="form-control" id="validationTooltipUsername" placeholder="email" required>
            </div>


            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text">lat</label>
                <input type="text" name="lat" class="form-control" placeholder="lat" required>
            </div><br>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text">lan</label>
                <input type="text" name="lan" class="form-control" placeholder="lan" required>
            </div><br>
            <div class="clearfix"></div>
            <button class="btn btn-primary" type="submit" >ADD</button>
        </div>
    </form>
@endsection

