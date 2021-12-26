
@extends('admin.layouts.header')
@section('title','Admin-Hoome-2')
@section('content-section')
<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Dashboard</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Dashboard</li>
							</ol>
						</div>
					</div>
<!-- start widget -->
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="row clearfix">
								<div class="col-md-6 col-sm-6 col-12">
									<div class="card">
										<div class="panel-body">
											<h3>Total Students</h3>
											<div
												class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope active">
												<div class="progress-bar progress-bar-success" role="progressbar"
													aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"
													style="width: 65%;"></div>
											</div>
											<span class="text-small margin-top-10 full-width">14% higher than last
												month</span>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-12">
									<div class="card">
										<div class="panel-body">
											<h3>New Students</h3>
											<div
												class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope active">
												<div class="progress-bar progress-bar-danger" role="progressbar"
													aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"
													style="width: 68%;"></div>
											</div>
											<span class="text-small margin-top-10 full-width">7% higher than last
												month</span>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-12">
									<div class="card">
										<div class="panel-body">
											<h3>Total Course</h3>
											<div
												class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope active">
												<div class="progress-bar progress-bar-warning" role="progressbar"
													aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"
													style="width: 52%;"></div>
											</div>
											<span class="text-small margin-top-10 full-width">34% higher than last
												month</span>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-12">
									<div class="card">
										<div class="panel-body">
											<h3>Visitors</h3>
											<div
												class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope active">
												<div class="progress-bar progress-bar-info" role="progressbar"
													aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"
													style="width: 56%;"></div>
											</div>
											<span class="text-small margin-top-10 full-width">20% higher than last
												month</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Income/Expense Report</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body no-padding height-9">
									<div class="row">
										<canvas id="bar-chart"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end widget -->
					<div class="row">
						<div class="col-lg-8 col-md-12 col-sm-12 col-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Sport Student List</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body no-padding height-9">
									<div class="row table-padding">
										<div class="col-md-6 col-sm-6 col-6">
											<div class="btn-group">
												<a href="book_appointment_material.html" id="addRow"
													class="btn btn-info">
													Add New <i class="fa fa-plus"></i>
												</a>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6">
											<div class="btn-group pull-right">
												<a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
													data-toggle="dropdown">Tools
													<i class="fa fa-angle-down"></i>
												</a>
												<ul class="dropdown-menu pull-right">
													<li>
														<a href="javascript:;">
															<i class="fa fa-print"></i> Print </a>
													</li>
													<li>
														<a href="javascript:;">
															<i class="fa fa-file-pdf-o"></i> Save as PDF </a>
													</li>
													<li>
														<a href="javascript:;">
															<i class="fa fa-file-excel-o"></i> Export to Excel </a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="table-responsive">
										<table
											class="table table-striped table-bordered table-hover table-checkable order-column"
											id="example4">
											<thead>
												<tr>
													<th>
														<label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
															<input type="checkbox" class="group-checkable"
																data-set="#sample_1 .checkboxes" />
															<span></span>
														</label>
													</th>
													<th class="center">Student Name</th>
													<th class="center">Assigned Coach</th>
													<th class="center">Date</th>
													<th class="center">Time</th>
													<th class="center">Actions </th>
												</tr>
											</thead>
											<tbody>
												<tr class="odd gradeX">
													<td>
														<label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
															<input type="checkbox" class="checkboxes" value="1" />
															<span></span>
														</label>
													</td>
													<td class="center"> Jayesh Patel </td>
													<td class="center">
														<a href="mailto:shuxer@gmail.com"> Rajesh </a>
													</td>
													<td class="center"> 12/05/2016 </td>
													<td class="center"> 10:45 </td>
													<td class="center">
														<div class="btn-group">
															<button
																class="btn btn-xs btn-warning dropdown-toggle center no-margin"
																type="button" data-toggle="dropdown"
																aria-expanded="false"> Actions
																<i class="fa fa-angle-down"></i>
															</button>
															<ul class="dropdown-menu pull-left" role="menu">
																<li>
																	<a href="javascript:;"><i class="fa fa-trash-o"></i>
																		Delete </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-ban"></i>
																		Cancel </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-clock-o"></i>
																		Postpone </a>
																</li>
															</ul>
														</div>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td class="center">
														<label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
															<input type="checkbox" class="checkboxes" value="1" />
															<span></span>
														</label>
													</td>
													<td class="center"> Pooja Patel </td>
													<td class="center">
														<a href="mailto:looper90@gmail.com"> Sarah Smith </a>
													</td>
													<td class="center"> 12/05/2016 </td>
													<td class="center"> 10:55 </td>
													<td class="center">
														<div class="btn-group">
															<button
																class="btn btn-xs btn-info dropdown-toggle no-margin"
																type="button" data-toggle="dropdown"
																aria-expanded="false"> Actions
																<i class="fa fa-angle-down"></i>
															</button>
															<ul class="dropdown-menu" role="menu">
																<li>
																	<a href="javascript:;"><i class="fa fa-trash-o"></i>
																		Delete </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-ban"></i>
																		Cancel </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-clock-o"></i>
																		Postpone </a>
																</li>
															</ul>
														</div>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td>
														<label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
															<input type="checkbox" class="checkboxes" value="1" />
															<span></span>
														</label>
													</td>
													<td class="center"> Pankaj Singh </td>
													<td class="center">
														<a href="mailto:userwow@yahoo.com"> Rajesh </a>
													</td>
													<td class="center"> 12/05/2016 </td>
													<td class="center"> 11:15 </td>
													<td class="center">
														<div class="btn-group">
															<button
																class="btn btn-xs btn-success dropdown-toggle no-margin"
																type="button" data-toggle="dropdown"
																aria-expanded="false"> Actions
																<i class="fa fa-angle-down"></i>
															</button>
															<ul class="dropdown-menu" role="menu">
																<li>
																	<a href="javascript:;"><i class="fa fa-trash-o"></i>
																		Delete </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-ban"></i>
																		Cancel </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-clock-o"></i>
																		Postpone </a>
																</li>
															</ul>
														</div>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td class="center">
														<label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
															<input type="checkbox" class="checkboxes" value="1" />
															<span></span>
														</label>
													</td>
													<td class="center"> Raj Malhotra </td>
													<td class="center">
														<a href="mailto:doctormail@gmail.com"> Megha Trivedi </a>
													</td>
													<td class="center"> 12/05/2016 </td>
													<td class="center"> 11:25 </td>
													<td class="center">
														<div class="btn-group">
															<button
																class="btn btn-xs btn-primary dropdown-toggle no-margin"
																type="button" data-toggle="dropdown"
																aria-expanded="false"> Actions
																<i class="fa fa-angle-down"></i>
															</button>
															<ul class="dropdown-menu" role="menu">
																<li>
																	<a href="javascript:;"><i class="fa fa-trash-o"></i>
																		Delete </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-ban"></i>
																		Cancel </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-clock-o"></i>
																		Postpone </a>
																</li>
															</ul>
														</div>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td class="center">
														<label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
															<input type="checkbox" class="checkboxes" value="1" />
															<span></span>
														</label>
													</td>
													<td class="center"> Sneha Pandya </td>
													<td class="center">
														<a href="mailto:doctormail@gmail.com"> Sarah Smith </a>
													</td>
													<td class="center"> 12/05/2016 </td>
													<td class="center"> 11:35 </td>
													<td class="center">
														<div class="btn-group">
															<button
																class="btn btn-xs btn-warning dropdown-toggle no-margin"
																type="button" data-toggle="dropdown"
																aria-expanded="false"> Actions
																<i class="fa fa-angle-down"></i>
															</button>
															<ul class="dropdown-menu" role="menu">
																<li>
																	<a href="javascript:;"><i class="fa fa-trash-o"></i>
																		Delete </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-ban"></i>
																		Cancel </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-clock-o"></i>
																		Postpone </a>
																</li>
															</ul>
														</div>
													</td>
												</tr>
												<tr class="odd gradeX ">
													<td class="center">
														<label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
															<input type="checkbox" class="checkboxes" value="1" />
															<span></span>
														</label>
													</td>
													<td class="center"> Sameer Jain </td>
													<td class="center">
														<a href="mailto:doctormail@gmail.com"> Megha Trivedi </a>
													</td>
													<td class="center"> 12/05/2016 </td>
													<td class="center"> 11:45 </td>
													<td class="center">
														<div class="btn-group">
															<button
																class="btn btn-xs btn-danger dropdown-toggle no-margin"
																type="button" data-toggle="dropdown"
																aria-expanded="false"> Actions
																<i class="fa fa-angle-down"></i>
															</button>
															<ul class="dropdown-menu" role="menu">
																<li>
																	<a href="javascript:;"><i class="fa fa-trash-o"></i>
																		Delete </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-ban"></i>
																		Cancel </a>
																</li>
																<li>
																	<a href="javascript:;"><i class="fa fa-clock-o"></i>
																		Postpone </a>
																</li>
															</ul>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12 col-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Professors List</header>
								</div>
								<div class="card-body ">
									<div class="row">
										<ul class="docListWindow small-slimscroll-style">
											<li>
												<div class="prog-avatar">
													<img src="{{asset('admin/assets/img/prof/prof1.jpg')}}" alt="" width="40"
														height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Rajesh</a> -(M.Com, PHD)
													</div>
													<div>
														<span class="clsAvailable">Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="{{asset('admin/assets/img/prof/prof2.jpg')}}" alt="" width="40"
														height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Sarah Smith</a> -(M.A., B.Ed)
													</div>
													<div>
														<span class="clsAvailable">Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="{{asset('admin/assets/img/prof/prof3.jpg')}}" alt="" width="40"
														height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">John Deo</a> - (B.C.A., M.C.A.)
													</div>
													<div>
														<span class="clsNotAvailable">Not Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="{{asset('admin/assets/img/prof/prof4.jpg')}}" alt="" width="40"
														height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Jay Soni</a> - (B.E., M.E.)
													</div>
													<div>
														<span class="clsOnLeave">On Leave</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="{{asset('admin/assets/img/prof/prof5.jpg')}}" alt="" width="40"
														height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Jacob Ryan</a> - (M.Phil)
													</div>
													<div>
														<span class="clsNotAvailable">Not Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="{{asset('admin/assets/img/prof/prof6.jpg')}}" alt="" width="40"
														height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Megha Trivedi</a> - (M.S.W, PHD)
													</div>
													<div>
														<span class="clsAvailable">Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="{{asset('admin/assets/img/prof/prof2.jpg')}}" alt="" width="40"
														height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Sarah Smith</a> -(B.S.C, M.S.C.)
													</div>
													<div>
														<span class="clsAvailable">Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="{{asset('admin/assets/img/prof/prof3.jpg')}}" alt="" width="40"
														height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">John Deo</a> - (B.E., M.E.)
													</div>
													<div>
														<span class="clsNotAvailable">Not Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="{{asset('admin/assets/img/prof/prof4.jpg')}}" alt="" width="40"
														height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Jay Soni</a> - (B.C.A., M.C.A.)
													</div>
													<div>
														<span class="clsOnLeave">On Leave</span>
													</div>
												</div>
											</li>
										</ul>
										<div class="full-width text-center p-t-10">
											<a href="#" class="btn purple btn-outline btn-circle margin-0">View All</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-12 col-12">
							<div class="white-box border-gray">
								<h4 class="box-title"><small class="pull-right m-t-10 text-success"><i
											class="fa fa-sort-asc"></i> 25% High
										then last month</small> Bronze medal</h4>
								<div class="stats-row">
									<div class="stat-item">
										<h6>Overall Growth</h6> <b>35.80%</b>
									</div>
									<div class="stat-item">
										<h6>Montly</h6> <b>45.20%</b>
									</div>
									<div class="stat-item">
										<h6>Day</h6> <b>5.50%</b>
									</div>
								</div>
								<div id="sparkline13"><canvas height="50"
										style="display: inline-block; width: 378px; height: 50px; vertical-align: top;"></canvas>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-12">
							<div class="white-box border-gray">
								<h4 class="box-title"><small class="pull-right m-t-10 text-danger"><i
											class="fa fa-sort-desc"></i> 30% Low then
										last month</small>Silver Medal</h4>
								<div class="stats-row">
									<div class="stat-item">
										<h6>Overall Growth</h6> <b>20.60%</b>
									</div>
									<div class="stat-item">
										<h6>Montly</h6> <b>65.30%</b>
									</div>
									<div class="stat-item">
										<h6>Day</h6> <b>4.90%</b>
									</div>
								</div>
								<div id="sparkline15"><canvas height="50"
										style="display: inline-block; width: 378px; height: 50px; vertical-align: top;"></canvas>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-12">
							<div class="white-box border-gray">
								<h4 class="box-title"><small class="pull-right m-t-10 text-success"><i
											class="fa fa-sort-asc"></i> 20% High
										then last month</small>Gold Medal</h4>
								<div class="stats-row">
									<div class="stat-item">
										<h6>Overall Growth</h6> <b>38.40%</b>
									</div>
									<div class="stat-item">
										<h6>Montly</h6> <b>52.49%</b>
									</div>
									<div class="stat-item">
										<h6>Day</h6> <b>4.70%</b>
									</div>
								</div>
								<div id="sparkline14"><canvas height="50"
										style="display: inline-block; width: 378px; height: 50px; vertical-align: top;"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Salary Status</header>
								</div>
								<div class="card-body ">
									<div class="mdl-tabs mdl-js-tabs">
										<div class="mdl-tabs__tab-bar tab-left-side">
											<a href="#tab4-panel"
												class="mdl-tabs__tab tabs_three is-active">Professors</a>
											<a href="#tab5-panel" class="mdl-tabs__tab tabs_three">Librarian</a>
											<a href="#tab6-panel" class="mdl-tabs__tab tabs_three">Other</a>
										</div>
										<div class="mdl-tabs__panel is-active p-t-20" id="tab4-panel">
											<div class="table-responsive">
												<table class="table">
													<tbody>
														<tr>
															<th>Image</th>
															<th>Name</th>
															<th>Date</th>
															<th>Status</th>
															<th>Ammount</th>
															<th>Transaction ID</th>
														</tr>
														<tr>
															<td class="patient-img sorting_1">
																<img src="{{asset('admin/assets/img/std/std6.jpg')}}" alt="">
															</td>
															<td>John Deo</td>
															<td>05-01-2017</td>
															<td><span class="label label-danger">Unpaid</span></td>
															<td>1200$</td>
															<td>#7234486</td>
														</tr>
														<tr>
															<td class="patient-img sorting_1">
																<img src="{{asset('admin/assets/img/std/std4.jpg')}}" alt="">
															</td>
															<td>Eugine Turner</td>
															<td>04-01-2017</td>
															<td><span class="label label-success">Paid</span></td>
															<td>1400$</td>
															<td>#7234417</td>
														</tr>
														<tr>
															<td class="patient-img sorting_1">
																<img src="{{asset('admin/assets/img/std/std2.jpg')}}" alt="">
															</td>
															<td>Jacqueline Howell</td>
															<td>03-01-2017</td>
															<td><span class="label label-warning">Pending</span></td>
															<td>1100$</td>
															<td>#7234454</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="text-center">
												<button class="btn btn-outline-primary btn-round btn-sm">Load
													More</button>
											</div>
										</div>
										<div class="mdl-tabs__panel p-t-20" id="tab5-panel">
											<div class="table-responsive">
												<table class="table">
													<tbody>
														<tr>
															<th>Image</th>
															<th>Name</th>
															<th>Date</th>
															<th>Status</th>
															<th>Ammount</th>
															<th>Transaction ID</th>
														</tr>
														<tr>
															<td class="patient-img sorting_1">
																<img src="{{asset('admin/assets/img/std/std1.jpg')}}" alt="">
															</td>
															<td>Eugine Turner</td>
															<td>04-01-2017</td>
															<td><span class="label label-success">Paid</span></td>
															<td>700$</td>
															<td>#7234417</td>
														</tr>
														<tr>
															<td class="patient-img sorting_1">
																<img src="{{asset('admin/assets/img/std/std4.jpg')}}" alt="">
															</td>
															<td>Jacqueline Howell</td>
															<td>03-01-2017</td>
															<td><span class="label label-warning">Pending</span></td>
															<td>500$</td>
															<td>#7234454</td>
														</tr>
														<tr>
															<td class="patient-img sorting_1">
																<img src="{{asset('admin/assets/img/std/std5.jpg')}}" alt="">
															</td>
															<td>Jayesh Parmar</td>
															<td>03-01-2017</td>
															<td><span class="label label-danger">Unpaid</span></td>
															<td>400$</td>
															<td>#72544</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="text-center">
												<button class="btn btn-outline-primary btn-round btn-sm">Load
													More</button>
											</div>
										</div>
										<div class="mdl-tabs__panel p-t-20" id="tab6-panel">
											<div class="table-responsive">
												<table class="table">
													<tbody>
														<tr>
															<th>Image</th>
															<th>Name</th>
															<th>Date</th>
															<th>Status</th>
															<th>Ammount</th>
															<th>Transaction ID</th>
														</tr>
														<tr>
															<td class="patient-img sorting_1">
																<img src="{{asset('admin/assets/img/std/std8.jpg')}}" alt="">
															</td>
															<td>Jane Elliott</td>
															<td>06-01-2017</td>
															<td><span class="label label-primary">Paid</span></td>
															<td>300$</td>
															<td>#7234421</td>
														</tr>
														<tr>
															<td class="patient-img sorting_1">
																<img src="{{asset('admin/assets/img/std/std7.jpg')}}" alt="">
															</td>
															<td>Jacqueline Howell</td>
															<td>03-01-2017</td>
															<td><span class="label label-warning">Pending</span></td>
															<td>450$</td>
															<td>#723344</td>
														</tr>
														<tr>
															<td class="patient-img sorting_1">
																<img src="{{asset('admin/assets/img/std/std9.jpg')}}" alt="">
															</td>
															<td>Jacqueline Howell</td>
															<td>03-01-2017</td>
															<td><span class="label label-primary">Paid</span></td>
															<td>550$</td>
															<td>#7235454</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="text-center">
												<button class="btn btn-outline-primary btn-round btn-sm">Load
													More</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
			@endsection