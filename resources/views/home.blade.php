@extends('layout')
@section('content')
    <div class="">
        <h1 class="text-center shadow p-3 mb-2 bg-white ">💕STORE💕</h1>
    </div>



    <table class="table table-bordered">
        <tr class="text-center">
            <td><label>ADD</label></td>
            <td><label>LIST</label></td>
        </tr>
        <tr class="text-center">
            <th class="text-center">
                <a class="btn btn-dark" type="button" href="{{Route('customer.add')}}">ADD CUSTOMER</a><br><br>
                <a class="btn btn-info" type="button" href="{{Route('user.add')}}">ADD USER</a><br><br>
                <a class="btn btn-dark" type="button" href="{{Route('product.add')}}">ADD PRODUCT</a><br><br>
                <a class="btn btn-info" type="button" href="{{Route('brand.add')}}">ADD BRAND</a><br><br>
                <a class="btn btn-dark" type="button" href="{{Route('ticket.add')}}">ADD TICKET</a><br><br>
                <a class="btn btn-info" type="button" href="{{Route('type.add')}}">ADD TYPE</a><br><br>
                <a class="btn btn-dark" type="button" href="{{Route('category.add')}}">ADD CATEGORY</a><br><br>
                <a class="btn btn-info" type="button" href="{{Route('task.add')}}">ADD TASK</a><br><br>
            </th>
            <th class="text-center">
                <a class="btn btn-dark" type="button" href="{{Route('customer.index')}}">show list customer</a><br><br>
                <a class="btn btn-info" type="button" href="{{Route('user.index')}}">show list user</a><br><br>
                <a class="btn btn-dark" type="button" href="{{Route('product.index')}}">show list product</a><br><br>
                <a class="btn btn-info" type="button" href="{{Route('brand.index')}}">show list BRAND</a><br><br>
                <a class="btn btn-dark" type="button" href="{{Route('ticket.index')}}">show list TICKET</a><br><br>
                <a class="btn btn-info" type="button" href="{{Route('type.index')}}">show list TYPE</a><br><br>
                <a class="btn btn-dark" type="button" href="{{Route('category.index')}}">show list CATEGORY</a><br><br>
                <a class="btn btn-info" type="button" href="{{Route('task.index')}}">show list TASK</a><br><br>
            </th>
        </tr>

    </table>

    <div class="container-fluid mt-3">
    </div>
    <img class="img-container center-block" alt="Cinque Terre" width="304" height="236" src="{{asset('file/my_image.jpg')}}">
    <h4 class="text-center">Product buying and selling site</h4>

    <meta charset="UTF-8">
<script src="{{asset('file/bootstrap.bundle.min.js')}}"></script>
@endsection
