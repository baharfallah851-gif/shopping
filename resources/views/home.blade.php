@extends('layout')
@section('content')
    <div class="">
        <h1 class="text-center shadow p-5 mb-2 bg-white" style="margin-right: -100px">💕@lang('STORE')💕</h1>
    </div>



    <table class="table table-bordered">
        <tr class="text-center">
            <td><label>@lang('ADD')</label></td>
            <td><label>@lang('LIST')</label></td>
        </tr>
        <tr class="text-center">
            <th class="text-center">
                <a class="btn btn-dark" type="button" href="{{Route('customer.add')}}">@lang('ADD CUSTOMER')</a><br><br>
                <a class="btn btn-info" type="button" href="{{Route('user.add')}}">@lang('ADD USER')</a><br><br>
                <a class="btn btn-dark" type="button" href="{{Route('product.add')}}">@lang('ADD PRODUCT')</a><br><br>
                <a class="btn btn-info" type="button" href="{{Route('brand.add')}}">@lang('ADD BRAND')</a><br><br>
                <a class="btn btn-dark" type="button" href="{{Route('ticket.add')}}">@lang('ADD TICKET')</a><br><br>
                <a class="btn btn-info" type="button" href="{{Route('type.add')}}">@lang('ADD tickets TYPE')</a><br><br>
                <a class="btn btn-dark" type="button" href="{{Route('category.add')}}">@lang('ADD tickets CATEGORY')</a><br><br>
                <a class="btn btn-info" type="button" href="{{Route('task.add')}}">@lang('ADD TASK')</a><br><br>
            </th>
            <th class="text-center">
                <a class="btn btn-dark" type="button" href="{{Route('customer.index')}}">@lang('list customers')</a><br><br>
                <a class="btn btn-info" type="button" href="{{Route('user.index')}}">@lang('list users')</a><br><br>
                <a class="btn btn-dark" type="button" href="{{Route('product.index')}}">@lang('list products')</a><br><br>
                <a class="btn btn-info" type="button" href="{{Route('brand.index')}}">@lang('list brand')</a><br><br>
                <a class="btn btn-dark" type="button" href="{{Route('ticket.index')}}">@lang('list tickets')</a><br><br>
                <a class="btn btn-info" type="button" href="{{Route('type.index')}}">@lang('list tickets types')</a><br><br>
                <a class="btn btn-dark" type="button" href="{{Route('category.index')}}">@lang('list tickets categories')</a><br><br>
                <a class="btn btn-info" type="button" href="{{Route('task.index')}}">@lang('list tasks')</a><br><br>
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
