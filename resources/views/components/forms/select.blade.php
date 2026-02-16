<div class="col-md-4 col-sm-12 col-xs-12 form-group">
    <label class="input-group-text">{{$label}}</label>
    <select name="{{$name}}" required class="form-control">
        @foreach($values as $value)
            <option value="{{$value}}">{{$value}}</option>
        @endforeach
    </select>
</div>

