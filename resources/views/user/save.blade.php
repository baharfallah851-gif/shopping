<!doctype html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('file/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('file/bootstrap.bundle.min.js')}}"></script>
</head>

<body>

<div class="form-floating mb-3 mt-3">
    <table class="table table-striped">
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
        @foreach($user as user)
            <tbody>
            <tr class="table-dark">
                <td>{{$user->name}}</td>
                <td>{{$user->family}}</td>
                <td>{{$user->mobile}}</td>
                <td>{{$user->gender}}</td>
                <td>{{$user->birth_date}}</td>
                <td>{{$user->national_code}}</td>
                <td>{{$user->province_id}}</td>
                <td>{{$user->ciyt_id}}</td>
                <td>{{$user->job}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->lat}}</td>
                <td>{{$user->lan}}</td>
                <td>
                    <a href="{{Route('user.edit',['user'=>$user])}}">UPDATE</a>
                    <a href="{{Route('user.delete',['user'=>$user])}}">DELETE</a>
                </td>
            </tr>

            </tbody>
        @endforeach

    </table>
    <a type="button" class="btn btn-outline-info" href="{{Route('user.add')}}">ADD</a>
</div>
</body>
