@extends('layout.index')
@section('content')
<div class="home-section">
	<div class="dark-overlay">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					
				</div>
				<div class="col-md-4">
					<h3>Login to continue</h3>
					<form class="login-form" action="" method="">
						{{ csrf_field() }}
						<div class="form-group">
						    <input type="email" class="form-control" id="email" placeholder="Type your email address">
						</div>
						<div class="form-group">
						    <input type="password" class="form-control" id="password" placeholder="Type your password">
						</div>
						<div class="rem-for">
							<a href="#" class="pull-right">Forgot Password?</a>
						</div>
						<div class="submit-session">
						    <a href="/Profile_info" class="form-control" id="login" style="margin-top: 35px;">Login to continue</a>
						</div>
						<p class="text-center" style="padding-bottom: 5px;border-bottom: 1px solid #fff;">Or Sign in with</p>
						<div class="social-media">
							<a href="#"><i class="fa fa-facebook color1"></i></a>
							<a href="#"><i class="fa fa-linkedin color2"></i></a>
							<a href="#"><i class="fa fa-google-plus color3"></i></a>
						</div>
						<p class="login">Don't have an account?<a href="/" style="color: #fff;text-decoration: underline;"> SignUp</a></p>
					</form>
				</div>
				<div class="col-md-4">
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection