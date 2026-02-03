@extends('layout')
@section('content')
    <form method="post" action="{{route('user.update', ['user'=>$user])}}">
        <h1 class="text-center">Update User</h1>
        @csrf
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">name</label>
                <input name="name" placeholder="name" id="comment"
                       class="@error('name') is-invalid @enderror form-control" value="{{$user->name}}">
                @error('name')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">family</label>
                <input name="family" placeholder="family" id="comment"
                       class="@error('family') is-invalid @enderror form-control" value="{{$user->family}}">
                @error('family')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">mobile</label>
                <input name="mobile" placeholder="mobile" id="comment"
                       class="@error('mobile') is-invalid @enderror form-control" value="{{$user->mobile}}">
                @error('mobile')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="validationTooltip02">gender</label>
                <select name="gender" required class="form-control">
                    <option value='man' @if($user->gender == 'man') selected @endif>man</option>
                    <option value='woman' @if($user->gender == 'woman') selected @endif>woman</option>
                </select>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">birth date</label>
                <input name="birth_date" placeholder="birth_date" id="comment"
                       class="@error('birth_date') is-invalid @enderror form-control"
                       value="{{$user->birth_date}}">
                @error('birth_date')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">national code</label>
                <input name="national_code" placeholder="national_code" id="comment"
                       class="@error('national_code') is-invalid @enderror form-control"
                       value="{{$user->national_code}}">
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
                                @if($province->id == $user->province_id) selected @endif> {{$province->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">city</label>
                <select name="city_id" id="comment" class="form-control">
                    @foreach($cities as $city)
                        <option value="{{$city->id}}"
                                @if($city->id == $user->city_id) selected @endif> {{$city->name}} </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">job</label>
                <input name="job" placeholder="job" id="comment"
                       class="@error('job') is-invalid @enderror form-control" value="{{$user->job}}">
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
                       value="{{$user->username}}">
                @error('username')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">password</label>
                <input name="password" placeholder="password" id="comment"
                       class="@error('password') is-invalid @enderror form-control"
                       value="{{$user->password}}">
                @error('password')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">email</label>
                <input name="email" placeholder="email" id="comment"
                       class="@error('email') is-invalid @enderror form-control" value="{{$user->email}}">
                @error('email')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">lat</label>
                <input name="lat" placeholder="lat" id="comment"
                       class="@error('lat') is-invalid @enderror form-control" value="{{$user->lat}}">
                @error('lat')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">lan</label>
                <input name="lan" placeholder="lan" id="comment"
                       class="@error('lan') is-invalid @enderror form-control" value="{{$user->lan}}">
                @error('lan')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
        </div>

        <div class="clearfix"></div>
        <button class="btn btn-info" type="submit">Update User</button>

    </form>
@endsection
