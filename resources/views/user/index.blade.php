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
                <td class="text-center">{{$user->name}}</td>
                <td class="text-center">{{$user->family}}</td>
                <td class="text-center">{{$user->mobile}}</td>
                <td class="text-center">{{$user->gender}}</td>
                <td class="text-center">{{$user->birth_date}}</td>
                <td class="text-center">{{$user->national_code}}</td>
                <td class="text-center">{{$user->province?->name}}</td>
                <td class="text-center">{{$user->city?->name}}</td>
                <td class="text-center">{{$user->job}}</td>
                <td class="text-center">{{$user->username}}</td>
                <td class="text-center">{{$user->email}}</td>
                <td class="text-center">{{$user->lat}}</td>
                <td class="text-center">{{$user->lan}}</td>
                <td class="text-center">
                    <a href="{{Route('user.edit',['user'=>$user])}}" class="btn btn-info"><i class="fa fa-pencil"></i> UPDATE</a>
                    <a href="{{Route('user.delete',['user'=>$user])}}" class="btn btn-danger"><i class="fa fa-trash-o"></i> DELETE</a>
                </td>
            </tr>

            </tbody>
        @endforeach

    </table>

</div>
@endsection
