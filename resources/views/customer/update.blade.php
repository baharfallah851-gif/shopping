@extends('layout')
@section('content')
    <form method="post" action="{{route('customer.update', ['customer'=>$customer])}}">
        <h1 class="text-center">Update Customer</h1><br>
        @csrf
        <div class="form-row">

            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <label for="comment">name</label>
                    <input name="name" placeholder="name" id="comment"
                           class="@error('name') is-invalid @enderror form-control"
                           value="{{$customer->name}}">
                    @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <label for="comment">family</label>
                    <input name="family" placeholder="family" id="comment"
                           class="@error('family') is-invalid @enderror form-control" value="{{$customer->family}}">
                    @error('family')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <label for="comment">mobile</label>
                    <input name="mobile" placeholder="mobile" id="comment"
                           class="@error('mobile') is-invalid @enderror form-control" value="{{$customer->mobile}}">
                    @error('mobile')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <label for="validationTooltip02">gender</label>
                    <select name="gender" required class="form-control">
                        <option value='man' @if($customer->gender == 'man') selected @endif>man</option>
                        <option value='woman' @if($customer->gender == 'woman') selected @endif>woman</option>
                    </select>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <label for="comment">birth date</label>
                    <input name="birth_date" placeholder="birth_date" id="comment"
                           class="@error('birth_date') is-invalid @enderror form-control"
                           value="{{$customer->birth_date}}">
                    @error('birth_date')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <label for="comment">national code</label>
                    <input name="national_code" placeholder="national code" id="comment"
                           class="@error('national_code') is-invalid @enderror form-control"
                           value="{{$customer->national_code}}">
                    @error('national_code')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <label for="comment">province</label>
                    <select name="province_id" id="comment" class="form-control">
                        @foreach($provinces as $province)
                            <option value="{{$province->id}}"
                                    @if($province->id == $customer->province_id) selected @endif> {{$province->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <label for="comment">city</label>
                    <select name="city_id" id="comment" class="form-control">
                        @foreach($cities as $city)
                            <option value="{{$city->id}}"
                                    @if($city->id == $customer->city_id) selected @endif> {{$city->name}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <label for="comment">job</label>
                    <input name="job" placeholder="job" id="comment"
                           class="@error('job') is-invalid @enderror form-control"
                           value="{{$customer->job}}">
                    @error('job')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <label for="comment">username</label>
                    <input name="username" placeholder="username" id="comment"
                           class="@error('username') is-invalid @enderror form-control"
                           value="{{$customer->username}}">
                    @error('username')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <label for="comment">password</label>
                    <input name="password" placeholder="password" id="comment"
                           class="@error('password') is-invalid @enderror form-control"
                           value="{{$customer->password}}">
                    @error('password')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <label for="comment">lat</label>
                    <input name="lat" placeholder="lat" id="comment"
                           class="@error('lat') is-invalid @enderror form-control"
                           value="{{$customer->lat}}">
                    @error('lat')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                    <label for="comment">lan</label>
                    <input name="lan" placeholder="lan" id="comment"
                           class="@error('lan') is-invalid @enderror form-control"
                           value="{{$customer->lan}}">
                    @error('lan')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <br>
            <div class="clearfix"></div>
            <h2 class="text-center">Address</h2><br>

            <div class=" hidden full-address address-tmp">
                <input name="address_id[]" value="" type="hidden">

                <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                    <span class="input-group-text">Address title</span>
                    <input name="title[]" class="@error('title') is-invalid @enderror form-control" placeholder="title">
                    @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-5 col-sm-12 col-xs-12 form-group">
                    <span class="input-group-text">Full address</span>
                    <input name="address[]" class="@error('address') is-invalid @enderror form-control"
                           placeholder="address">
                    @error('address')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <span class="input-group-text">postal code</span>
                    <input name="postal_code[]" class="@error('postal_code') is-invalid @enderror form-control"
                           placeholder="postal code">
                    @error('postal_code')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                    <span class="input-group-text">unit</span>
                    <input name="unit[]" class="@error('unit') is-invalid @enderror form-control" placeholder="unit">
                    @error('unit')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="center">
                    <button class="btn btn-success" style="margin-top: 20px" onclick="addAddress();return false">+
                    </button>
                    <button class="btn btn-danger" style="margin-top:20px" onclick="removeAddress(this);return false">_
                    </button>
                </div>
            </div>
            <div class="row">
                @if(!$customer->addresses()->count())
                    <div class=" address-tmp">
                        <input name="address_id[]" value="" type="hidden">

                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                            <span class="input-group-text">Address title</span>
                            <input name="title[]" class="@error('title') is-invalid @enderror form-control"
                                   placeholder="title">
                            @error('title')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-md-5 col-sm-12 col-xs-12 form-group">
                            <span class="input-group-text">Full address</span>
                            <input name="address[]" class="@error('address') is-invalid @enderror form-control"
                                   placeholder="address">
                            @error('address')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                            <span class="input-group-text">postal code</span>
                            <input name="postal_code[]" class="@error('postal_code') is-invalid @enderror form-control"
                                   placeholder="postal code">
                            @error('postal_code')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                            <span class="input-group-text">unit</span>
                            <input name="unit[]" class="@error('unit') is-invalid @enderror form-control"
                                   placeholder="unit">
                            @error('unit')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="center">
                            <button class="btn btn-success" style="margin-top: 20px"
                                    onclick="addAddress();return false">+
                            </button>
                        </div>
                    </div>
                @endif
            </div>
            <div class="addresses row">
                @foreach($customer->addresses as $address)
                    <div class="address-tmp">
                        <input name="address_id[]" value="{{$address->id}}" type="hidden">
                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                            <span class="input-group-text">Address title</span>
                            <input name="title[]" class="@error('title') is-invalid @enderror form-control"
                                   value="{{$address->title}}" placeholder="title">
                            @error('title')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-md-5 col-sm-12 col-xs-12 form-group">
                            <span class="input-group-text">Full address</span>
                            <input name="address[]" class="@error('address') is-invalid @enderror form-control"
                                   value="{{$address->address}}"
                                   placeholder="address">
                            @error('address')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                            <span class="input-group-text">postal code</span>
                            <input name="postal_code[]" class="@error('postal_code') is-invalid @enderror form-control"
                                   value="{{$address->postal_code}}"
                                   placeholder="postal code">
                            @error('postal_code')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                            <span class="input-group-text">unit</span>
                            <input name="unit[]" class="@error('unit') is-invalid @enderror form-control"
                                   value="{{$address->unit}}" placeholder="unit">
                            @error('unit')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="center">
                            <button class="btn btn-success" style="margin-top: 20px"
                                    onclick="addAddress();return false">+
                            </button>
                            @if($loop->index)
                                <button class="btn btn-danger" style="margin-top:25px"
                                        onclick="removeAddress(this);return false">_
                                </button>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

            <button class="btn btn-info" type="submit">Update Customer</button>
        </div>
    </form>

    <script>
        function addAddress() {
            let address = $('.full-address').clone();
            $(address).removeClass('full-address').removeClass('hidden');
            $('.addresses').append(address);
        }

        function removeAddress(el) {
            $(el).parents('.address-tmp').first().remove();
        }

    </script>
@endsection
