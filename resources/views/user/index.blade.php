@extends('layout')
@section('content')
<div class="form-floating mb-3 mt-3">
    <a class="btn btn-app" href="{{Route('user.add')}}">
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
            <th>email</th>
            <th>lat</th>
            <th>lan</th>

            <th>option</th>
        </tr>
        </thead>
        @foreach($users as $user)
            <tbody>
            <tr class="table table-striped">
                <td>{{$user->name}}</td>
                <td>{{$user->family}}</td>
                <td>{{$user->mobile}}</td>
                <td>{{$user->gender}}</td>
                <td>{{$user->birth_date}}</td>
                <td>{{$user->national_code}}</td>
                <td>{{$user->province_id}}</td>
                <td>{{$user->city_id}}</td>
                <td>{{$user->job}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->lat}}</td>
                <td>{{$user->lan}}</td>
                <td>
                    <a href="{{Route('user.edit',['user'=>$user])}}" class="btn btn-info"><i class="fa fa-pencil"></i> UPDATE</a>
                    <a href="{{Route('user.delete',['user'=>$user])}}" class="btn btn-danger"><i class="fa fa-trash-o"></i> DELETE</a>
                </td>
            </tr>

            </tbody>
        @endforeach

    </table>

</div>
@endsection
