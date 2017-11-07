<!DOCTYPE html>
<html>

<head>
    <title>Tournapps</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url('src/css/modules.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('src/css/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('src/plugin/font-awesome-4.7.0/css/font-awesome.min.css') }}">
</head>

<body  id='login'>
    <div class="tournapps">
        <div class="container" >
            <div class="row page-wrapper">
                <div class="col-sm-12 col-md-12 wrapper-login">
                        <img src="{{ asset('src/image/logo-login-page.png') }}" >
                        <h1 >Sign in to tournapps portal</h1>
                        @if(\Request::has('message'))
                                <span>Error email or password</span>
                            @endif   
                        <div class="view-error">
                            <img class="error-image" width="50" height="50" src="{{ asset('src/image/error-icon.png') }}">
                            <span class="error-message"></span>
                        </div>
                        <div class="form-login">
                            <form class="form-horizontal" id="login-form" role="form">
                                <div class="form-group row">
                                    <label for="club-name" class="col-sm-4 col-md-4 col-lg-4 control-label text-left">Email Address:</label>
                                    <div class="col-sm-8 col-md-8 col-lg-8">
                                        <input type="text" name="email" class="form-control" id="email-login" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="club-name" class="col-sm-4 col-md-4 col-lg-4 control-label text-left">Password:</label>
                                    <div class="col-sm-8 col-md-8 col-lg-8">
                                        <input type="Password" name="password" class="form-control" id="pass-login" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <button type="submit" id="bt-submit-login" class="btn-green" class="col-sm-12 col-md-12 col-lg-12" ><i class="fa fa-spinner fa-spin hidden"></i> Sign in </button>
                                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                                    <a href="#" class="col-sm-12 col-md-12 col-lg-12">Forgot password ?</a>
                                </div>
                                
                            </form>
                        </div>
                </div>
            </div>
            <div class="footer"><p>By signing in, you agree to the <a>Terms of Service</a></p></div>
        </div>
    </div>
</body>
<script type="text/javascript" src="{{ url('src/js/all.js') }}"></script>
<script type="text/javascript" src="{{ url('src/js/jquery.validate.min.js') }}"></script>
</body>

</html>
