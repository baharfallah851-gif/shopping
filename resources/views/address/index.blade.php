@extends('layout')
@section('content')
    <div class="form-floating mb-3 mt-3">
        <a class="btn btn-app" href="{{Route('customer.index')}}">
            <i class="fa fa-edit"></i> ADD
        </a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>address</th>
                <th>postel code</th>
                <th>unit</th>
                <th>title</th>

                <th>option</th>
            </tr>
            </thead>
            @csrf
            @foreach($addresses as $address)
                <tbody>
                <tr class="table table-striped">
                    <td>{{$address->address}}</td>
                    <td>{{$address->postel_code}}</td>
                    <td>{{$address->unit}}</td>
                    <td>{{$address->title}}</td>
                    <td>
                        <a href="{{Route('address.edit',['address'=>$address])}}" class="btn btn-info"><i class="fa fa-pencil"></i> UPDATE</a>
                        <a href="{{Route('address.delete',['address'=>$address])}}" class="btn btn-danger"><i class="fa fa-trash-o"></i> DELETE</a>
                    </td>
                </tr>

                </tbody>
            @endforeach

        </table>

@endsection
