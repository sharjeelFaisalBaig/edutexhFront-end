<?php include_once('header.php') ?>

<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-7">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Academic_sub.php">Academics</a></li>
					<li class="breadcrumb-item active" aria-current="page">Batch Summary</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-5 text-right">
			<a href="" class="btn btn-primary m-auto">Batch Settings</a>
			<a href="" class="btn btn-primary m-auto width70">Exams</a>
			<a href="" class="btn btn-primary m-auto width70">Edit</a>
			<a href="" class="btn btn-primary m-auto width70">Delete</a>

			<div class="dropdown d-inline">
				<button class="btn btn-primary m-auto dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Manage
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="Academic-SubjectCenter_courseSubject_editSubject_sub.php">Subjects</a>
					<a class="dropdown-item" href="#">Assign Tutor</a>
					<a class="dropdown-item" href="#">Manage Roll Number</a>
				</div>
			</div>
		</div>
		<div class="col-md-9 m-auto">
			<div class="ms-panel ms-panel-fh mt-5">
				<div class="ms-panel-body clearfix">
					<div class="row">
						<div class="col-md-1">
							<label class="mt-1">Class</label>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<select class="form-control ">
									<option>Grade 2</option>
								</select>
							</div>
						</div>
						<div class="offset-md-1 col-md-1">
							<label class="mt-1">Batch</label>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<select class="form-control ">
									<option>G2 - A 2020</option>
								</select>
							</div>
						</div>
						<div class="col-md-1">
							<a href="" class="btn btn-primary width70 m-auto">Submit</a>
						</div>


					</div>
					<hr>
					<div class="row">
						<div class="col-md-4">
							<p class="font-weight-bold">Range &nbsp;&nbsp;&nbsp; <span class="text-muted font-weight-normal">01 August 2020 - 28 February 2021</span></p>
						</div>
						<div class="col-md-4">
							<p class="font-weight-bold">Tutor &nbsp;&nbsp;&nbsp; <span class="text-muted font-weight-normal">Muhammad Saleem</span></p>
						</div>
					</div>

					<div class="ms-card p-3">
						<ul class="nav nav-tabs d-flex nav-justified mb-4" role="tablist">
							<li role="presentation"><a href="#tab13" aria-controls="tab13" class="active" role="tab" data-toggle="tab">Students</a></li>
							<li role="presentation"><a href="#tab14" aria-controls="tab14" role="tab" data-toggle="tab">Attendance </a></li>
							<li role="presentation"><a href="#tab15" aria-controls="tab15" role="tab" data-toggle="tab">Subject and Employee Allocation</a></li>
							<li role="presentation"><a href="#tab16" aria-controls="tab16" role="tab" data-toggle="tab">Timetables and Activities</a></li>
							<li role="presentation"><a href="#tab17" aria-controls="tab17" role="tab" data-toggle="tab">Examinations</a></li>
						</ul>
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active show fade in" id="tab13">
								<h5 class="d-inline-block ml-4 mb-3">9</h5><span class="font-weight-bold ml-3">Students</span>
								<hr>
								<div class="table-responsive">
									<table id="data-table-4" class="table w-100 thead-primary table-bordered">
										<thead>
											<tr>
												<th>SI NO</th>
												<th>Student Name</th>
												<th>Addmission Number</th>
												<th>Roll Number</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Amjad Khan</td>
												<td>S104</td>
												<td>G204</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Arsalan Ali</td>
												<td>S104</td>
												<td>G204</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Jamshed Khan</td>
												<td>S104</td>
												<td>G204</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane show fade in" id="tab14">
								<div class="row">
									<div class="col-md-2">
										<h6 class="ml-md-4">Today</h6>
										<small class="ml-md-4 my-2">14 May 2020</small>
									</div>
									<div class="col-md-3 text-md-center">
										<h6 class="d-inline-block">Present</h6>
										<h5 class="d-inline ml-2">32 <sup>Out of 33</sup></h5>
									</div>
									<div class="col-md-3 text-md-center">
										<h6 class="d-inline-block">Absentees</h6>
										<h5 class="d-inline ml-2">1</h5>
									</div>
									<div class="col-md-4">
										<p class="font-weight-bold d-inline-block">Attendance Percentage</p>
										<h5 class="d-inline ml-2">96%</h5>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-3 mt-2">
										List of Absentees
									</div>
									<div class="offset-md-4 col-md-5 text-md-right">
										<div class="date-div">
											<button class="next" id="prev"><i class="fas fa-chevron-left"></i></button>
											<input type="text" id="datepicker">
											<button class="prev" id="next"><i class="fas fa-chevron-right"></i></button>
											<i class="far fa-calendar-alt"></i>
										</div>
									</div>
								</div>

								<div class="table-responsive">
									<table id="data-table-4" class="table w-100 thead-primary table-bordered">
										<thead>
											<tr>
												<th>SI NO</th>
												<th>Student Name</th>
												<th>Addmission Number</th>
												<th>Roll Number</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Amjad Khan</td>
												<td>S104</td>
												<td>PG025</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane show fade in" id="tab15">
								<div class="row">
									<div class="col-md-3 text-md-center">
										<h6 class="d-inline-block">Subjects</h6>
										<h5 class="d-inline ml-2">6</h5>
									</div>
									<div class="col-md-3">
										<h6 class="d-inline-block">Employees</h6>
										<h5 class="d-inline ml-2">6</h5>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-3">
										<label class="mt-2">Timetable</label>
									</div>
									<div class="col-md-4">
										<select class="form-control">
											<option value="">01 June 2020 - 28 February 2021</option>
										</select>
									</div>
								</div>
								<div class="row mt-2 mb-4">
									<div class="col-md-3">
										<label>Subject-wise Summary</label>
									</div>
									<div class="col-md-4">
										<label class="text-muted">Employee-wise Summary</label>
									</div>
								</div>

								<div class="table-responsive">
									<table id="data-table-4" class="table w-100 thead-primary table-bordered">
										<thead>
											<tr>
												<th>Subject</th>
												<th>Periods/Week</th>
												<th>Employee</th>
												<th>Periods/Employee</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>General Science</td>
												<td>5</td>
												<td>Muhammad Sufyan</td>
												<td>5</td>
											</tr>
											<tr>
												<td>General Science</td>
												<td>5</td>
												<td>Muhammad Sufyan</td>
												<td>5</td>
											</tr>
											<tr>
												<td>General Science</td>
												<td>5</td>
												<td>Muhammad Sufyan</td>
												<td>5</td>
											</tr>
											<tr>
												<td>General Science</td>
												<td>5</td>
												<td>Muhammad Sufyan</td>
												<td>5</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane show fade in" id="tab16">
								<div class="row">
									<div class="col-md-3">
										<h6 class="ml-md-4">01 June 2020</h6>
									</div>
									<div class="col-md-3">
										<h6 class="d-inline-block">Timetable Periods</h6>
										<h5 class="d-inline ml-2">6</h5>
									</div>
									<div class="col-md-3">
										<p class="font-weight-bold d-inline-block">Calendar Events</p>
										<h5 class="d-inline ml-2">1</h5>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-3 mt-2">
										Timetable Periods (6)
									</div>
									<div class="offset-md-4 col-md-5 text-md-right">
										<div class="date-div">
											<button class="next" id="prev"><i class="fas fa-chevron-left"></i></button>
											<input type="text" id="datepicker">
											<button class="prev" id="next"><i class="fas fa-chevron-right"></i></button>
											<i class="far fa-calendar-alt"></i>
										</div>
									</div>
								</div>
								<div class="table-responsive mb-4">
									<table id="data-table-4" class="table w-100 thead-primary table-bordered">
										<thead>
											<tr>
												<th>Class Timing</th>
												<th>Subject</th>
												<th>Emloyee</th>
												<th>Classroom</th>
												<th>Building</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>8:30 AM - 9:00 AM</td>
												<td>Mathematics</td>
												<td>Ibrar Hussain</td>
												<td>Grade - 01</td>
												<td>Academic Block - I</td>
											</tr>
											<tr>
												<td>8:30 AM - 9:00 AM</td>
												<td>Mathematics</td>
												<td>Ibrar Hussain</td>
												<td>Grade - 01</td>
												<td>Academic Block - I</td>
											</tr>
											<tr>
												<td>8:30 AM - 9:00 AM</td>
												<td>Mathematics</td>
												<td>Ibrar Hussain</td>
												<td>Grade - 01</td>
												<td>Academic Block - I</td>
											</tr>
										</tbody>
									</table>
								</div>
								<span>Calendar Events (1)</span>
								<div class="table-responsive mt-3">
									<table id="data-table-4" class="table w-100 thead-primary table-bordered">
										<thead>
											<tr>
												<th>Timing</th>
												<th>Events</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>01 June 2020 - 01 June 2020</td>
												<td>School Holiday</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane show fade in" id="tab17">
								<div class="row">
									<div class="col-md-2 text-md-center">
										<h6 class="d-inline-block">New Exams</h6>
										<h5 class="d-inline ml-1">0</h5>
									</div>
									<div class="col-md-3 border-right">
										<h6 class="d-inline-block">Published Exams</h6>
										<h5 class="d-inline">1</h5>
									</div>
									<div class="col-md-2">
										<p class="text-muted d-inline-block">Ongoing Exams</p>
										<p class="d-inline ml-2">0</p>
									</div>
									<div class="col-md-2">
										<p class="text-muted d-inline-block">Finished Exams</p>
										<p class="d-inline ml-2">0</p>
									</div>
									<div class="col-md-2">
										<p class="text-muted d-inline-block">Results Exams</p>
										<p class="d-inline ml-2">0</p>
									</div>
								</div>
								<hr>
								<div class="table-responsive">
									<table id="data-table-4" class="table w-100 thead-primary table-bordered">
										<thead>
											<tr>
												<th>Exam Group</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Assessment - I</td>
												<td>Exam Schedule Published</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</div>
<?php include_once('footer.php') ?>