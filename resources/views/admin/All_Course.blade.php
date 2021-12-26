@extends('admin.layouts.header')
@section('title','All-Course')
@section('content-section')
<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">All Courses List</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="{{ route('admin.home') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Courses</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">All Courses List</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="card-box">
							<div class="card-head">
								<header>All Courses</header>
							</div>
							<div class="card-body ">
								<!-- start course list -->
								 @if(Count($showcourse)==0)
       <span style="color:red;">
        {{'sorry no course available'}}
       </span>
         @else
								<div class="row">
                    @foreach($showcourse as $singlecourse)

									<div class="col-lg-3 col-md-6 col-12 col-sm-6">
										<div class="blogThumb">
											<div class="thumb-center"><img class="img-responsive" alt="user"
													src="{{asset('admin/courseimage/'.$singlecourse->image)}}"></div>
											<div class="course-box">
												<h4>{{$singlecourse->course_name}}</h4>
												<div class="text-muted"><span class="m-r-10">April 23</span>
													<a class="course-likes m-l-10" href="#"><i
															class="fa fa-heart-o"></i> 654</a>
												</div>
												<p><span><i class="ti-alarm-clock"></i>Course Hour: {{$singlecourse->course_length}}</span></p>
												<p><span><i class="ti-user"></i> Professor: {{$singlecourse->course_professor}}</span></p>
												<p><span><i class="fa fa-graduation-cap"></i> Students: {{$singlecourse->max_student_number}}+</span></p>
												<a href="{{ route('readmorecourse',[$singlecourse->id]) }}"><button
													class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Read
													More</button></a>
											</div>
										</div>
									</div>
         @endforeach

								
									
								</div>
        @endif

								<!-- End course list -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
			@endsection