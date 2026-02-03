@extends('layout')
@section('content')
    <div class="form-floating mb-3 mt-3">
        <a class="btn btn-app" href="{{Route('task.add')}}">
            <i class="fa fa-edit"></i> ADD
        </a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center">id</th>
                <th class="text-center">title</th>
                <th class="text-center">solver</th>
                <th class="text-center">owner</th>
                <th class="text-center">customer</th>
                <th class="text-center">category</th>
                <th class="text-center">start time</th>
                <th class="text-center">end time</th>
                <th class="text-center">priority</th>
                <th class="text-center">status</th>
                <th class="text-center">send message</th>
                <th class="text-center">description</th>
                <th class="text-center">image</th>
                <th class="text-center">last comment</th>
                <th class="text-center">OPTION</th>
            </tr>
            </thead>
            @csrf
            @foreach($tasks as $task)
                <tbody>
                <tr class="table table-striped text-center">
                    <td>{{$task->id}}</td>
                    <td>{{$task->title}}</td>
                    <td>{{$task->solver->name}}</td>
                    <td>{{$task->owner->name}}</td>
                    <td>{{$task->customer->name}}</td>
                    <td>{{$task->category->title}}</td>
                    <td>{{$task->start_time}}</td>
                    <td>{{$task->end_time}}</td>
                    <td>@if($task->priority == 1)
                            ️⬆️up
                        @elseif($task->priority == 2)
                            ↔️middle
                        @else
                            ⬇️down
                        @endif</td>
                    <td>@if($task->status == 1)
                            ⛔closed
                        @else
                            ❗pending response
                        @endif</td>
                    <td>@if($task->send_message == 1)
                            yes
                        @else
                            no
                        @endif</td>
                    <td>{{$task->description}}</td>
                    <td>{{$task->image}}</td>
                    <td>{{@$task->ideas()->orderBy('id', 'desc')->first()->comment}}</td> {{--   نشاندهنده comment    --}}
                    <td>
                        <a href="{{route('idea.index',['task'=>$task])}}" onclick="openIdea(this);return false"
                           class="btn btn-success"><i class="fa fa-tasks"></i> IDEAS</a>
                        <a href="{{route('task.edit',['task'=>$task])}}" class="btn btn-info"><i
                                class="fa fa-pencil"></i> UPDATE</a>
                        <div class="clearfix"></div>
                        <a href="{{route('task.delete',['task'=>$task])}}" class="btn btn-danger"><i
                                class="fa fa-trash-o"></i> DELETE</a>
                    </td>
                </tr>

                </tbody>
            @endforeach
        </table>

        <div id="ideaModal" class="modal fade" role="dialog">
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
            function openIdea(el) {
                $.ajax({
                    url: $(el).attr('href'),
                    method: 'GET',
                    success(result) {
                        $('.modal-body').html(result)
                        $('#ideaModal').modal('toggle')
                    }
                })
            }
        </script>

@endsection
