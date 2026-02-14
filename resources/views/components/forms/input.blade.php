<div>
    <div class="form-row">
        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text">{{$label}}</label>
            <input type="{{$type}}" name="{{$name}}" class="@error('{{$name}}') is-invalid @enderror form-control"
                   placeholder="{{$placeholder}}">
            @error('{{$name}}')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
</div>
