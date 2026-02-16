<h2 class="text-center">Address</h2>
<div class="row">
    <div class="col-md-3 col-sm-12 col-xs-12 form-group">
        <label class="input-group-text">Address title</label>
        <input name="title[]" class="form-control" placeholder="title">
    </div>
    <div class="col-md-5 col-sm-12 col-xs-12 form-group">
        <label class="input-group-text">Full address</label>
        <input name="address[]" class="form-control" placeholder="address">
    </div>
    <div class="col-md-2 col-sm-12 col-xs-12 form-group">
        <label class="input-group-text">postal code</label>
        <input name="postal_code[]" class="form-control" placeholder="postal code">
    </div>
    <div class="col-md-1 col-sm-12 col-xs-12 form-group">
        <label class="input-group-text">unit</label>
        <input name="unit[]" class="form-control" placeholder="unit">
    </div>
    <div class="center">
        <button class="btn btn-success" style="margin-top: 25px" onclick="addAddress();return false">+
        </button>
    </div>
</div>


<div class="hidden full-address address-tmp row">
    <div class="col-md-3 col-sm-12 col-xs-12 form-group">
        <label class="input-group-text">Address title</label>
        <input name="title[]" class="form-control" placeholder="title">
    </div>
    <div class="col-md-5 col-sm-12 col-xs-12 form-group">
        <label class="input-group-text">Full address</label>
        <input name="address[]" class="form-control" placeholder="address">
    </div>
    <div class="col-md-2 col-sm-12 col-xs-12 form-group">
        <label class="input-group-text">postal code</label>
        <input name="postal_code[]" class="form-control" placeholder="postal code">
    </div>
    <div class="col-md-1 col-sm-12 col-xs-12 form-group">
        <label class="input-group-text">unit</label>
        <input name="unit[]" class="form-control" placeholder="unit">
    </div>
    <div class="center">
        <button class="btn btn-success" style="margin-top: 25px" onclick="addAddress();return false">+
        </button>
        <button class="btn btn-danger" style="margin-top: 25px" onclick="removeAddress(this);return false">
            _
        </button>
    </div>
</div>

<div class="addresses"></div>

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
























{{--<div class="col-md-3 col-sm-12 col-xs-12 form-group">--}}
{{--    <label class="input-group-text">Address title</label>--}}
{{--    <input name="title[]" class="@error('title') is-invalid @enderror form-control" placeholder="title">--}}
{{--    @foreach($errors->get('title.*', []) as $messages)--}}
{{--        @foreach($messages as $message)--}}
{{--            <div class="alert alert-danger">{{$message}}</div>--}}
{{--        @endforeach--}}
{{--    @endforeach--}}
{{--</div>--}}
{{--<div class="col-md-5 col-sm-12 col-xs-12 form-group">--}}
{{--    <label class="input-group-text">Full address</label>--}}
{{--    <input name="address[]" class="@error('address') is-invalid @enderror form-control" placeholder="address">--}}
{{--    @foreach($errors->get('address.*', []) as $messages)--}}
{{--        @foreach($messages as $message)--}}
{{--            <div class="alert alert-danger">{{$message}}</div>--}}
{{--        @endforeach--}}
{{--    @endforeach--}}
{{--</div>--}}
{{--<div class="col-md-2 col-sm-12 col-xs-12 form-group">--}}
{{--    <label class="input-group-text">postal code</label>--}}
{{--    <input name="postal_code[]" class="@error('postal_code') is-invalid @enderror form-control" placeholder="postal code">--}}
{{--    @foreach($errors->get('postal_code.*', []) as $messages)--}}
{{--        @foreach($messages as $message)--}}
{{--            <div class="alert alert-danger">{{$message}}</div>--}}
{{--        @endforeach--}}
{{--    @endforeach--}}
{{--</div>--}}
{{--<div class="col-md-1 col-sm-12 col-xs-12 form-group">--}}
{{--    <label class="input-group-text">unit</label>--}}
{{--    <input name="unit[]" class="@error('unit') is-invalid @enderror form-control" placeholder="unit">--}}
{{--    @foreach($errors->get('unit.*', []) as $messages)--}}
{{--        @foreach($messages as $message)--}}
{{--            <div class="alert alert-danger">{{$message}}</div>--}}
{{--        @endforeach--}}
{{--    @endforeach--}}
{{--</div>--}}
{{--<div class="center">--}}
{{--    <button class="btn btn-success" style="margin-top: 25px" onclick="addAddress();return false">+--}}
{{--    </button>--}}
{{--</div>--}}
{{--</div>--}}


{{--<div class="hidden full-address address-tmp row">--}}
{{--    <div class="col-md-3 col-sm-12 col-xs-12 form-group">--}}
{{--        <label class="input-group-text">Address title</label>--}}
{{--        <input name="title[]" class="@error('title') is-invalid @enderror form-control" placeholder="title">--}}
{{--        @foreach($errors->get('title.*', []) as $messages)--}}
{{--            @foreach($messages as $message)--}}
{{--                <div class="alert alert-danger">{{$message}}</div>--}}
{{--            @endforeach--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--    <div class="col-md-5 col-sm-12 col-xs-12 form-group">--}}
{{--        <label class="input-group-text">Full address</label>--}}
{{--        <input name="address[]" class="@error('address') is-invalid @enderror form-control" placeholder="address">--}}
{{--        @error('address')--}}
{{--        <div class="alert alert-danger">{{$message}}</div>--}}
{{--        @enderror--}}
{{--    </div>--}}
{{--    <div class="col-md-2 col-sm-12 col-xs-12 form-group">--}}
{{--        <label class="input-group-text">postal code</label>--}}
{{--        <input name="postal_code[]" class="@error('postal_code') is-invalid @enderror form-control" placeholder="postal code">--}}
{{--        @error('postal_code')--}}
{{--        <div class="alert alert-danger">{{$message}}</div>--}}
{{--        @enderror--}}
{{--    </div>--}}
{{--    <div class="col-md-1 col-sm-12 col-xs-12 form-group">--}}
{{--        <label class="input-group-text">unit</label>--}}
{{--        <input name="unit[]" class="@error('unit') is-invalid @enderror form-control" placeholder="unit">--}}
{{--        @error('unit')--}}
{{--        <div class="alert alert-danger">{{$message}}</div>--}}
{{--        @enderror--}}
{{--    </div>--}}
