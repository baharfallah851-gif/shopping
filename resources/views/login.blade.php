<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}">
    <link rel="icon" href="{{asset('build/images/my_image.ico')}}" type="image/ico"/>
    <title>SHOPPING MALL | BAHAR </title>

    <style>
        html, body {
            height: 100%;
            background-image: url("{{asset('/image.jpg')}}");
            background-size: cover;

        }

        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            max-width: 400px;
            padding: 25px;
            background: rgba(191, 191, 191, 0.7);
            border-radius: 6px;
            box-shadow: 0 0 15px rgba(18, 17, 17, 0.15);
        }
    </style>
</head>
<body>
    <div class="login-wrapper">
        <form id="login_Form" class="login-box" method="post" action="{{ route('login.save') }}">
            @csrf
            <h1 class="text-center">@lang('Login')</h1>

            <div class="form-group">
                <label>@lang('username')</label>
                <input type="text" name="username" class="form-control text-center" required>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
                <label class="input-group-text" >@lang('password')</label>
                <input type="password" name="password" class="form-control text-center" required>
            </div>
            <div class="form-group">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="remember" class="rounded text-indigo-600">
                    <span class="ml-2 text-sm">@lang('Remember Me')</span>
                </label>
            </div>

            <div class="clearfix"></div>
            <button class="btn btn-round btn-block" type="submit">@lang('Login')</button>
        </form>
    </div>
<script>
</script>

</body>
</html>









