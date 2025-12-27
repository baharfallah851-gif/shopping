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
                    <td class="text-center">@if($ticket->priority == 1) ️⬆️up @elseif($ticket->priority == 2) ↔️middle @else ⬇️down @endif</td>
                    <td class="text-center">@if($ticket->status == 1) ⛔closed @else ❗pending response @endif</td>
                    <td class="text-center">{{$ticket->description}}</td>
                    <td class="text-center">@if($ticket->send_message == 1) yes @else no @endif</td>

                    <td class="text-center">
                        <a href="{{route('ticket.edit',['ticket'=>$ticket])}}" class="btn btn-info"><i class="fa fa-pencil"></i> UPDATE</a>
                        <a href="{{route('ticket.delete',['ticket'=>$ticket])}}" class="btn btn-danger"><i class="fa fa-trash-o"></i> DELETE</a>
                        <a href="{{route('message.index')}}" class="btn btn-success" onclick="openMessage(this);return false"><i CLASS="fa fa-eye"></i> SHOW</a>
                    </td>
                </tr>

                </tbody>
            @endforeach

        </table>

@endsection
