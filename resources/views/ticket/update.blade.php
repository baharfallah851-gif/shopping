@extends('layout')
@section('content')
    <form method="post" action="{{route('ticket.update',['ticket'=> $ticket])}}">
        @csrf
        <h1 class=" mt-5 mb-5">UPDATE TICKET</h1>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">title</label>
            <input name="title" placeholder="title" id="comment" class="form-control" value="{{$ticket->title}}">
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">type</label>
            <select name="type_id" id="comment" class="form-control">
                @foreach($types as $type)
                    <option  value="{{$type->id}}" @if($type->id == $ticket->type_id)selected @endif>{{$type->title}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">category</label>
            <select name="category_id" id="comment" class="form-control">
                @foreach($categories as $category)
                    <option value="{{$category->id}}" @if($category->id == $ticket->category_id)selected @endif>{{$category->title}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">priority</label>
            <input name="priority" id="comment" class="form-control" value="{{$ticket->priority}}">
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">status</label>
            <input name="status" id="comment" class="form-control" value="{{$ticket->status}}">
        </div>

        <div class="col-md-4 col-sm-1 col-xs-12 form-group">
            <label style="margin: 20px">Would you like to receive an SMS when the support team responds to your ticket?
                <input type="checkbox" @if($ticket->send_message == '1' )checked @endif name="send_message" class="form-check-input" value="1" style="margin-inline: 20px"></label>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label for="comment">description</label>
            <input name="description" placeholder="description" id="comment" class="form-control" value="{{$ticket->description}}">
        </div>

        <div class="clearfix"></div>
        <button class="btn btn-primary" type="submit" >UPDATE</button>


    </form>
@endsection
