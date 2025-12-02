@extends('layout')
@section('content')
<div class="form-floating mb-3 mt-3">
    <a class="btn btn-app" href="{{Route('customer.add')}}">
        <i class="fa fa-edit"></i> ADD
    </a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>name</th>
            <th>family</th>
            <th>mobile</th>
            <th>gender</th>
            <th>birth_date</th>
            <th>national_code</th>
            <th>province_id</th>
            <th>city_id</th>
            <th>job</th>
            <th>username</th>
            <th>password</th>
            <th>lat</th>
            <th>lan</th>

            <th>option</th>
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
                <td>{{$customer->province_id}}</td>
                <td>{{$customer->city_id}}</td>
                <td>{{$customer->job}}</td>
                <td>{{$customer->username}}</td>
                <td>{{$customer->password}}</td>
                <td>{{$customer->lat}}</td>
                <td>{{$customer->lan}}</td>
                <td>
                    <a href="{{Route('customer.edit',['customer'=>$customer])}}" class="btn btn-info"><i class="fa fa-pencil"></i> UPDATE</a>
                    <a href="{{Route('customer.delete',['customer'=>$customer])}}" class="btn btn-danger"><i class="fa fa-trash-o"></i> DELETE</a>
                </td>
            </tr>

            </tbody>
        @endforeach

    </table>

@endsection
