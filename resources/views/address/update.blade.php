<div class="">
    <form method="post" id="update-address-form" action="{{route('address.update',['customer'=>$customer, 'address' => $address])}}">
        @csrf
        <div class="form-row">
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text" >address</label>
                <input type="text" name="address" class="form-control" placeholder="address" value="{{$address->address}}" required>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text" >postal code</label>
                <input type="text" name="postal_code" class="form-control" placeholder="postal code" value="{{$address->postal_code}}" required>
            </div>

            <div class="clearfix"></div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text" >unit</label>
                <input type="text" name="unit" class="form-control" placeholder="unit" value="{{$address->unit}}" required>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text" >title</label>
                <input type="text" name="title" class="form-control" placeholder="title" value="{{$address->title}}" required>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text" >customer id</label>
                <input type="text" name="customer_id" class="form-control" placeholder="customer id" value="{{$address->customer_id}}" required>
            </div>

            <div class="clearfix"></div>
            <button class="btn btn-primary" id="update-address-btn" onclick="updateAddress(this); return false" href="{{route('address.index', ['customer' => $customer])}}" type="submit" >UPDATE</button>
        </div>
    </form>
</div>
