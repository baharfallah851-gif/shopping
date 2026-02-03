@extends('layout')
@section('content')
    <div class="form-floating mb-3 mt-3">
        <a class="btn btn-app" href="{{Route('ticket.add')}}">
            <i class="fa fa-edit"></i> ADD
        </a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center">id</th>
                <th class="text-center">title</th>
                <th class="text-center">type</th>
                <th class="text-center">category</th>
                <th class="text-center">priority</th>
                <th class="text-center">status</th>
                <th class="text-center">description</th>
                <th class="text-center">send message</th>
                <th class="text-center">date recorded</th>

                <th class="text-center">OPTION</th>
            </tr>
            </thead>
            @csrf
            @foreach($tickets as $ticket)
                <tbody>
                <tr class="table table-striped">
                    <td class="text-center">{{$ticket->id}}</td>
                    <td class="text-center">{{$ticket->title}}</td>
                    <td class="text-center">{{$ticket->type?->title}}</td>
                    <td class="text-center">{{$ticket->category?->title}}</td>
                    <td class="text-center">@if($ticket->priority == 1)
                            ️⬆️up
                        @elseif($ticket->priority == 2)
                            ↔️middle
                        @elseif($ticket->priority == 3)
                            ⬇️down
                        @endif</td>
                    <td class="text-center">@if($ticket->status == 1)
                            ⛔closed
                        @else
                            ❗pending response
                        @endif</td>
                    <td class="text-center">{{$ticket->description}}</td>
                    <td class="text-center">@if($ticket->send_message == 1)
                            yes
                        @else
                            no
                        @endif</td>
                    <td class="text-center">{{$ticket->created_at}}</td>
                    <td class="text-center">
                        <a href="{{route('message.index', ['ticket'=>$ticket])}}" class="btn btn-success"
                           onclick="openMessage(this);return false"><i CLASS="fa fa-eye"></i> SHOW</a>
                        <div class="clearfix"></div>
                        <a href="{{route('ticket.edit',['ticket'=>$ticket])}}" class="btn btn-info"><i
                                class="fa fa-pencil"></i> UPDATE</a>
                        <a href="{{route('ticket.delete',['ticket'=>$ticket])}}" class="btn btn-danger"><i
                                class="fa fa-trash-o"></i> DELETE</a>

                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>

        <div id="messageModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close m-0" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>

                    <div class="modal-body">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

        <script>
            function openMessage(el){
                $.ajax({
                    url: $(el).attr('href'),
                    method: 'GET',
                    success(result) {
                        $('.modal-body ').html(result)
                        $('#messageModal').modal('toggle')
                    }
                })
            }
        </script>
@endsection


                    {{-- برای اجازه پرسیدن --}}

{{--<div id="ideaModal" class="modal fade" role="dialog">--}}
{{--            <div class="modal-dialog modal-dialog-centered modal-sm">--}}
{{--                <div class="modal-content border-0 rounded-4 shadow text-center p-3">--}}

{{--                    <div class="modal-body">--}}
{{--                        <!-- آیکون هشدار -->--}}
{{--                        <div class="text-danger mb-3">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">--}}
{{--                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>--}}
{{--                            </svg>--}}
{{--                        </div>--}}
{{--                        <h5 class="fw-bold mb-2">آیا مطمئن هستید؟</h5>--}}
{{--                        <p class="text-muted small">این عملیات قابل بازگشت نیست. لطفاً با دقت تصمیم بگیرید.</p>--}}
{{--                    </div>--}}

{{--                    <div class="modal-footer border-0 justify-content-center pb-4">--}}
{{--                        <button type="button" class="btn btn-light rounded-pill px-4" data-dismiss="modal">خیر، پشیمان شدم</button>--}}
{{--                        <button type="button" class="btn btn-danger rounded-pill px-4 shadow-sm">بله، حذف کن</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

