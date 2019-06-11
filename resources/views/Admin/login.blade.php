<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sujon Super Shop Admin/User Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{asset('images/user.png')}}" rel="icon" type="image/x-icon"/>
    <link href="{{asset('images/user.png')}}" rel="shortcut icon" type="image/x-icon"/>
    <link rel="stylesheet" href="{{asset('css/Bootstrap/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/Bootstrap/bootstrap-responsive.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/Login/matrix-login.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/Font/font-awesome.css')}}"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <style type="text/css">
        .error {
            color: white;
        }
    </style>
</head>
<body style="background-color: rgba(220,247,255,0);">
<div id="loginbox">
    @if(Session::has('success_message'))
        <div class="alert alert-success">
            {{ Session::get('success_message') }}
        </div>
    @endif
    @if(Session::has('error_message'))
        <div class="alert alert-danger">
            {{ Session::get('error_message') }}
        </div>
    @endif
    <form class="form-vertical" action="{{route('AdminLoggedIn')}}" method="post">
        {{csrf_field()}}
        <div class="control-group normal_text"><h3><img src="{{asset('images/user.png')}}" height="100" width="100" alt="Logo"/></h3></div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lg"><i class="icon-user"></i></span>
                    <input type="text" name="username"  placeholder="Username"/>
                </div>
                <span class="error">
                    @if($errors->has('username'))
                        {{$errors->first('username')}}
                    @endif
                </span>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_ly"><i class="icon-lock"></i></span>
                    <input type="password" name="password" placeholder="Password"/>
                </div>
                <span class="error">
                    @if($errors->has('password'))
                        {{$errors->first('password')}}
                    @endif
                </span>
            </div>
        </div>
        <div class="form-actions">
            <span class="pull-left"><a href="#" class="flip-link btn btn-info">Lost password?</a></span>
            <span class="pull-right"><button type="submit" class="btn btn-success"> Login</button></span>
        </div>
    </form>
</div>
<script src="{{asset('js/Login/jquery.min.js')}}"></script>
<script src="{{asset('js/Login/matrix.login.js')}}"></script>
</body>
</html>
