@extends('layout')
@section('content')
    <div class="form-floating mb-3 mt-3">
        <a class="btn btn-app" href="{{Route('ticket.add')}}">
            <i class="fa fa-edit"></i> ADD
        </a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center">title</th>
                <th class="text-center">type</th>
                <th class="text-center">category</th>
                <th class="text-center">priority</th>
                <th class="text-center">status</th>
                <th class="text-center">description</th>
                <th class="text-center">send message</th>

                <th class="text-center">OPTION</th>
            </tr>
            </thead>
            @csrf
            @foreach($tickets as $ticket)
                <tbody>
                <tr class="table table-striped">
                    <td class="text-center">{{$ticket->title}}</td>
                    <td class="text-center">{{$ticket->type?->title}}</td>
                    <td class="text-center">{{$ticket->category?->title}}</td>
                    <td class="text-center">{{$ticket->priority}}</td>
                    <td class="text-center">{{$ticket->status}}</td>
                    <td class="text-center">{{$ticket->description}}</td>
                    <td class="text-center">{{$ticket->send_message}}</td>

                    <td class="text-center">
                        <a href="{{route('ticket.edit',['ticket'=>$ticket])}}" class="btn btn-info"><i class="fa fa-pencil"></i> UPDATE</a>
                        <a href="{{route('ticket.delete',['ticket'=>$ticket])}}" class="btn btn-danger"><i class="fa fa-pencil"></i> DELETE</a>
                    </td>
                </tr>

                </tbody>
            @endforeach

        </table>

@endsection
