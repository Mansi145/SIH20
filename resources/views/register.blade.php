@extends('layouts.dashboard')
@section('css')
<style>

	html,
	body,
	header,
	.view {
		height: 100%;
	}

	@media (min-width: 851px) and (max-width: 1440px) {
		html,
		body,
		header,
		.view {
			height: 850px;
		}
	}

	@media (min-width: 800px) and (max-width: 850px) {
		html,
		body,
		header,
		.view {
			height: 1000px;
		}
	}

	@media (min-width: 451px) and (max-width: 740px) {
		html,
		body,
		header,
		.view {
			height: 1200px;
		}
	}

	@media (max-width: 450px) {
		html,
		body,
		header,
		.view {
			height: 1400px;
		}
	}

	.intro-2 {
		background: url("https://mdbootstrap.com/img/Photos/Others/forest1.jpg")no-repeat center center;
		background-size: cover;
	}

	.top-nav-collapse {
		background-color: #3f51b5 !important;
	}

	.navbar:not(.top-nav-collapse) {
		background: transparent !important;
	}

	@media (max-width: 768px) {
		.navbar:not(.top-nav-collapse) {
			background: #3f51b5 !important;
		}
	}
	@media (min-width: 800px) and (max-width: 850px) {
		.navbar:not(.top-nav-collapse) {
			background: #3f51b5!important;
		}
	}

	.rgba-gradient {
		background: -webkit-linear-gradient(98deg, rgba(22, 91, 231, 0.5), rgba(255, 32, 32, 0.5) 100%);
		background: -webkit-gradient(linear, 98deg, from(rgba(22, 91, 231, 0.5)), to(rgba(255, 32, 32, 0.5)));
		background: linear-gradient(to 98deg, rgba(22, 91, 231, 0.5), rgba(255, 32, 32, 0.5) 100%);
	}

	.card {
		background-color: rgba(255, 255, 255, 0.85);
	}

	h6 {
		line-height: 1.7;
	}
</style>
@endsection
@section('content')
<!--Intro Section-->
<section class="view intro-2">
	<div class="mask rgba-gradient">
		<div class="container h-100 d-flex justify-content-center align-items-center">

			<!--Grid row-->
			<div class="row  pt-5 mt-3">

				<!--Grid column-->
				<div class="col-md-12">

					<div class="card">
						<div class="card-body">

							<h2 class="font-weight-bold my-4 text-center mb-5 mt-4 font-weight-bold">
								<strong>REGISTER</strong>
							</h2>
							<hr>

							<!--Grid row-->
							<div class="row mt-5">

								<!--Grid column-->
								<div class="col-md-1"></div>
								<div class="col-md-10">

									<!--Grid row-->
									<div class="row pb-4 d-flex justify-content-center mb-4">

										<h4 class="mt-3 mr-4">
											<strong>Login with</strong>
										</h4>

										<div class="inline-ul text-center d-flex justify-content-center">
											<a class="p-2 m-2 fa-lg tw-ic">
												<i class="fab fa-twitter fa-lg indigo-text"></i>
											</a>
											<a class="p-2 m-2 fa-lg li-ic">
												<i class="fab fa-linkedin-in fa-lg indigo-text"> </i>
											</a>
											<a class="p-2 m-2 fa-lg ins-ic">
												<i class="fab fa-instagram fa-lg indigo-text"> </i>
											</a>
										</div>

										<h4 class="mt-3 ml-4">
											<strong>or:</strong>
										</h4>

									</div>
									<!--/Grid row-->

									<!--Body-->
									<form method="POST" action="{{ route('create') }}">
										@csrf
										<div class="md-form">
											<i class="fas fa-user prefix"></i>
											<input type="text" id="orangeForm-name" class="form-control @error('email') is-invalid @enderror" name="name" required>
											@error('name')
											    <span class="invalid-feedback" role="alert">
											        <strong>{{ $message }}</strong>
											    </span>
											@enderror
											<label for="orangeForm-name">Name</label>
										</div>
										<div class="md-form">
											<i class="fas fa-envelope prefix"></i>
											<input type="email" id="orangeForm-email" class="form-control @error('email') is-invalid @enderror" name="email" required>
											@error('email')
											    <span class="invalid-feedback" role="alert">
											        <strong>{{ $message }}</strong>
											    </span>
											@enderror
											<label for="orangeForm-email">Email</label>
										</div>

										<div class="md-form">
											<i class="fas fa-lock prefix"></i>
											<input type="password" id="orangeForm-pass" class="form-control @error('email') is-invalid @enderror" name="password" required>
											@error('password')
											    <span class="invalid-feedback" role="alert">
											        <strong>{{ $message }}</strong>
											    </span>
											@enderror
											<label for="orangeForm-pass">Password</label>
										</div>

										<div class="md-form">
											<i class="fas fa-lock prefix"></i>
											<input type="password" id="orangeForm-pass-confirm" class="form-control @error('email') is-invalid @enderror" name="password_confirmation" required>
											@error('password')
											    <span class="invalid-feedback" role="alert">
											        <strong>{{ $message }}</strong>
											    </span>
											@enderror
											<label for="orangeForm-pass-confirm">Confirm Password</label>
										</div>

										<div class="md-form">
											<input type="checkbox" class="form-check-input" id="materialUnchecked" name="super_admin">
											<label class="form-check-label" for="materialUnchecked">Super Admin</label>
										</div>

										<div class="text-center">
											<button class="btn btn-indigo btn-rounded mt-5">Create User</button>
										</div>
									</form>

								</div>
								<!--Grid column-->

							</div>
							<!--Grid row-->

						</div>
					</div>

				</div>
				<!--Grid column-->

			</div>
			<!--Grid row-->

		</div>
	</div>
</section>
<!--Intro Section-->
<!--Main Navigation-->

<!--  SCRIPTS  -->
<!-- JQuery -->
</html>

@endsection