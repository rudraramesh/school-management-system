@extends('user.layouts.header')
@section('title','order-course')
@section('content-section')

<div class="helloimg" style="background: url({{asset('user/img/helloform.jpg')}})"></div>
<div style="margin-left: 20%" class="form_div">

			

<div class="section-top-border">
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<h3 class="mb-30">Order Course</h3>
		<div class="container" style="margin-bottom: 120px;">
        <ul class="progressbar">
            <li class="active">Your Details</li>
            <li>choose interest</li>
            <li>add friends</li>
            <li>View map</li>
        </ul>
    </div>
   {{--  @if(Session::has('message'))
    <div class="alert alert-success">
        {{Session::get('message')}}
    </div> 
    @endif
    --}}
                          @if(Session::has('message'))
                              <div class="btn btn-success" id="msg">{{Session::get('message')}}</div> <br>
                              @endif 

						<form action="{{ route('courseorder') }}" method="POST">
							{{@csrf_field()}}
                              

							<div class="mt-10">
								<input type="text" name="fname" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'"
								  class="single-input">
							</div>
							<div class="mt-10">
								<input type="text" name="lname" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'"
								  class="single-input">
							</div>
							<div class="mt-10">
								<input type="text" name="phone" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'"
								  class="single-input">
							</div>
							<div class="mt-10">
								<input type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
								  class="single-input">
							</div>
							<div class="input-group-icon mt-10">
								<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
								<input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'"
								  class="single-input">
							</div>
							<div  style="border:1px solid #C0C0C0;"  class="input-group-icon mt-10">
								<div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
								<div class="form-select" id="default-select">
											<select name="city">
												<option>City</option>
									<option value="Kathmandu">Kathmandu</option>
									<option value="Dhaka">Dhaka</option>
									<option value="Dilli">Dilli</option>
									<option value="Newyork">Newyork</option>
									<option value="Islamabad">Islamabad</option>
									</select>
								</div>
							</div>
							<div style="border:1px solid #C0C0C0;"  class="input-group-icon mt-10">
								<div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
								<div class="form-select" id="default-select">
											<select name="country">
												<option>Country</option>
									<option value="Nepal">Nepal</option>
									<option value="Bangladesh">Bangladesh</option>
									<option value="India">India</option>
									<option value="England">England</option>
									<option value="Srilanka">Srilanka</option>
									</select>
								</div>
							</div>
							<div class="mt-10">
								<input type="hidden" name="course_id" value="{{$s->id}}" placeholder="course_id" onfocus="this.placeholder = ''" onblur="this.placeholder = 'course_id'"
								  class="single-input">
							</div>
							
							<div class="mt-10" style="float: right;">
								<button  class="btn btn-outline-success">Next Stap</button>
							</div>
						</form>
					</div>
					</div>
				</div>
				</div>
				
				

@endsection