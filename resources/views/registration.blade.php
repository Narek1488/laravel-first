<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up</title>
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('css/registration.css')}}">
	<link rel="stylesheet" href="{{asset('css/fonts.css')}}">
</head>
<body>
	<div class="container">
		<div id="left-bunner">
			<img src="./img/coder.jpg" alt="left.jpg">
			<div class="cover"></div>
		</div>
		<div id="right-bunner">
			<h2 id="head">Registration</h2>
			
			<form action="{{ route('registration.create') }}" method="post">
		@csrf
			<div class="form-grup">
				<label for="name">Name</label>
				<input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Name...">
			</div>
			@error('name')
        <span class="invalid-feedback" role="alert">
  			  <strong>{{ $message }}</strong>
        </span>
    	@enderror

			<div class="form-grup">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" value="{{ old('email') }}"  placeholder="Email...">
			</div>
			@error('email')
             <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
      @enderror
			<!-- <div class="form-grup">
				<label for="username">Username</label>
				<input type="text" name="username" id="username" placeholder="Username...">
			</div> -->
			<div class="form-grup">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" placeholder="****************">
			</div>
			@error('password')
        	<span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
      @enderror
			<div class="form-grup">
				<label for="r-password">Repit Password</label>
				<input type="password" name="password_confirmation" id="r-password" placeholder="****************">
			</div>
			
			<!-- <div class="form-grup">
				<input type="checkbox" id="checkbox" name="remeber-me">
				<label for="checkbox">I agree to the Terms of User</label>
			</div> -->
			
			<div class="form-grup">
				<button type="submit">Sign Up</button> 
				<a href="/login">Log In <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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