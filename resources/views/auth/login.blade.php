@extends('layouts.master_authen')
@section('content')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(authen/images/bg-01.jpg);">
				
					<span class="login100-form-title-1">
						Sign In
					</span> 
				</div>
				
				<br><form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
					@csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="username" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">

						<div>
							<a href="{{ route('password.request') }}" class="txt1">
								Forgot Password?
							</a>
						</div>
						<div>
							<a href="{{route('register')}}" class="txt1">
								สมัครสมาชิกที่นี่
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
						
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection