<a href="{{ route('customer.edit', $customer) }}" class="btn btn-info">Edit</a>
<a href="{{ route('customer.delete', $customer) }}" class="btn btn-danger">Delete</a>
<a href="{{Route('address.index',['customer'=>$customer])}}" class="btn btn-success" onclick="openModel(this);return false"><i class="fa fa-plus"></i> ADDRESS</a>
