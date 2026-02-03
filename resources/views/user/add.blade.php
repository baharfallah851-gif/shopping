@extends('layout')
@section('content')
    <form method="post" action="{{route('user.save')}}" class="was-validated">
        <h1 class="text-center">Add User</h1>
        @csrf
        <div class="form-row">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <label class="input-group-text">name</label>
                    <input type="text" name="name" class="@error('name') is-invalid @enderror form-control"
                           placeholder="Name" data-validate-length="6,8">
                    @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <label class="input-group-text">family</label>
                    <input type="text" name="family" class="@error('family') is-invalid @enderror form-control"
                           placeholder="family">
                    @error('family')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <label class="input-group-integer">mobile</label>
                    <input type="text" name="mobile" class="@error('mobile') is-invalid @enderror form-control"
                           placeholder="mobile">
                    @error('mobile')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <label class="input-group-date">gender</label>
                    <select name="gender" class="form-control">
                        <option value="man">man</option>
                        <option value="woman">woman</option>
                    </select>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <label class="input-group-date">birth date</label>
                    <input type="date" name="birth_date" class="@error('birth_date') is-invalid @enderror form-control"
                           placeholder="birth date">
                    @error('birth_date')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <label class="input-group-text">national code</label>
                    <input type="text" name="national_code"
                           class="@error('national_code') is-invalid @enderror form-control"
                           placeholder="national code">
                    @error('national_code')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <label class="input-group-text">province</label>
                    <select name="province_id" class="form-control">
                        @foreach($provinces as $province)
                            <option value="{{$province->id}}">{{$province->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <label class="input-group-text">city</label>
                    <select name="city_id" class="form-control">
                        @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <label class="input-group-text">job</label>
                    <input type="text" name="job" class="@error('job') is-invalid @enderror form-control"
                           placeholder="job">
                    @error('job')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <div class="input-group-prepend">
                        <label class="input-group-text">username</label>
                    </div>
                    <input type="text" name="username" class="@error('username') is-invalid @enderror form-control"
                           id="validationTooltipUsername"
                           placeholder="Username">
                    @error('username')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <div class="input-group-prepend">
                        <label class="input-group-text">password</label>
                    </div>
                    <input type="password" name="password"
                           class="@error('password') is-invalid @enderror form-control"
                           id="validationTooltipUsername"
                           placeholder="password">
                    @error('password')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <div class="input-group-prepend">
                        <label class="input-group-text">email</label>
                    </div>
                    <input type="text" name="email" class="@error('email') is-invalid @enderror form-control"
                           id="validationTooltipUsername"
                           placeholder="email">
                    @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <label class="input-group-text">lat</label>
                    <input type="text" name="lat" class="@error('lat') is-invalid @enderror form-control"
                           placeholder="lat">
                    @error('lat')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <label class="input-group-text">lan</label>
                    <input type="text" name="lan" class="@error('lan') is-invalid @enderror form-control"
                           placeholder="lan">
                    @error('lan')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <br>
            <div class="clearfix"></div>
            <button class="btn btn-primary" type="submit">Add User</button>
        </div>
    </form>
@endsection

