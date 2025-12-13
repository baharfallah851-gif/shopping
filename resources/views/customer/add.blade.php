@extends('layout')
@section('content')
<form method="post" action="{{Route('customer.save')}}" class="was-validated">
    <h1>ADD CUSTOMER</h1><br>
    @csrf
    <div class="form-row">
        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <span class="input-group-text" >name</span>
            <input type="text" name="name" class="form-control" placeholder="Name" required>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <span class="input-group-text" >family</span>
            <input type="text" name="family" class="form-control" placeholder="family" required>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <span class="input-group-text">mobile</span>
            <input type="text" name="mobile" class="form-control" placeholder="mobile" required>
        </div><br>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <span class="input-group-text">gender</span>
            <select name="gender" required class="form-control">
                <option value="man">man</option>
                <option value="woman">woman</option>
            </select>
        </div><br>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <span class="input-group-text">birth date</span>
            <input type="date" name="birth_date" class="form-control" placeholder="birth date" required>
        </div><br>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <span class="input-group-text">national_cade</span>
            <input type="text" name="national_cade" class="form-control" placeholder="national_cade" required>
        </div><br>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <span class="input-group-text">province</span>
            <select name="province_id" class="form-control" required>
                @foreach($provinces as $province)
                    <option value="{{$province->id}}" >{{$province->name}}</option>
                @endforeach
            </select>
        </div><br>

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
            <label for="uname" class="form-label">Username:</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter username" name="username" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>



        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="pwd" class="form-label">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div><br>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <span class="input-group-text">lat</span>
            <input type="text" name="lat" class="form-control" placeholder="lat" required>
        </div><br>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <span class="input-group-text">lan</span>
            <input type="text" name="lan" class="form-control" placeholder="lan" required>
        </div><br>


        <div>
            <div class="col-md-5 col-sm-12 col-xs-12 form-group">
                <span class="input-group-text">Full address</span>
                <input name="address[]" class="form-control" placeholder="address">
            </div>
            <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                <span class="input-group-text">postal code</span>
                <input name="postel_code[]" class="form-control" placeholder="postel code">
            </div>
            <div class="col-md-1 col-sm-12 col-xs-12 form-group" >
                <span class="input-group-text">unit</span>
                <input name="unit[]" class="form-control" placeholder="unit">
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                <span class="input-group-text">Address title</span>
                <input name="title[]" class="form-control" placeholder="title">
            </div>

            <div class="center">
                <button  class="btn btn-success" style="margin-top: 20px" onclick="addAddress();return false">+</button>
            </div>
        </div>

        <div class="hidden full-address address-tmp">
            <div class="col-md-5 col-sm-12 col-xs-12 form-group">
                <span class="input-group-text">Full address</span>
                <input name="address[]" class="form-control">
            </div>
            <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                <span class="input-group-text">postel code</span>
                <input name="postel_code[]" class="form-control">
            </div>
            <div class="col-md-1 col-sm-12 col-xs-12 form-group" >
                <span class="input-group-text">unit</span>
                <input name="unit[]" class="form-control">
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                <span class="input-group-text">Address title</span>
                <input name="title[]" class="form-control">
            </div>

            <div class="center">
                <button  class="btn btn-success" style="margin-top: 20px" onclick="addAddress();return false">+</button>
                <button class="btn btn-danger" style="margin-top:20px" onclick="removeAddress(this);return false">_</button>

            </div>
        </div>

        <div class="addresses"></div>

        <div class="clearfix"></div>
        <button class="btn btn-primary" type="submit" >ADD</button>
    </div>
</form>

<script>
    function addAddress(){
        let address = $('.full-address').clone();
        $(address).removeClass('full-address').removeClass('hidden');
        $('.addresses').append(address);
    }

    function removeAddress(el) {
        $(el).parents('.address-tmp').first().remove();
    }

</script>
@endsection
