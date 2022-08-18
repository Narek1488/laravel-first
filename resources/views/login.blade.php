<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Log In</title>
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('css/fonts.css')}}">
	<link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
	<div class="container">
		<div id="left-bunner" class="left" >
			<img src="./img/coder.jpg" alt="left.jpg">
			<div class="cover"></div>
		</div>
		<div id="right-bunner" class="right">
			<div class="cover"></div>
			<h2 id="head">Log In</h2>

		<form action="{{ route('login') }}" method="post" >
		@csrf
			<div class="form-grup">
				<label for="email">Email</label><br>
				<input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" >
				@error('email')
             <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
        @enderror
			</div>
			<div class="form-grup">
				<label for="password">Password</label><br>
				<input type="password" id="password" name="password" placeholder="Password">
				@error('password')
        	<span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
			</div>
			<div class="form-grup">
				<input type="checkbox" id="checkbox" name="remember_me">
				<label for="checkbox">Remember Me</label>
			</div>			
			<div class="form-grup">
				<button type="submit">Log In</button>
				<a href="/registration">Sign Up <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
			</div>
		</form>

			<div id="form-foot">
				<i id="foot-icons" class="fa fa-google fa-2x" aria-hidden="true"></i>
				<i id="foot-icons" class="fa fa-instagram fa-2x" aria-hidden="true"></i>
				<i id="foot-icons" class="fa fa-facebook-official fa-2x" aria-hidden="true"></i>
			</div>
		</div>
	</div>
	
</body>
</html>