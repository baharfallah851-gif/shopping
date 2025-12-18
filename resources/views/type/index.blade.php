@extends('layout')
@section('content')
    <div class="form-actions mt-3 mt-3">
        <a class="btn btn-app" href="{{Route('type.add')}}">
            <i class="fa fa-edit"></i> ADD
        </a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center">title</th>
                <th class="text-center">option</th>
            </tr>
            </thead>
            @csrf
            @foreach($types as $type)
                <tbody>
                <tr class="table table-striped">
                    <td class="text-center">{{$type->title}}</td>
                    <td class="text-center">
                        <a href="{{route('type.edit',['type'=>$type])}}" class="btn btn-info"><i class="fa fa-pencil"></i>UPDATE </a>
                        <a href="{{route('type.delete',['type'=>$type])}}" class="btn btn-danger"><i class="fa fa-pencil"></i>DELETE </a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
