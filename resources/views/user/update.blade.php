<div>
    <form method="post" action="{{route('user.update', ['user'=>$user])}}">
        @csrf
        <input name="name" placeholder="name" value="{{$user->nsme}}">
        <input name="family" placeholder="family" value="{{$user->family}}">
        <input name="mobile" placeholder="mobile" value="{{$user->mobile}}">
        <input name="gender" placeholder="gender" value="{{$user->gender}}">
        <input name="birth_date" placeholder="birth_date" value="{{$user->birth_date}}">
        <input name="national_code" placeholder="national_code" value="{{$user->national_code}}">
        <input name="province_id" placeholder="province_id" value="{{$user->province_id}}">
        <input name="city_id" placeholder="city_id" value="{{$user->city_id}}">
        <input name="job" placeholder="job" value="{{$user->job}}">
        <input name="username" placeholder="username" value="{{$user->username}}">
        <input name="password" placeholder="password" value="{{$user->password}}">
        <input name="lat" placeholder="lat" value="{{$user->lat}}">
        <input name="lan" placeholder="lan" value="{{$user->lan}}">


        <button class="btn btn-primary" type="submit" >UPDATE</button>

    </form>
</div>
