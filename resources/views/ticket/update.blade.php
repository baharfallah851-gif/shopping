@extends('layout')
@section('content')
    <form method="post" action="{{route('ticket.update',['ticket'=> $ticket])}}">
        @csrf
        <h1 class="text-center">Update Ticket</h1>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">title</label>
                <input name="title" placeholder="title" id="comment"
                       class="@error('title') is-invalid @enderror form-control" value="{{$ticket->title}}">
                @error('title')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">type</label>
                <select name="type_id" id="comment" class="form-control">
                    @foreach($types as $type)
                        <option value="{{$type->id}}"
                                @if($type->id == $ticket->type_id)selected @endif>{{$type->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">category</label>
                <select name="category_id" id="comment" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}"
                                @if($category->id == $ticket->category_id)selected @endif>{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label for="comment">description</label>
                <textarea name="description" placeholder="description" id="comment"
                          class="@error('description') is-invalid @enderror form-control">{{$ticket->description}}</textarea>
                @error('description')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text">priority</label>
                <div id="priority" class="btn-group" data-toggle="buttons" style="margin: 20px">
                    <label class="btn btn-default @if($ticket->priority == 1) active @endif">
                        <input type="radio" name="priority" value="1" @if($ticket->priority == 1) checked @endif>up⬆️
                    </label>
                    <label class="btn btn-default @if($ticket->priority == 2)active @endif"
                           data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="priority" value="2" @if($ticket->priority == 2) checked @endif>middle↔️
                    </label>
                    <label class="btn btn-default @if($ticket->priority == 3)active @endif"
                           data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="priority" value="3" @if($ticket->priority == 3) checked @endif>down⬇️
                    </label>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text">status</label>
                <div id="priority" class="btn-group" data-toggle="buttons" style="margin: 20px">
                    <label class="btn btn-default @if($ticket->status == 1)active @endif"
                           data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="status" value="1" @if($ticket->status == 1)checked @endif>closed⛔
                    </label>
                    <label class="btn btn-default @if($ticket->status == 2)active @endif"
                           data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="status" value="2" @if($ticket->status)checked @endif>pending response❗
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-1 col-xs-12 form-group">
                <label style="margin: 20px">Would you like to receive an SMS when the support team responds to your
                    ticket?
                    <input type="checkbox" @if($ticket->send_message == '1' ) checked @endif name="send_message"
                           class="form-check-input" value="1"></label>
            </div>
        </div>

        <button class="btn btn-info" type="submit">Update Ticket</button>
    </form>
@endsection
