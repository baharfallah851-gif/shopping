@extends('layout')
@section('content')
    <form method="post" action="{{Route('customer.save')}}" class="was-validated">
        <h1 class="text-center">Add Customer</h1><br>
        @csrf
        <div class="row">
            <x-Forms.Input type="text" placeholder="Enter Name" name="name" label="Name" />
            <x-Forms.Input type="text" placeholder="Enter Family" name="name" label="Family"/>
            <x-Forms.Input type="text" placeholder="Enter Mobile" name="mobile" label="Mobile"/>
        </div>
        <div class="row">
            <x-Forms.Select type="text" name="gender" label="Gender" :values="['man', 'woman']"/>
            <x-Forms.Input type="date" name="birth_date" label="Birth Date"/>
            <x-Forms.Input type="text" name="national_code" placeholder="Enter National code" label="National Code"/>
        </div>
        <div class="row">
            <x-provinceCity/>
            <x-Forms.Input type="text" name="job" placeholder="Enter job" label="job"/>
        </div>
        <div class="row">
            <x-Forms.Input type="text" name="username" placeholder="Enter username" label="Username"/>
            <x-Forms.Input type="password" name="password" placeholder="Enter password" label="Password"/>
        </div>
        <div class="row">
            <x-Forms.Input type="text" name="lat" placeholder="Enter lat" label="Lat"/>
            <x-Forms.Input type="text" name="lan" placeholder="Enter lan" label="Lan"/>
        </div>
        <br>
        <x-Address/>
        <x-Forms.Button class="btn btn-primary" button="Add Customer"/>
    </form>
@endsection






{{--                <div class="col-md-4 col-sm-12 col-xs-12 form-group">--}}
{{--                    <label class="input-group-text">family</label>--}}
{{--                    <input type="text" name="family" class="@error('family') is-invalid @enderror form-control"--}}
{{--                           placeholder="family">--}}
{{--                    @error('family')--}}
{{--                    <div class="alert alert-danger">{{$message}}</div>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--                <div class="col-md-4 col-sm-12 col-xs-12 form-group">--}}
{{--                    <label class="input-group-text">mobile</label>--}}
{{--                    <input type="text" name="mobile" class="@error('mobile') is-invalid @enderror form-control"--}}
{{--                           placeholder="mobile">--}}
{{--                    @error('mobile')--}}
{{--                    <div class="alert alert-danger">{{$message}}</div>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row">--}}
{{--                <div class="col-md-4 col-sm-12 col-xs-12 form-group">--}}
{{--                    <label class="input-group-text">gender</label>--}}
{{--                    <select name="gender" required class="form-control">--}}
{{--                        <option value="man">man</option>--}}
{{--                        <option value="woman">woman</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 col-sm-12 col-xs-12 form-group">--}}
{{--                    <label class="input-group-text">birth date</label>--}}
{{--                    <input type="date" name="birth_date" class="@error('birth_date') is-invalid @enderror form-control"--}}
{{--                           placeholder="birth date">--}}
{{--                    @error('birth_date')--}}
{{--                    <div class="alert alert-danger">{{$message}}</div>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--                <div class="col-md-4 col-sm-12 col-xs-12 form-group">--}}
{{--                    <label class="input-group-text">national code</label>--}}
{{--                    <input type="text" name="national_code"--}}
{{--                           class="@error('national_code') is-invalid @enderror form-control"--}}
{{--                           placeholder="national code">--}}
{{--                    @error('national_code')--}}
{{--                    <div class="alert alert-danger">{{$message}}</div>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--                <br>--}}
{{--            </div>--}}

{{--            <div class="row">--}}
{{--                <div class="col-md-4 col-sm-12 col-xs-12 form-group">--}}
{{--                    <label class="input-group-text">province</label>--}}
{{--                    <select name="province_id" class="form-control">--}}
{{--                        @foreach($provinces as $province)--}}
{{--                            <option value="{{$province->id}}">{{$province->name}}</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 col-sm-12 col-xs-12 form-group">--}}
{{--                    <label class="input-group-text">city</label>--}}
{{--                    <select name="city_id" class="form-control">--}}
{{--                        @foreach($cities as $city)--}}
{{--                            <option value="{{$city->id}}">{{$city->name}}</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 col-sm-12 col-xs-12 form-group">--}}
{{--                    <label class="input-group-text">job</label>--}}
{{--                    <input type="text" name="job" class="@error('job') is-invalid @enderror form-control"--}}
{{--                           placeholder="job">--}}
{{--                    @error('job')--}}
{{--                    <div class="alert alert-danger">{{$message}}</div>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row">--}}
{{--                <div class="col-md-4 col-sm-12 col-xs-12 form-group">--}}
{{--                    <label for="uname" class="form-label">Username</label>--}}
{{--                    <input type="text" class="@error('username') is-invalid @enderror form-control" id="uname" placeholder="Enter username" name="username">--}}
{{--                    @error('username')--}}
{{--                    <div class="alert alert-danger">{{$message}}</div>--}}
{{--                    @enderror--}}
{{--                </div>--}}

{{--                <div class="col-md-4 col-sm-12 col-xs-12 form-group">--}}
{{--                    <label for="pwd" class="form-label">Password</label>--}}
{{--                    <input type="password" class="@error('password') is-invalid @enderror form-control" id="pwd" placeholder="Enter password" name="password">--}}
{{--                    @error('password')--}}
{{--                    <div class="alert alert-danger">{{$message}}</div>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row">--}}
{{--                <div class="col-md-4 col-sm-12 col-xs-12 form-group">--}}
{{--                    <label class="input-group-text">lat</label>--}}
{{--                    <input type="text" name="lat" class="@error('lat') is-invalid @enderror form-control" placeholder="lat">--}}
{{--                    @error('lat')--}}
{{--                    <div class="alert alert-danger">{{$message}}</div>--}}
{{--                    @enderror--}}
{{--                </div>--}}

{{--                <div class="col-md-4 col-sm-12 col-xs-12 form-group">--}}
{{--                    <label class="input-group-text">lan</label>--}}
{{--                    <input type="text" name="lan" class="@error('lan') is-invalid @enderror form-control" placeholder="lan">--}}
{{--                    @error('lan')--}}
{{--                    <div class="alert alert-danger">{{$message}}</div>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--            </div>--}}


{{--                <div class="col-md-3 col-sm-12 col-xs-12 form-group">--}}
{{--                    <label class="input-group-text">Address title</label>--}}
{{--                    <input name="title[]" class="@error('title') is-invalid @enderror form-control" placeholder="title">--}}
{{--                    @foreach($errors->get('title.*', []) as $messages)--}}
{{--                        @foreach($messages as $message)--}}
{{--                            <div class="alert alert-danger">{{$message}}</div>--}}
{{--                        @endforeach--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--                <div class="col-md-5 col-sm-12 col-xs-12 form-group">--}}
{{--                    <label class="input-group-text">Full address</label>--}}
{{--                    <input name="address[]" class="@error('address') is-invalid @enderror form-control" placeholder="address">--}}
{{--                    @foreach($errors->get('address.*', []) as $messages)--}}
{{--                        @foreach($messages as $message)--}}
{{--                            <div class="alert alert-danger">{{$message}}</div>--}}
{{--                        @endforeach--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--                <div class="col-md-2 col-sm-12 col-xs-12 form-group">--}}
{{--                    <label class="input-group-text">postal code</label>--}}
{{--                    <input name="postal_code[]" class="@error('postal_code') is-invalid @enderror form-control" placeholder="postal code">--}}
{{--                    @foreach($errors->get('postal_code.*', []) as $messages)--}}
{{--                        @foreach($messages as $message)--}}
{{--                            <div class="alert alert-danger">{{$message}}</div>--}}
{{--                        @endforeach--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--                <div class="col-md-1 col-sm-12 col-xs-12 form-group">--}}
{{--                    <label class="input-group-text">unit</label>--}}
{{--                    <input name="unit[]" class="@error('unit') is-invalid @enderror form-control" placeholder="unit">--}}
{{--                    @foreach($errors->get('unit.*', []) as $messages)--}}
{{--                        @foreach($messages as $message)--}}
{{--                            <div class="alert alert-danger">{{$message}}</div>--}}
{{--                        @endforeach--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--                <div class="center">--}}
{{--                    <button class="btn btn-success" style="margin-top: 25px" onclick="addAddress();return false">+--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="hidden full-address address-tmp row">--}}
{{--                <div class="col-md-3 col-sm-12 col-xs-12 form-group">--}}
{{--                    <label class="input-group-text">Address title</label>--}}
{{--                    <input name="title[]" class="@error('title') is-invalid @enderror form-control" placeholder="title">--}}
{{--                    @foreach($errors->get('title.*', []) as $messages)--}}
{{--                        @foreach($messages as $message)--}}
{{--                            <div class="alert alert-danger">{{$message}}</div>--}}
{{--                        @endforeach--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--                <div class="col-md-5 col-sm-12 col-xs-12 form-group">--}}
{{--                    <label class="input-group-text">Full address</label>--}}
{{--                    <input name="address[]" class="@error('address') is-invalid @enderror form-control" placeholder="address">--}}
{{--                    @error('address')--}}
{{--                    <div class="alert alert-danger">{{$message}}</div>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--                <div class="col-md-2 col-sm-12 col-xs-12 form-group">--}}
{{--                    <label class="input-group-text">postal code</label>--}}
{{--                    <input name="postal_code[]" class="@error('postal_code') is-invalid @enderror form-control" placeholder="postal code">--}}
{{--                    @error('postal_code')--}}
{{--                    <div class="alert alert-danger">{{$message}}</div>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--                <div class="col-md-1 col-sm-12 col-xs-12 form-group">--}}
{{--                    <label class="input-group-text">unit</label>--}}
{{--                    <input name="unit[]" class="@error('unit') is-invalid @enderror form-control" placeholder="unit">--}}
{{--                    @error('unit')--}}
{{--                    <div class="alert alert-danger">{{$message}}</div>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--                <div class="center">--}}
{{--                    <button class="btn btn-success" style="margin-top: 25px" onclick="addAddress();return false">+--}}
{{--                    </button>--}}
{{--                    <button class="btn btn-danger" style="margin-top: 25px" onclick="removeAddress(this);return false">--}}
{{--                        _--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="addresses row"></div>--}}



{{--    <script>--}}
{{--        function addAddress() {--}}
{{--            let address = $('.full-address').clone();--}}
{{--            $(address).removeClass('full-address').removeClass('hidden');--}}
{{--            $('.addresses').append(address);--}}
{{--        }--}}

{{--        function removeAddress(el) {--}}
{{--            $(el).parents('.address-tmp').first().remove();--}}
{{--        }--}}

{{--    </script>--}}


