@extends('frontend.layouts.wrapper')
@section('title', 'Football Soical')
@section('body')
<!-- Header Standard Landing  -->

<div class="header--standard header--standard-landing" id="header--standard">
	<div class="container">
		<div class="header--standard-wrap">

			<a href="#" class="logo">
				<div class="img-wrap">
					<!-- <img src="img/logo.png" alt="Olympus">
					<img src="img/logo-colored-small.png" alt="Olympus" class="logo-colored"> -->
                    <h3>FSN</h3>
				</div>
				<div class="title-block">
					<h6 class="logo-title">Football</h6>
					<div class="sub-title">SOCIAL NETWORK</div>
				</div>
			</a>

			<a href="#" class="open-responsive-menu js-open-responsive-menu">
				<svg class="olymp-menu-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
			</a>

			
		</div>
	</div>
</div>

<!-- ... end Header Standard Landing  -->
<div class="header-spacer--standard"></div>

<div class="container">
	<div class="row display-flex">
		<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
			<div class="landing-content">
				<h1>Welcome to the most Football Social Platform</h1>
				<p> Are you are Die Hard Football Fans? Did you want to know more about Different Players of your choice?
                    Then this platform is the best Football social network tin the world. About 5 Billion Fans have registerd with us!!! 
                
				</p>
				<a href="#" class="btn btn-md btn-border  c-white">Register Now!</a>
			</div>
		</div>

		<div class="col col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">
			
			<!-- Login-Registration Form  -->
			
			<div class="registration-login-form">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#home" role="tab"><p class="register_icon">Register</p>
							<svg class="olymp-login-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-login-icon')}}"></use></svg>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#profile" role="tab"> <p class="register_icon">Login</p>
							<svg class="olymp-register-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-register-icon"></use></svg>
						</a>
					</li>
				</ul>
			
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
						<div class="title h6 text-center"> <i class="fa fa-user"> </i> Create Fans Account</div>
						<form class="content">
							<div class="row">
								<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="form-group label-floating">
										<label class="control-label">First Name</label>
										<input class="form-control" placeholder="" type="text" required>
									</div>
								</div>
								<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="form-group label-floating">
										<label class="control-label">Other Name</label>
										<input class="form-control" placeholder="" type="text" required>
									</div>
								</div>
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating">
										<label class="control-label">Your Email</label>
										<input class="form-control" placeholder="" type="email" required>
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Your Password</label>
										<input class="form-control" placeholder="" type="password" required>
									</div>
			
									<div class="form-group date-time-picker label-floating">
										<label class="control-label">Mobile Number</label>
										<input name="phoneNumber" value="" type="number" required />
									</div>
			
									<div class="form-group label-floating is-select">
										<label class="control-label">Your Gender</label>
										<select class="selectpicker form-control" required>
                                            <option value="">Select your Gender</option>
											<option value="MALE">Male</option>
											<option value="FEMALE">Female</option>
										</select>
									</div>
									<div class="form-group label-floating is-select">
										<label class="control-label">Registeration type</label>
										<select class="selectpicker form-control" required>
                                            <option value="">Select registration type</option>
											<option value="Fans">Fans</option>
											<option value="Player">Player</option>
											<option value="Coach">Coach</option>
											<option value="Manager">Manager</option>
										</select>
									</div>
			
									<div class="remember">
										<div class="checkbox">
											<label>
												<input name="optionsCheckboxes" type="checkbox" required>
												I accept the <a href="#">Terms and Conditions</a> of the website
											</label>
										</div>
									</div>
			
									<a href="#" class="btn bg-facebook btn-lg full-width">Create Account</a>
								</div>
							</div>
						</form>
					</div>
			
					<div class="tab-pane" id="profile" role="tabpanel" data-mh="log-tab">
						<div class="title h6 text-center"> <i class="fa fa-lock"> </i> Login to your Account</div>
						<form class="content">
							<div class="row">
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating">
										<label class="control-label">Your Email</label>
										<input class="form-control" placeholder="" type="email">
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Your Password</label>
										<input class="form-control" placeholder="" type="password">
									</div>
			
									<div class="remember">
			
										<div class="checkbox">
											<label>
												<input name="optionsCheckboxes" type="checkbox">
												Remember Me
											</label>
										</div>
										<a href="#" class="forgot" data-toggle="modal" data-target="#restore-password">Forgot my Password</a>
									</div>
			
									<a href="#" class="btn btn-lg btn-primary full-width">Login</a>
			
									<div class="or"></div>
			
									<a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fab fa-facebook-f" aria-hidden="true"></i>Login with Facebook</a>
			
									<a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fab fa-twitter" aria-hidden="true"></i>Login with Twitter</a>
			
			
									<p>Don’t you have an account? <a href="#">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			<!-- ... end Login-Registration Form  -->		</div>
	</div>
</div>
@endsection
