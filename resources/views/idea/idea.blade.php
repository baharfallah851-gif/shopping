<form method="post" action="{{route('idea.save', ['task' => $task])}}" id="idea-form">
    <input type="hidden" name="owner_id" value="0">
    @csrf
    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text">title</label>
            <input type="text" name="title" class="form-control" placeholder="title" value="{{$task->title}}" disabled>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text">solver</label>
            <select name="solver_id" class="form-control" disabled>
                @foreach($solvers as $solver)
                    <option value="{{$solver->id}}"
                            @if($solver->id == $task->solver_id) selected @endif>{{$solver->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text">customer</label>
            <select type="text" name="customer_id" class="form-control" disabled>
                @foreach($customers as $customer)
                    <option value="{{$customer->id}}"
                            @if($customer->id == $task->customer_id) selected @endif>{{$customer->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text">category</label>
            <select type="text" name="category_id" class="form-control" disabled>
                @foreach($categories as $category)
                    <option value="{{$category->id}}"
                            @if($category->id == $task->category_id) selected @endif>{{$category->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text">start time</label>
            <input type="datetime-local" name="start_time" class="form-control" placeholder="start time"
                   value="{{$task->start_time}}" disabled>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text">end time</label>
            <input type="datetime-local" name="end_time" class="form-control" placeholder="end time"
                   value="{{$task->end_time}}" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text">priority</label>
            <div id="priority" class="btn-group" data-toggle="buttons" style="margin: 10px">
                <label class="btn btn-default @if($task->priority == 1 ) active @endif" disabled>
                    <input type="radio" name="priority" value="1" @if($task->priority == 1 ) checked @endif>up⬆️
                </label>
                <label class="btn btn-default @if($task->priority == 2 ) active @endif" disabled>
                    <input type="radio" name="priority" value="2" @if($task->priority == 2 ) checked @endif>middle↔️
                </label>
                <label class="btn btn-default @if($task->priority == 3 ) active @endif" disabled>
                    <input type="radio" name="priority" value="3" @if($task->priority == 3 ) checked @endif>down⬇️
                </label>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text">status</label>
            <div id="priority" class="btn-group" data-toggle="buttons" style="margin: 5px">
                <label class="btn btn-default @if($task->status == 1 ) active @endif" disabled>
                    <input type="radio" name="status" value="1" @if($task->ststus == 1) checked @endif>closed⛔
                </label>
                <label class="btn btn-default @if($task->status == 2 ) active @endif" disabled>
                    <input type="radio" name="status" value="2" @if($task->status == 2) checked @endif>pending response❗
                </label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text">description</label>
            <textarea type="text" name="description" class="form-control"
                      placeholder="description" disabled>{{$task->description}}</textarea>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text">image</label>
            <input type="file" name="image" class="form-control" disabled>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <label style="margin: 20px">Would you like to receive an SMS when the support team responds to your ticket?
                <input type="checkbox" name="send_message" class="form-check-input" value="1"
                       @if($task->send_message == 1 ) checked @endif disabled>
            </label>
        </div>
    </div>

    <ul class="timeline" style="padding: 5px; background-color: #e9eaed; list-style: none;">
        @foreach($task->ideas()->orderBy('id')->get() as $idea)
            <li style="margin-bottom: 20px; position: relative;">
                <div class="row">
                    <!-- ستون سمت راست: آیکون -->
                    <div class="col-xs-1 text-center" style="padding-right: 0;">
                        <div
                            style="background-color: #e336cb; color: #ffffff; width: 40px; height: 40px; border-radius: 50%; line-height: 40px; margin: 0 auto; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                            <i class="fa fa-comments"></i>
                        </div>
                    </div>
                    <div class="col-xs-11" style="padding-right: 5px;">
                        <div class="timeline-item"
                             style="background: #fff; padding: 15px; border-radius: 5px; border-right: 4px solid #d081d3; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        {{$idea->owner?->name}}
                                        <small class="pull-left text-muted">
                                            <span
                                                style="margin:5px; font-size: 13px;">{{ $idea->created_at->format('Y-m-d H:i') }}</span>
                                            <i class="fa fa-clock-o left"
                                               style="margin-left:-10px; font-size: 13px;"></i>
                                        </small>
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    <p>{{$idea->comment}}</p>
                                </div>
                                <small class="pull-left text-muted">
                                    <button href="{{route('idea.delete',['idea'=>$idea])}}"
                                            onclick="deleteComment(this);return false"
                                            class="btn btn-danger"><i
                                            class="fa fa-trash-o"></i> DELETE
                                    </button>
                                </small>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>

    <div class="row">
        <div class="form-group col-md-12">
            <label class="input-group-text">new comment</label>
            <textarea type="text" rows="8" name="comment" class="form-control"
                      placeholder="comment"></textarea>
        </div>
    </div>

    <button class="btn btn-success">DONE</button>
</form>

<div id="myModal" class="modal fade" role="dialog">
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
    function deleteComment(el) {
        $.ajax({
            url: $(el).attr('href'),
            method: 'DELETE',
            data: {
                _token: '{{csrf_token()}}'          // = csrf
            },
            success: function (result) {
                $.ajax({
                    url: '{{route('idea.index', ['task'=>$task])}}',
                    success: function (result) {
                        $('.modal-body').html(result);
                    }
                })
            }
        })
    }
</script>


{{--<ul class="timeline" style="padding: 5px; background-color: #e9eaed; list-style: none;">--}}
{{--    @foreach($task->ideas as $idea)--}}
{{--        <li style="margin-bottom: 20px; position: relative;">--}}

{{--            <!-- استفاده از Row برای چیدمان افقی -->--}}
{{--            <div class="row">--}}

{{--                <!-- ستون سمت راست: آیکون -->--}}
{{--                <div class="col-xs-1 text-center" style="padding-right: 0;">--}}
{{--                    <div style="background-color: #f39c12; color: #fff; width: 40px; height: 40px; border-radius: 50%; line-height: 40px; margin: 0 auto; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">--}}
{{--                        <i class="fa fa-comments"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- ستون سمت چپ: محتوای پیام -->--}}
{{--                <div class="col-xs-11" style="padding-right: 5px;">--}}
{{--                    <div class="timeline-item" style="background: #fff; padding: 15px; border-radius: 5px; border-right: 4px solid #f39c12; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">--}}

{{--                        <!-- هدر: نام و تاریخ -->--}}
{{--                        <div style="border-bottom: 1px solid #eee; padding-bottom: 10px; margin-bottom: 10px; overflow: hidden;">--}}
{{--                            <h3 class="timeline-header" style="margin: 0; font-size: 16px; float: right;">--}}
{{--                                {{ $idea->owner->name }}--}}
{{--                            </h3>--}}
{{--                            <span class="time text-muted pull-left" style="font-size: 12px;">--}}
{{--                            <i class="fa fa-clock-o"></i> {{ $idea->created_at->format('Y-m-d H:i') }}--}}
{{--                        </span>--}}
{{--                        </div>--}}

{{--                        <!-- بدنه: متن پیام -->--}}
{{--                        <div class="timeline-body" style="font-size: 14px; color: #555;">--}}
{{--                            {!! $idea->comment !!}--}}
{{--                        </div>--}}

{{--                        <!-- دکمه حذف (اختیاری) -->--}}
{{--                        <div style="margin-top: 10px; text-align: left;">--}}
{{--                            <form action="{{ route('idea.delete', ['idea' => $idea]) }}" method="POST" style="display: inline;">--}}
{{--                                {{ csrf_field() }}--}}
{{--                                {{ method_field('DELETE') }}--}}
{{--                                <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('حذف شود؟');">--}}
{{--                                    <i class="fa fa-trash"></i> حذف--}}
{{--                                </button>--}}
{{--                            </form>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--    @endforeach--}}
{{--</ul>--}}




