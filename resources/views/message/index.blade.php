<form method="post" action="{{route('message.save',['ticket'=> $ticket])}}">
    <input type="hidden" name="ticket_id" value="{{$ticket->id}}">
    @csrf
    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">title</label>
            <input name="title" placeholder="title" id="comment" class="form-control" value="{{$ticket->title}}" disabled>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">type</label>
            <select name="type_id" id="comment" class="form-control" disabled>
                @foreach($types as $type)
                    <option value="{{$type->id}}"
                            @if($type->id == $ticket->type_id)selected @endif>{{$type->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">category</label>
            <select name="category_id" id="comment" class="form-control" disabled>
                @foreach($categories as $category)
                    <option value="{{$category->id}}"
                            @if($category->id == $ticket->category_id)selected @endif>{{$category->title}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text">priority</label>
            <div id="priority" class="btn-group" data-toggle="buttons" style="margin: 10px">
                <label class="btn btn-default @if($ticket->priority == 1) active @endif" disabled>
                    <input type="radio" name="priority" value="1" @if($ticket->priority == 1) checked @endif>up⬆️
                </label>
                <label class="btn btn-default @if($ticket->priority == 2)active @endif" data-toggle-class="btn-primary"
                       data-toggle-passive-class="btn-default" disabled>
                    <input type="radio" name="priority" value="2" @if($ticket->priority == 2) checked @endif>middle↔️
                </label>
                <label class="btn btn-default @if($ticket->priority == 3)active @endif" data-toggle-class="btn-primary"
                       data-toggle-passive-class="btn-default" disabled>
                    <input type="radio" name="priority" value="3" @if($ticket->priority == 3) checked @endif>down⬇️
                </label>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text">status</label>
            <div id="priority" class="btn-group" data-toggle="buttons" style="margin: 5px">
                <label class="btn btn-default @if($ticket->status == 1)active @endif" data-toggle-class="btn-primary"
                       data-toggle-passive-class="btn-default" disabled="">
                    <input type="radio" name="status" value="1" @if($ticket->status == 1) checked @endif>closed⛔
                </label>
                <label class="btn btn-default @if($ticket->status == 2)active @endif" data-toggle-class="btn-primary"
                       data-toggle-passive-class="btn-default" disabled="">
                    <input type="radio" name="status" value="2" @if($ticket->status) checked @endif>pending response❗
                </label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">description</label>
            <textarea name="description" placeholder="description" id="comment"
                      class="form-control" disabled>{{$ticket->description}}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <label style="margin: 20px">Would you like to receive an SMS when the support team responds to your ticket?
                <input type="checkbox" @if($ticket->send_message == '1' ) checked @endif name="send_message"
                       class="form-check-input" value="1" style="margin-inline: 20px" disabled></label>
        </div>
    </div>

    <ul class="timeline" style="padding: 5px; background-color: #e9eaed; list-style: none;">
        @foreach($ticket->messages()->orderBy('id')->get() as $message)
            <li style="margin-bottom: 20px; position: relative;">
                <div class="row">
                    <!-- ستون سمت راست: آیکون -->
                    <div class="col-xs-1 text-center" style="padding-right: 0;">
                        <div
                            style="background-color: #45a542; color: #fff; width: 40px; height: 40px; border-radius: 50%; line-height: 40px; margin: 0 auto; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                            <i class="fa fa-comments"></i>
                        </div>
                    </div>
                    <div class="col-xs-11" style="padding-right: 5px;">
                        <div class="timeline-item"
                             style="background: #fff; padding: 15px; border-radius: 5px; border-right: 4px solid #117004; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        {{$message->user?->name}}
                                        <small class="pull-left text-muted">
                                            <span
                                                style="margin:5px; font-size: 13px;">{{ $message->created_at->format('Y-m-d H:i') }}</span>
                                            <i class="fa fa-clock-o left"
                                               style="margin-left:-10px; font-size: 13px;"></i>
                                        </small>
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    <p>{{$message->content}}</p>
                                </div>
                                <small class="pull-left text-muted">
                                    <button href="{{route('message.delete',['message'=>$message])}}"
                                            onclick="deleteContent(this);return false"
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
            <label class="input-group-text">new message</label>
            <textarea type="text" rows="8" name="content" class="form-control" placeholder="message"></textarea>
        </div>
    </div>

    <button class="btn btn-success" type="submit">Done</button>
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
    function deleteContent(el){
        $.ajax({
            url: $(el).attr('href'),
            method: 'DELETE',
            data: {
                _token: '{{csrf_token()}}'
            },
            success: function (result) {
                $.ajax({
                    url: '{{route('message.index', ['ticket' => $ticket])}}',
                    success: function (result) {
                        $('.modal-body').html(result)
                    }
                })
            }
        })
    }
</script>

