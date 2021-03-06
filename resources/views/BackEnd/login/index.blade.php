<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('BackEnd/dist/css/adminlte.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('BackEnd/plugins/iCheck/square/blue.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    {{--Toastr--}}

    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
</head>
<body class="hold-transition login-page">

<div class="login-box">
    <div class="login-logo">
        <h1>Portfolio <h4>Admin Login</h4></h1>
        <a href="{{route('fe-home')}}"><strong><u>Go To Home</u></strong></a>


    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Log In To Your Account</p>
            @if(count($errors)>0)
                @foreach($errors->all() as $error)
                    {{Session::flash('Error',$error)}}
                @endforeach
            @endif

            <form action="{{route('admin-login')}}" method="post" autocomplete="on" >

                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                    <span class="fa fa-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <span class="fa fa-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember" value="1"> Remember Me
                            </label>
                        </div>
                    </div>
                {{csrf_field()}}
                <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            {{--<div class="social-auth-links text-center mb-3">--}}
            {{--<p>- OR -</p>--}}
            {{--<a href="#" class="btn btn-block btn-primary">--}}
            {{--<i class="fa fa-facebook mr-2"></i> Sign in using Facebook--}}
            {{--</a>--}}
            {{--<a href="#" class="btn btn-block btn-danger">--}}
            {{--<i class="fa fa-google-plus mr-2"></i> Sign in using Google+--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--<!-- /.social-auth-links -->--}}

            {{--<p class="mb-1">--}}
            {{--<a href="#">I forgot my password</a>--}}
            {{--</p>--}}
            {{--<p class="mb-0">--}}
            {{--<a href="register.html" class="text-center">Register a new membership</a>--}}
            {{--</p>--}}
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('BackEnd/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('BackEnd/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

{{--Toastr--}}
<script src="{{asset('js/toastr.min.js')}}"></script>
<script>
    @if(Session::has('success'))
    toastr.success("{{Session::get('success')}}")

    @endif



    @if(Session::has('delete'))
    toastr.info("{{Session::get('delete')}}")
    }
    @endif

    @if(Session::has('Error'))
    toastr.error("{{Session::get('Error')}}")

    @endif

</script>

<!-- iCheck -->
<script src="{{asset('BackEnd/plugins/iCheck/icheck.min.js')}}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        })
    })
</script>
</body>
</html>
