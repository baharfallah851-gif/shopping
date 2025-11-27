<div>
    <form method="post" action="{{route('customer.update', ['customer'=>$customer])}}">
        @csrf
        <input name="name" placeholder="name" value="{{$customer->nsme}}">
        <input name="family" placeholder="family" value="{{$customer->family}}">
        <input name="mobile" placeholder="mobile" value="{{$customer->mobile}}">
        <input name="gender" placeholder="gender" value="{{$customer->gender}}">
        <input name="birth_date" placeholder="birth_date" value="{{$customer->birth_date}}">
        <input name="national_code" placeholder="national_code" value="{{$customer->national_code}}">
        <input name="province_id" placeholder="province_id" value="{{$customer->province_id}}">
        <input name="city_id" placeholder="city_id" value="{{$customer->city_id}}">
        <input name="job" placeholder="job" value="{{$customer->job}}">
        <input name="username" placeholder="username" value="{{$customer->username}}">
        <input name="password" placeholder="password" value="{{$customer->password}}">
        <input name="lat" placeholder="lat" value="{{$customer->lat}}">
        <input name="lan" placeholder="lan" value="{{$customer->lan}}">


        <button class="btn btn-primary" type="submit" >UPDATE</button>

    </form>
</div>
