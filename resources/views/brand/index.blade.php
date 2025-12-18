@extends('layout')
@section('content')
    <a class="btn btn-app" href="{{Route('brand.add')}}">
        <i class="fa fa-edit"></i> ADD
    </a>
    <table class="table table-bordered">
        <tr>
            <th class="mb-5 mt-3">title</th>
        </tr>
        @foreach($brands as $brand)
            <tr class="table table-striped">
                <td>{{$brand->title}}</td>

                <td>
                    <a href="{{Route('brand.edit',['brand'=>$brand])}}" class="btn btn-info"><i class="fa fa-pencil"></i> UPDATE</a>
                    <a href="{{Route('brand.delete',['brand'=>$brand])}}" class="btn btn-danger"><i class="fa fa-trash-o"></i> DELETE</a>
                </td>
            </tr>

        @endforeach

    </table>

@endsection
