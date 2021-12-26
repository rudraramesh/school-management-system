@extends('admin.layouts.header')
@section('title','About-Course')
@section('content-section')

<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Course Details</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Course</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Course Details</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<!-- BEGIN PROFILE SIDEBAR -->
							<div class="profile-sidebar">
								<div class="card card-topline-aqua">
									<div class="card-body no-padding height-9">
										<div class="row">
											<div class="course-picture">
												<img src="{{asset('admin/courseimage/'.$singlecourse->image)}}" class="img-responsive"
													alt=""> </div>
										</div>
										<div class="profile-usertitle">
											<div class="profile-usertitle-name"> {{$singlecourse->course_name}}</div>
										</div>
										<!-- END SIDEBAR USER TITLE -->
									</div>
								</div>
								<div class="card">
									<div class="card-head card-topline-aqua">
										<header>About Course</header>
									</div>
									<div class="card-body no-padding height-9">
										<div class="profile-desc">
											Open after rule place He earth earth good called days unto which wherein day
											doesn't said day image signs
											fish days forth for evening whose his make his bearing years gathering good
											brought without.
										</div>
										<ul class="list-group list-group-unbordered">
											<li class="list-group-item">
												<b>Duration Hour </b>
												<div class="profile-desc-item pull-right">{{$singlecourse->course_length}}</div>
											</li>
											<li class="list-group-item">
												<b>Price </b>
												<div class="profile-desc-item pull-right">Rs.{{$singlecourse->course_price}}.00</div>
											</li>
											<li class="list-group-item">
												<b>Professor Name </b>
												<div class="profile-desc-item pull-right">{{$singlecourse->course_professor}}</div>
											</li>
											<li class="list-group-item">
												<b>Date</b>
												<div class="profile-desc-item pull-right">{{$singlecourse->updated_at}}</div>
											</li>
										</ul>
										<div class="row list-separated profile-stat">
											<div class="col-md-4 col-sm-4 col-6">
												<div class="uppercase profile-stat-title"> 4 </div>
												<div class="uppercase profile-stat-text"> Years </div>
											</div>
											<div class="col-md-4 col-sm-4 col-6">
												<div class="uppercase profile-stat-title"> {{$singlecourse->max_student_number}} </div>
												<div class="uppercase profile-stat-text"> Students </div>
											</div>
											<div class="col-md-4 col-sm-4 col-6">
												<div class="uppercase profile-stat-title"> 61 </div>
												<div class="uppercase profile-stat-text"> Batches </div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END BEGIN PROFILE SIDEBAR -->
							<!-- BEGIN PROFILE CONTENT -->
							<div class="profile-content">
								<div class="row">
									<div class="card">
										<div class="card-topline-aqua">
											<header></header>
										</div>
										<div class="white-box">
											<!-- Nav tabs -->
											<!-- Tab panes -->
											<div class="tab-content">
												<div class="tab-pane active fontawesome-demo">
													<div id="biography">
														<p>Open after rule place He earth earth good called days unto
															which wherein day doesn't said day image
															signs fish days forth for evening whose his make his bearing
															years gathering good brought without. </p>
														<p>Years living creepeth. Form them yielding behold greater
															divided void was fowl earth in. Spirit Bring
															grass they're you have shall years so morning. Grass
															gathering won't heaven set greater darkness forth
															abundantly he. </p>
														<p>sn't hath, forth. Brought sea subdue, from divided replenish
															creature after creeping abundantly fly is
															cattle fill were years years may darkness blessed which land
															creepeth good moving good. Life living
															you're.</p>
														<p>Open after rule place He earth earth good called days unto
															which wherein day doesn't said day image
															signs fish days forth for evening whose his make his bearing
															years gathering good brought without. </p>
														<p>Years living creepeth. Form them yielding behold greater
															divided void was fowl earth in. Spirit Bring
															grass they're you have shall years so morning. Grass
															gathering won't heaven set greater darkness forth
															abundantly he. </p>
														<p>sn't hath, forth. Brought sea subdue, from divided replenish
															creature after creeping abundantly fly is
															cattle fill were years years may darkness blessed which land
															creepeth good moving good. Life living
															you're.</p>
														<br>
														<h4 class="font-bold">Course Syllabus</h4>
														<hr>
														<ul>
															<li>Introduction to Computer and Internet.</li>
															<li>Microsoft Application Tools such MS Word, MS Excel, MS
																PowerPoint.</li>
															<li>Computer Organizations and Operating Systems.</li>
															<li>Programming in C.</li>
															<li>Object Oriented Programming Languages such as C++/Java.
															</li>
															<li>RDBMS and Data Management</li>
															<li>Web Technologies such as creation of dynamic website.
															</li>
														</ul>
														<br>
														<h4 class="font-bold">After the completion of course the
															students will be able to: </h4>
														<hr>
														<ul>
															<li>Understand computers, its basic components and
																applications.</li>
															<li>Understand and Identify the Concepts of Computer
																Hardware and software.</li>
															<li>Implement Word Processing Basics.</li>
															<li>Create Spread sheets and use of formulas and functions.
															</li>
															<li>Create and develop a presentation.</li>
															<li>Understand basic concepts in Networking and
																Troubleshooting.</li>
															<li>Develop the skills for effective compose of E-mails and
																its features.</li>
															<li>Create and develop forms, queries and reports.</li>
															<li>Understand the concepts of multimedia and its
																applications.</li>
															<li>Develop the understanding of HTML.</li>
															<li>Understand the concepts of Tally and its applications.
															</li>
															<li>Maintenance of PC.</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END PROFILE CONTENT -->
						</div>
					</div>
				</div>
				<!-- end page content -->
				@endsection