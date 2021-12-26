@extends('admin.layouts.header')
@section('title','Lock-Screen')
@section('content-section')
@endsection

<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-logo">
						<img src="{{asset('admin/assets/img/dp.jpg')}}" class="imgroundcorners" alt="John Doe">
					</span>
					<span class="login100-form-title  p-t-27">
						Kiran Patel
					</span>
					<p class="text-center txt-locked">
						Locked
					</p>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					<div class="text-center p-t-27">
						<a class="txt1" href="login.html">
							sign in as a different user
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

