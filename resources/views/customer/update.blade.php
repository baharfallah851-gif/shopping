@extends('layout')
@section('content')
    <form method="post" action="{{route('customer.update', ['customer'=>$customer])}}">
        <h1>UPDATE CUSTOMER</h1>
        @csrf
        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">name</label>
            <input name="name" placeholder="name" id="comment" class="form-control" value="{{$customer->name}}">
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">family</label>
            <input name="family" placeholder="family" id="comment" class="form-control" value="{{$customer->family}}">
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">mobile</label>
            <input name="mobile" placeholder="mobile" id="comment" class="form-control" value="{{$customer->mobile}}">
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="validationTooltip02">gender</label>
            <select name="gender" required class="form-control">
                <option value='man' @if($customer->gender == 'man') selected @endif>man</option>
                <option value='woman' @if($customer->gender == 'woman') selected @endif>woman</option>
            </select>
        </div><br>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">birth date</label>
            <input name="birth_date" placeholder="birth_date" id="comment" class="form-control" value="{{$customer->birth_date}}">
        </div><br>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">national code</label>
            <input name="national_code" placeholder="national_code" id="comment" class="form-control"
                   value="{{$customer->national_code}}">
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">province</label>
            <select name="province_id" id="comment" class="form-control" >
                @foreach($provinces as $province)
                    <option value="{{$province->id}}" @if($province->id == $customer->province_id) selected @endif> {{$province->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">city</label>
            <select name="city_id" id="comment" class="form-control">
                @foreach($cities as $city)
                    <option value="{{$city->id}}" @if($city->id == $customer->city_id) selected @endif> {{$city->name}} </option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">job</label>
            <input name="job" placeholder="job" id="comment" class="form-control" value="{{$customer->job}}">
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">username</label>
            <input name="username" placeholder="username" id="comment" class="form-control"
                   value="{{$customer->username}}">
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">password</label>
            <input name="password" placeholder="password" id="comment" class="form-control"
                   value="{{$customer->password}}">
        </div>

        <div class="clearfix"></div>
        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">lat</label>
            <input name="lat" placeholder="lat" id="comment" class="form-control" value="{{$customer->lat}}">
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">lan</label>
            <input name="lan" placeholder="lan" id="comment" class="form-control" value="{{$customer->lan}}">
        </div><br>

        <div class="clearfix"></div>
        <div class="hidden full-address address-tmp">
            <input name="address_id[]" value="" type="hidden">

            <div class="col-md-5 col-sm-12 col-xs-12 form-group">
                <span class="input-group-text">Full address</span>
                <input name="address[]" class="form-control" placeholder="address">
            </div>
            <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                <span class="input-group-text">postal code</span>
                <input name="postal_code[]" class="form-control" placeholder="postal code">
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
                <button class="btn btn-danger" style="margin-top:20px" onclick="removeAddress(this);return false">_</button>
            </div>
        </div>

        @if(!$customer->addresses()->count())
            <div class=" address-tmp">
                <input name="address_id[]" value="" type="hidden">

                <div class="col-md-5 col-sm-12 col-xs-12 form-group">
                    <span class="input-group-text">Full address</span>
                    <input name="address[]" class="form-control" placeholder="address">
                </div>
                <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <span class="input-group-text">postal code</span>
                    <input name="postal_code[]" class="form-control" placeholder="postal code" >
                </div>
                <div class="col-md-1 col-sm-12 col-xs-12 form-group" >
                    <span class="input-group-text">unit</span>
                    <input name="unit[]" class="form-control" placeholder="unit" >
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                    <span class="input-group-text">Address title</span>
                    <input name="title[]" class="form-control" placeholder="title">
                </div>

                <div class="center">
                    <button  class="btn btn-success" style="margin-top: 20px" onclick="addAddress();return false">+</button>
                </div>
            </div>
        @endif
        <div class="addresses">
            @foreach($customer->addresses as $address)
                <div class="address-tmp">
                    <input name="address_id[]" value="{{$address->id}}" type="hidden">
                    <div class="col-md-5 col-sm-12 col-xs-12 form-group">
                        <span class="input-group-text">Full address</span>
                        <input name="address[]" class="form-control" value="{{$address->address}}">
                    </div>
                    <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                        <span class="input-group-text">postal code</span>
                        <input name="postal_code[]" class="form-control" value="{{$address->postal_code}}">
                    </div>
                    <div class="col-md-1 col-sm-12 col-xs-12 form-group" >
                        <span class="input-group-text">unit</span>
                        <input name="unit[]" class="form-control" value="{{$address->unit}}">
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                        <span class="input-group-text">Address title</span>
                        <input name="title[]" class="form-control" value="{{$address->title}}">
                    </div>
                    <div class="center">
                        <button  class="btn btn-success" style="margin-top: 20px" onclick="addAddress();return false">+</button>
                        @if($loop->index)
                            <button class="btn btn-danger" style="margin-top:25px" onclick="removeAddress(this);return false">_</button>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <div class="clearfix"></div>
        <button class="btn btn-primary" type="submit">UPDATE</button>
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
