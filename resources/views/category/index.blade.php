@extends('layout')
@section('content')
    <div class="form-floating mb-3 mt-3">
        <a class="btn btn-app" href="{{Route('category.add')}}">
            <i class="fa fa-edit"></i> ADD
        </a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center">type</th>
                <th class="text-center">title</th>

                <th class="text-center">option</th>
            </tr>
            </thead>

            @csrf
            @foreach($categories as $category)
                <tr>
                    <td class="text-center">{{$category->type?->title}}</td>
                    <td class="text-center">{{$category->title}}</td>
                    <td class="text-center">
                        <a href="{{route('category.edit',['category'=>$category])}}" class="btn btn-info"><i class="fa fa-pencil"></i>UPDATE </a>
                        <a href="{{route('category.delete',['category'=>$category])}}" class="btn btn-danger"><i class="fa fa-pencil"></i>DELETE </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
