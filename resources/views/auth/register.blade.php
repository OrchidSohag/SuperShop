@extends('Master')

@section('css')
<link href="css/Login/login.css" rel='stylesheet' type='text/css' media="all" />
<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
@endsection

@section('body')
<div class="wrapper">
    <div class="form-w3ls">
        <div class="form-head-w3l">
            <h2>W</h2>
        </div>
        <div class="tab-content">
            <div id="signup-agile">   
                    <form action="#" method="post">
                        @csrf
                        <p class="headerr">User Name</p>
                        <p>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </p>
                        <input type="text" name="name" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Your Full Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Full Name';}" required="required" value="{{ old('name') }}">
                        <p class="headerr">Email Address</p>
                        <p>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </p>
                        <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="required">
                        <p class="headerr">Password</p>
                        <p>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </p>
                        <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="required">

                        <p class="headerr">Confirm Password</p>
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required="required">
                        
                        <input type="submit" class="register" value="Sign up">
                    </form>
                </div> 
        </div>
    </div>
</div>
@endsection