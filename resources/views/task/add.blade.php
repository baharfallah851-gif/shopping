@extends('layout')
@section('content')
    <form method="post" action="{{route('task.save')}}">
        <input type="hidden" name="owner_id" class="form-control">
        <h1 class="text-center">Add Task</h1>
        @csrf
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text">title</label>
                <input type="text" name="title" class="@error('title') is-invalid @enderror form-control"
                       placeholder="title">
                @error('title')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text">solver</label>
                <select type="text" name="solver_id" class="form-control">
                    @foreach($solvers as $solver)
                        <option value="{{$solver->id}}">{{$solver->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text">customer</label>
                <select type="text" name="customer_id" class="form-control">
                    @foreach($customers as $customer)
                        <option value="{{$customer->id}}">{{$customer->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text">category</label>
                <select type="text" name="category_id" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text">start time</label>
                <input type="datetime-local" name="start_time"
                       class="@error('start_time') is-invalid @enderror form-control" placeholder="start time">
                @error('start_time')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text">end time</label>
                <input type="datetime-local" name="end_time"
                       class="@error('end_time') is-invalid @enderror form-control" placeholder="end time">
                @error('end_time')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text">priority</label>
                <div id="priority" class="btn-group" data-toggle="buttons" style="margin: 20px">
                    <label class="btn btn-default" data-toggle-class="btn-primary"
                           data-toggle-passive-class="btn-default">
                        <input type="radio" name="priority" value="1">up⬆️
                    </label>
                    <label class="btn btn-default" data-toggle-class="btn-primary"
                           data-toggle-passive-class="btn-default">
                        <input type="radio" name="priority" value="2">middle↔️
                    </label>
                    <label class="btn btn-default" data-toggle-class="btn-primary"
                           data-toggle-passive-class="btn-default">
                        <input type="radio" name="priority" value="3">down⬇️
                    </label>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text">status</label>
                <div id="priority" class="btn-group" data-toggle="buttons" style="margin: 20px">
                    <label class="btn btn-default" data-toggle-class="btn-primary"
                           data-toggle-passive-class="btn-default">
                        <input type="radio" name="status" value="1">closed⛔
                    </label>
                    <label class="btn btn-default" data-toggle-class="btn-primary"
                           data-toggle-passive-class="btn-default">
                        <input type="radio" name="status" value="2">pending response❗
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text">description</label>
                <textarea type="text" name="description" class="@error('description') is-invalid @enderror form-control"
                          placeholder="description"></textarea>
                @error('description')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <label class="input-group-text">image</label>
                <input type="file" name="image" class="@error('image') is-invalid @enderror form-control"
                       placeholder="image">
                @error('image')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-1 col-xs-12 form-group">
                <label style="margin: 20px">Would you like to receive an SMS when the support team responds to your
                    ticket?
                    <input type="checkbox" name="send_message" class="form-check-input" value="1"
                           style="margin-inline: 20px">
                </label>
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Add Task</button>
    </form>
@endsection
