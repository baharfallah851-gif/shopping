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
                <td>{{$customer->name}}</td>
                <td>{{$customer->family}}</td>
                <td>{{$customer->mobile}}</td>
                <td>{{$customer->gender}}</td>
                <td>{{$customer->birth_date}}</td>
                <td>{{$customer->national_code}}</td>
                <td>{{$customer->province->name}}</td>
                <td>{{$customer->city->name}}</td>
                <td>{{$customer->job}}</td>
                <td>{{$customer->username}}</td>
                <td>{{$customer->lat}}</td>
                <td>{{$customer->lan}}</td>
                <td>
                    <a href="{{Route('customer.edit',['customer'=>$customer])}}" class="btn btn-info"><i class="fa fa-pencil"></i> UPDATE</a>
                    <a href="{{Route('customer.delete',['customer'=>$customer])}}" class="btn btn-danger"><i class="fa fa-trash-o"></i> DELETE</a>
                    <a > </a>
                </td>
            </tr>

            </tbody>
        @endforeach

    </table>

@endsection
