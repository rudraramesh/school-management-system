@extends('admin.layouts.header')
@section('title','Admin-Register')
@section('content-section')

<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				@if(Session::has('message'))
    <div class="alert alert-success">
        {{Session::get('message')}}
    </div>
    @endif
				<form method="POST" autocomplete="off" action="{{ route('userregister') }}" class="login100-form validate-form" enctype="multipart/form-data">
					{{@csrf_field()}}
					<span class="login100-form-logo">
						<img alt="" src="{{asset('admin/assets/img/logo-2.png')}}">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Registration
					</span>
					<div class="row">
						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Enter firstname">
								<input class="input100" type="text" name="fname" placeholder="First Name">
								<span class="focus-input100" data-placeholder="&#xf207;"></span>
							</div>
						</div>
					  @if($errors->has('fname'))
          <p style="color: red;">
             {{$errors->first('fname')}}
          </p>
            @endif 
						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Enter lastname">
								<input class="input100" type="text" name="lname" placeholder="Last Name">
								<span class="focus-input100" data-placeholder="&#xf207;"></span>
							</div>
						</div>

						  @if($errors->has('lname'))
          <p style="color: red;">
             {{$errors->first('lname')}}
          </p>
            @endif 
						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Enter username">
								<input class="input100" type="text" name="username" placeholder="Username">
								<span class="focus-input100" data-placeholder="&#xf207;"></span>
							</div>
						</div>
	  @if($errors->has('username'))
          <p style="color: red;">
             {{$errors->first('username')}}
          </p>
            @endif 
						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Enter email">
								<input class="input100" type="email" name="email" placeholder="Email">
								<span class="focus-input100" data-placeholder="&#xf207;"></span>
							</div>
						</div>

						  @if($errors->has('email'))
          <p style="color: red;">
             {{$errors->first('email')}}
          </p>
            @endif 
						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Enter number">
								<input class="input100" type="number" name="phone" placeholder="Phone">
								<span class="focus-input100" data-placeholder="&#xf207;"></span>
							</div>
						</div>

					  @if($errors->has('phone'))
          <p style="color: red;">
             {{$errors->first('phone')}}
          </p>
            @endif 
						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Enter address">
								<input class="input100" type="text" name="address" placeholder="Address">
								<span class="focus-input100" data-placeholder="&#xf207;"></span>
							</div>
						</div>
				  @if($errors->has('address'))
          <p style="color: red;">
             {{$errors->first('address')}}
          </p>
            @endif 
						<div class="wrap-input100 validate-input" data-validate="Enter gender">
							<span style="font-size: 18px; color: white;">Gender:  </span>
								<input style="margin-left: 80px;" class="" type="radio" value="male" name="gender">Male
								<input style="margin-left: 40px;" class="" type="radio" value="female" name="gender">Female
								</div>
					  @if($errors->has('gender'))
          <p style="color: red;">
             {{$errors->first('gender')}}
          </p>
            @endif 
						<div class="wrap-input100 validate-input" data-validate="Enter address">
								<span style="font-size: 18px; color: white;">PP Size Photos:</span >
								<input style="margin-left: 150px;" class="input100" type="file" name="image">
								</div>
							  @if($errors->has('image'))
          <p style="color: red;">
             {{$errors->first('image')}}
          </p>
            @endif 

						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Enter password">
								<input class="input100" type="password" name="password" placeholder="Password">
								<span class="focus-input100" data-placeholder="&#xf191;"></span>
							</div>
						</div>
					 	  @if($errors->has('password'))
          <p style="color: red;">
             {{$errors->first('password')}}
          </p>
            @endif 
						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Enter password again">
								<input class="input100" type="password" name="password_confirmation" placeholder="Confirm password">
								<span class="focus-input100" data-placeholder="&#xf191;"></span>
							</div>
						</div>
					</div>
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
						</button>
					</div>
					<div class="text-center p-t-30">
						<a class="txt1" href="login.html">
							You already have a membership?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection