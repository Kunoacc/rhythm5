<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Admin Login</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/now-ui-kit.css?v=1.1.0')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.2/noty.min.css" />
</head>

<body class="login-page">
<!-- End Navbar -->
<div class="page-header" filter-color="blue">
    <div class="page-header-image" style="background-image:url(/images/login.jpg)"></div>
    <div class="container">
        <div class="col-md-4 content-center">
            <div class="card card-login card-plain">
                <form class="form" method="post" action="{{route('login')}}" id="loginForm">
                    {{csrf_field()}}
                    <div class="header header-primary text-center">
                        <div class="container">
                            <h4 class="text-uppercase">admin login</h4>
                        </div>
                    </div>
                    <div class="content">
                        <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                            <input type="text" class="form-control" placeholder="Email" name="email" id="email">
                        </div>
                        <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons text_caps-small"></i>
                                </span>
                            <input type="password" placeholder="Password" class="form-control" name="password" id="password" />
                        </div>
                    </div>
                    <div class="footer text-center">
                        <a href="javascript:" id="login" class="btn btn-info btn-round btn-lg btn-block">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
<!--   Core JS Files   -->
<script src="{{asset('js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{asset('js/plugins/bootstrap-switch.js')}}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="{{asset('js/plugins/bootstrap-datepicker.js')}}" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="{{asset('js/now-ui-kit.js?v=1.1.0')}}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.2/noty.min.js"></script>

<script>
    $(document).ready(() => {
        $('#login').click((e) => {
            if ($('#email').val() === "" || $('#password').val() === ""){
                e.preventDefault();
                return new Noty({
                    type: 'warning',
                    text: 'All fields are required',
                    timeout: 2000
                }).show();
            } else {
                $.ajax({
                    type: 'POST',
                    url: '{{route('login')}}',
                    data: {
                        '_token': '{{csrf_token()}}',
                        'username': $('#email').val(),
                        'password': $('#password').val()
                    },
                    beforeSend: () => {
                        $('#login').html('<i class="now-ui-icons loader_refresh spin"></i>');
                        $('#login').addClass('disabled');
                    },
                    success: () => {
                        $('#login').html('Success!');
                        new Noty({
                            type: 'success',
                            text: 'logged in successfully, redirecting...',
                            timeout: 2000
                        }).show();
                        setTimeout(() => window.location.href = '{{route('adminHome')}}', 3000);
                    },
                    error: () => {
                        new Noty({
                            type: 'error',
                            text: 'whoops... something went wrong',
                            timeout: 2000
                        }).show();
                        $('#login').html('Login');
                        $('#login').removeClass('disabled');
                    }
                })
            }
        });

        @if($message = session('error'))
        new Noty({
            type: 'error',
            text: '{{$message}}',
            timeout: 2000
        }).show();
        @endif
    });
</script>

</html>