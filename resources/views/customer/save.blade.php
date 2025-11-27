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
        @foreach($customer as $customer)
            <tbody>
            <tr class="table-dark">
                <td>{{$customer->name}}</td>
                <td>{{$customer->family}}</td>
                <td>{{$customer->mobile}}</td>
                <td>{{$customer->gender}}</td>
                <td>{{$customer->birth_date}}</td>
                <td>{{$customer->national_code}}</td>
                <td>{{$customer->province_id}}</td>
                <td>{{$customer->ciyt_id}}</td>
                <td>{{$customer->job}}</td>
                <td>{{$customer->username}}</td>
                <td>{{$customer->password}}</td>
                <td>{{$customer->lat}}</td>
                <td>{{$customer->lan}}</td>
                <td>
                    <a href="{{Route('customer.edit',['customer'=>$customer])}}">UPDATE</a>
                    <a href="{{Route('customer.delete',['customer'=>$customer])}}">DELETE</a>
                </td>
            </tr>

            </tbody>
        @endforeach

    </table>
    <a type="button" class="btn btn-outline-info" href="{{Route('customer.add')}}">ADD</a>
</div>
</body>
