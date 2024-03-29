<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('images/user.png')}}" rel="icon" type="image/x-icon"/>
    <link href="{{asset('images/user.png')}}" rel="shortcut icon" type="image/x-icon"/>
    <title>Sujon Super Shop Admin Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{asset('css/Bootstrap/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/Bootstrap/bootstrap-responsive.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/Login/matrix-login.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/Font/font-awesome.css')}}"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <style type="text/css">
        .error{
            color: white;
        }
    </style>
    <meta charset="UTF-8"/>
</head>
<body style="background-color: #ffffff;">
<div id="loginbox">
    <form class="form-vertical" action="{{route('AdminEnrolled')}}" method="post">
        {{csrf_field()}}
        <div class="control-group normal_text"><h3><img src="{{asset('images/user.png')}}" height="100px" width="100px" alt="Logo"/></h3></div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lg"><i class="icon-user"></i></span>
                    <input type="text" name="name" placeholder="Full Name"/>
                </div>
                <span class="error">
                    @if($errors->has('name'))
                        {{$errors->first('name')}}
                    @endif
                </span>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lg"><i class="icon-envelope"></i></span>
                    <input type="email" name="email" placeholder="Email"/>
                </div>
                <span class="error">
                    @if($errors->has('email'))
                        {{$errors->first('email')}}
                    @endif
                </span>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lg"><i class="icon-user"></i></span>
                    <input type="text" name="username" placeholder="Username"/>
                </div>
                <span class="error">
                    @if($errors->has('username'))
                        {{$errors->first('username')}}
                    @endif
                </span>
            </div>
        </div>
        {{--<div class="control-group">--}}
            {{--<div class="controls">--}}
                {{--<div class="main_input_box">--}}
                    {{--<span class="add-on bg_lg"><i class="icon-user"></i></span>--}}
                    {{--<select class="form-control" id="role_id" name="role" style="height: 38px; width: 300px">--}}
                        {{--<option value="">Select Role</option>--}}
                        {{--@foreach($role as $m)--}}
                            {{--<option value="{{$m->id}}">{{$m->name}}</option>--}}
                        {{--@endforeach--}}
                    {{--</select>--}}
                {{--</div>--}}
                {{--<span class="error">--}}
                    {{--@if($errors->has('role'))--}}
                        {{--{{$errors->first('role')}}--}}
                    {{--@endif--}}
                {{--</span>--}}
            {{--</div>--}}
        {{--</div>--}}
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
            <span class="pull-left"><a href="{{route('InventoryEntrance')}}" class="flip-link btn btn-info">Back </a></span>
            <span class="pull-right"><button type="submit" name="btnSave" class="btn btn-success"> Register</button></span>
        </div>
    </form>
</div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/Login/matrix.login.js')}}"></script>
</body>
</html>
