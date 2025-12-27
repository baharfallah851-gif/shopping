<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <style>
        html, body {
            height: 100%;
            background-image: url('/image.jpg');
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
            <h1 class="text-center">Login</h1>

            <div class="form-group">
                <label>username</label>
                <input type="text" name="username" class="form-control text-center" required>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
                <label class="input-group-text" >password</label>
                <input type="password" name="password" class="form-control text-center" required>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
                <label>
                    <input type="checkbox" name="remember" class="form-check-input" value="1">
                    remember me
                </label>
            </div>
            <div class="clearfix"></div>
            <button class="btn btn-round btn-block" type="submit">login</button>
        </form>
    </div>
<script>
</script>

</body>
</html>









