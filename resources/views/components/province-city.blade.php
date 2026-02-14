<div class="col-md-4 col-sm-12 col-xs-12 form-group">
    <label class="input-group-text">Province</label>
    <select name="province_id" class="form-control">
        @foreach($provinces as $province)
            <option value="{{$province->id}}">{{$province->name}}</option>
        @endforeach
    </select>
</div>
<div class="col-md-4 col-sm-12 col-xs-12 form-group">
    <label class="input-group-text">City</label>
    <select name="city_id" class="form-control">
        @foreach($cities as $city)
            <option value="{{$city->id}}">{{$city->name}}</option>
        @endforeach
    </select>
</div>
