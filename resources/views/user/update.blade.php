@extends('layout')
@section('content')
        <form method="post" action="{{route('user.update', ['user'=>$user])}}">
            <h1 class="container mt-5 mb-5">UPDATE CUSTOMER</h1>
            @csrf
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">name</label>
                <input name="name" placeholder="name" id="comment" class="form-control" value="{{$user->name}}">
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">family</label>
                <input name="family" placeholder="family" id="comment" class="form-control" value="{{$user->family}}">
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">mobile</label>
                <input name="mobile" placeholder="mobile" id="comment" class="form-control" value="{{$user->mobile}}">
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="validationTooltip02">gender</label>
                <select name="gender" required class="form-control">
                    <option value='man' @if($user->gender == 'man') selected @endif>man</option>
                    <option value='woman' @if($user->gender == 'woman') selected @endif>woman</option>
                </select>
            </div><br>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">birth date</label>
                <input name="birth_date" placeholder="birth_date" id="comment" class="form-control" value="{{$user->birth_date}}">
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">national_code</label>
                <input name="national_code" placeholder="national_code" id="comment" class="form-control" value="{{$user->national_code}}">
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">province id</label>
                <select name="province_id" id="comment" class="form-control" >
                    @foreach($provinces as $province)
                        <option value="{{$province->id}}" @if($province->id == $user->province_id) selected @endif> {{$province->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">city id</label>
                <select name="city_id" id="comment" class="form-control">
                    @foreach($cities as $city)
                        <option value="{{$city->id}}" @if($city->id == $user->city_id) selected @endif> {{$city->name}} </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">job</label>
                <input name="job" placeholder="job" id="comment" class="form-control" value="{{$user->job}}">
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">username</label>
                <input name="username" placeholder="username" id="comment" class="form-control" value="{{$user->username}}">
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">password</label>
                <input name="password" placeholder="password" id="comment" class="form-control" value="{{$user->password}}">
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">email</label>
                <input name="email" placeholder="email" id="comment" class="form-control" value="{{$user->email}}">
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">lat</label>
                <input name="lat" placeholder="lat" id="comment" class="form-control" value="{{$user->lat}}">
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">lan</label>
                <input name="lan" placeholder="lan" id="comment" class="form-control" value="{{$user->lan}}">
            </div>

            <div class="clearfix"></div>
            <button class="btn btn-primary" type="submit" >UPDATE</button>

        </form>
@endsection
