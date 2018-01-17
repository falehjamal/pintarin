<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{@asset('bootstrap/css/bootstrap.min.css')}}">
</head>
<style type="text/css">
  .fixed{
  background-color: #3498db;
  position: fixed;
  color: white;
  width: 100%;
  z-index: 999;
  /*
  box-shadow: 0 5px 5px #ccc;*/
}
.baken:hover{
  background-color: #2980b9;
  color:#fff;
  cursor: pointer;
}
</style>
<body>

<nav class="navbar navbar-light fixed" style="color: #fff;">
      <div class="container">
        <a class="navbar-brand" href="{{ url('home') }}" style="color: #fff;">Learn</a>
            <div class="pull-right">
                <a class="btn btn-default baken" href="{{ route('login') }}" style="color: #fff;" >Login</a>
                <a class="btn btn-default baken" href="{{ route('register') }}" style="color: #fff;">Daftar</a>
            </div>
      </div>
    </nav>

<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form" >

      <form class="form-signin" method="POST" action="{{ route('login') }}" role="login">
        {{ csrf_field() }}
          {{-- <img src="http://i.imgur.com/RcmcLv4.png" class="img-responsive" alt="" /> --}}

          <center><h2>Login</h2></center>
          <hr>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="password" class=" control-label">Email</label>

                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus autocomplete="off" placeholder="Email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class=" control-label">Password</label>

                           
                                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                </div>

                        <div class="form-group">

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                        </div>
          
          
          
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Masuk</button>
          <div>
            <a class="btn btn-default btn-block btn-lg" href="{{ url('/register') }}">Daftar Sekarang</a> 
          </div>

          </div>
          
        </form>
        

      </section>  
      </div>
      
      <div class="col-md-4"></div>
      

  </div>

  
  <!-- <p>
    <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fbootsnipp.com%2Fiframe%2FW00op" target="_blank"><small>HTML</small><sup>5</sup></a>
    <br>
    <br>
    
  </p>      -->
  
  
</div>

<style type="text/css">


/*
Reference:
http://www.bootstrapzen.com/item/135/simple-login-form-logo/
*/

* {
    -webkit-box-sizing: border-box;
	   -moz-box-sizing: border-box;
	        box-sizing: border-box;
	outline: none;
}

    .form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;

	}

body {
	background-color: #3498db;
}

.login-form {
	margin-top: 60px;
}

form[role=login] {
	color: #5d5d5d;
	background: #f2f2f2;
	padding: 26px;
}
	form[role=login] img {
		display: block;
		margin: 0 auto;
		margin-bottom: 35px;
	}
	form[role=login] input,
	form[role=login] button {
		font-size: 18px;
		margin: 16px 0;
	}
	form[role=login] > div {
		text-align: center;
	}
	
.form-links {

	margin-top: 1em;
	margin-bottom: 50px;
}
	.form-links a {
		color: #fff;
	}
	label{
		float: left;
	}
</style>
<script src="{{@asset('bootstrap/css/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script>
	$(document).ready(function(){
		$("#kidslogin").click(function(){

		});
	});
</script>
</body>
</html>