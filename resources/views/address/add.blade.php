<div class="">
    <form method="post" id="save-address-form" action="{{route('address.save',['customer'=>$customer])}}" class="was-validated">
        @csrf
        <div class="form-row">
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text" >address</label>
                <input type="text" name="address" class="form-control" placeholder="address" required>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text" >postal code</label>
                <input type="text" name="postal_code" class="form-control" placeholder="postal code" required>
            </div>

            <div class="clearfix"></div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text" >unit</label>
                <input type="text" name="unit" class="form-control" placeholder="unit" required>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text" >title</label>
                <input type="text" name="title" class="form-control" placeholder="title" required>
            </div>


            <div class="clearfix"></div>
            <button class="btn btn-primary" id="save-address-btn" href="{{route('address.index', ['customer' => $customer])}}" onclick="saveAddress();return false" >ADD</button>
        </div>
    </form>
</div>
