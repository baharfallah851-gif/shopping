@extends('layout')
@section('content')
<div class="form-floating mb-3 mt-3">
    <a class="btn btn-app" href="{{Route('customer.add')}}">
        <i class="fa fa-edit"></i> ADD
    </a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th class="text-center">name</th>
            <th class="text-center">family</th>
            <th class="text-center">mobile</th>
            <th class="text-center">gender</th>
            <th class="text-center">birth date</th>
            <th class="text-center">national code</th>
            <th class="text-center">province</th>
            <th class="text-center">city</th>
            <th class="text-center">job</th>
            <th class="text-center">username</th>
            <th class="text-center">lat</th>
            <th class="text-center">lan</th>

            <th class="text-center">option</th>
        </tr>
        </thead>
        @csrf
        @foreach($customers as $customer)
            <tbody>
            <tr class="table table-striped">
                <td class="text-center">{{$customer->name}}</td>
                <td class="text-center">{{$customer->family}}</td>
                <td class="text-center">{{$customer->mobile}}</td>
                <td class="text-center">{{$customer->gender}}</td>
                <td class="text-center">{{$customer->birth_date}}</td>
                <td class="text-center">{{$customer->national_code}}</td>
                <td class="text-center">{{$customer->province->name}}</td>
                <td class="text-center">{{$customer->city->name}}</td>
                <td class="text-center">{{$customer->job}}</td>
                <td class="text-center">{{$customer->username}}</td>
                <td class="text-center">{{$customer->lat}}</td>
                <td class="text-center">{{$customer->lan}}</td>
                <td class="text-center">
                    <a href="{{Route('customer.edit',['customer'=>$customer])}}" class="btn btn-info"><i class="fa fa-pencil"></i> UPDATE</a>
                    <a href="{{Route('customer.delete',['customer'=>$customer])}}" class="btn btn-danger"><i class="fa fa-trash-o"></i> DELETE</a>
                    <a href="{{Route('address.index',['customer'=>$customer])}}" class="btn btn-success" onclick="openModel(this);return false"><i class="fa fa-plus"></i> ADDRESS</a>
                    <a > </a>
                </td>
            </tr>

            </tbody>
        @endforeach

    </table>

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">ADDRESS</h4>
                </div>

                <div class="modal-body">

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
</div>



<script>
    function openModel(el){
        $.ajax({
            url: $(el).attr('href'),
            method: 'GET',
            success: function (result) {
                $('.modal-body').html(result);
                $('#myModal').modal('toggle')
            },

        {{-- error: function () {
                alert('error')
            }--}}
        })
    }
</script>

@endsection
