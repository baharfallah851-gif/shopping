@extends('layout')
@section('content')
    <form method="post" action="{{route('ticket.save')}}">
        <h1>ADD ticket</h1>
        @csrf
        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text" >title</label>
            <input type="text" name="title" class="form-control" placeholder="title" required>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text" >type</label>
            <select type="text" name="type_id" class="form-control">
                @foreach($types as $type)
                    <option value="{{$type->id}}">{{$type->title}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text" >category</label>
            <select type="text" name="category_id" class="form-control" required>
                @foreach($categories as $category)
                    <option value="{{$category->id}}" >{{$category->title}}</option>
                @endforeach
            </select>
        </div>


        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text" >priority</label>
            <div id="priority" class="btn-group" data-toggle="buttons" style="margin: 20px">
                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    <input type="radio" name="priority" value="1">up⬆️
                </label>
                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    <input type="radio" name="priority" value="2">middle↔️
                </label>
                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    <input type="radio" name="priority" value="3">down⬇️
                </label>
            </div>
        </div>


        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text" >status</label>
            <div id="priority" class="btn-group" data-toggle="buttons" style="margin: 20px">
                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    <input type="radio" name="status" value="1">closed⛔
                </label>
                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    <input type="radio" name="status" value="2">pending response❗
                </label>
            </div>
        </div>



        <div class="clearfix"></div>

        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <label class="input-group-text">description</label>
            <textarea type="text" name="description" class="form-control" placeholder="description" required></textarea>
        </div>

        <div class="col-md-4 col-sm-1 col-xs-12 form-group">
            <label style="margin: 20px">Would you like to receive an SMS when the support team responds to your ticket?
                <input type="checkbox" name="send_message" class="form-check-input" value="1" style="margin-inline: 20px">
            </label>
        </div>


        <div class="clearfix"></div>
        <button class="btn btn-primary" type="submit" >ADD</button>
    </form>
@endsection
