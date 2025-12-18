@extends('layout')
@section('content')
<div class="form-floating mb-3 mt-3">
    <a class="btn btn-app" href="{{Route('user.add')}}">
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
            <th class="text-center">email</th>
            <th class="text-center">lat</th>
            <th class="text-center">lan</th>

            <th class="text-center">option</th>
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
                <td>{{$user->province?->name}}</td>
                <td>{{$user->city?->name}}</td>
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
