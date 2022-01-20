<x-header/>

<body class="my-login-page">
	<section class="h-100 mt-4">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="card-wrapper col-md-4  align-self-center">
			
					<div class="cardx mt-5 ">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							<form method="POST" class="my-login-validation mt-5" autocomplete="off" action="{{ route('login') }}">
                                @csrf
								<div class="form-group">
									<label for="email">E-mail</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus placeholder="Enter email">
                                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
								</div>

								<div class="form-group">
									<label for="password">Password
										<a href="{{route('password.request')}}" class="float-right" style="padding-left: 6rem; color: var(--bolder-blue);">
											Forgot Password?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye placeholder="Enter password">
                                    <span class="text-danger">@error('password'){{ $message }}@enderror</span>
								</div>

							

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Login
									</button>
								</div>
								<div class="mt-4 text-center">
									Don't have an account? <a href="{{route('register')}}" style="color: var(--bolder-blue);">Create Account</a>
								</div>
							</form>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</section>
 <!-- ======= Footer ======= -->
<x-footer/>
