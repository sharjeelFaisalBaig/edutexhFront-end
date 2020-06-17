<?php require_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-6">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
					<li class="breadcrumb-item"><a href="Administration-Settings_sub.php">Settings</a></li>
					<li class="breadcrumb-item"><a href="Administration-Settings_courseBatch_sub">Manage Course/Batch</a></li>
					<li class="breadcrumb-item"><a href="managebatch.php">Manage Batch</a></li>
					<li class="breadcrumb-item"><a href="#">Grade 1</a></li>
					<li class="breadcrumb-item"><a href="#">Batch B-2020</a></li>
					<li class="breadcrumb-item active" aria-current="page">Assigning Tutor</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-6 text-right">
			<a href="" class="btn btn-primary" data-toggle="modal" data-target="#modal-2" >Batch Settings</a>
			<a href="" class="btn btn-primary width70">Exams</a>
			<a href="" class="btn btn-primary width70" data-toggle="modal" data-target="#modal-3">Edit</a>
			<a href="" class="btn btn-primary width70">Delete</a>
			<button class="btn btn-primary dropdown-toggle width80" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</button>
			<div class="dropdown-menu" x-placement="top-start"> 
				<a class="dropdown-item" href="#">Subject</a>
				<a class="dropdown-item" href="assigntutor.php">Assign Tutor</a>
				<a class="dropdown-item" href="#">Manage Roll Number</a>
				<div role="separator" class="dropdown-divider"></div> <a class="dropdown-item" href="#">Separated link</a>
			</div>
		</div>
		<div class="col-md-8 m-auto">
			<div class="ms-panel">
				<div class="ms-panel-header">
					<h6>Manage Batch</h6>
				</div>
				<div class="ms-panel-body">
					<div class="col-md-6 offset-3">
						<form class="needs-validation clearfix" novalidate="">
							<div class="form-row">
								<div class="col-md-6 mb-2">
									<label for="validationCustom29">Department</label>
									<div class="input-group">
										<select class="form-control">
											<option>English</option>
										</select>
									</div>
									<button class="btn btn-primary" type="submit">Submit</button>
								</div>
							</div>

						</form>
					</div>
					<div class="col-md-6 offset-3">
						<div class="table-responsive">
							<table class="table w-100 thead-primary table-bordered">
								<thead>
									<tr>
										<th>S.No</th>
										<th>Tutor Name</th>
										<th>Options</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Yousuf Ameen</td>
										<td>
											Assign
										</td>
									</tr>
									<tr>
										<td>1</td>
										<td>Bukhari Ameen</td>
										<td>
											<a href="">Remove</a>
										</td>
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
<div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="modal-3">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round ">
				Batch Settings</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<form class="needs-validation" novalidate>
					<div class="form-row">
						<div class="col-md-12 mb-3">
							<p>Batch: G1-A-2020</p><hr>
							<h6>First class of the day</h6>
							<small class="mb-3">Specify the subject to be taught in the first class of the  day. This setting will be considered when auto allocating a timetable</small>
							<div class="custom-control custom-radio custom-control mt-3">
								<input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
								<label class="custom-control-label" for="customRadio">Any Subject </label>
							</div>
							<div class="custom-control custom-radio custom-control">
								<input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
								<label class="custom-control-label" for="customRadio2">Set the Batch Tutor's subject as the first class</label>
							</div>
							<div class="custom-control custom-radio custom-control mb-3">
								<input type="radio" class="custom-control-input" id="customRadio3" name="example" value="customEx">
								<label class="custom-control-label" for="customRadio3">Specify a subject</label>
							</div>
							<label for="validationCustom30">Grade</label>
							<div class="input-group">
								<select class="form-control">
									<option>Select a subject</option>
								</select>
							</div>
						</div>
					</div>
					<button class="btn btn-primary d-block w-100" type="submit">Save setting</button>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-3" tabindex="-1" role="dialog" aria-labelledby="modal-3">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round "> 
					Edit Batch
				</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<form class="needs-validation" novalidate>
					
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationCustom01"> Name</label>
							<div class="">
								<input type="text" class="form-control" id="validationCustom01" placeholder="Batch name" required>
								<div class="valid-feedback bottom-unset">
									Looks good!
								</div>
								<div class="invalid-feedback bottom-unset">
									Name Required !!
								</div>
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="validationCustom02">Select Academic Year</label>
							<div class="">
								<select class="form-control" id="validationCustom02"required>
									<option>Select an academic year</option>
								</select>
								<div class="valid-feedback bottom-unset">
									Looks good!
								</div>
								<div class="invalid-feedback bottom-unset">
									Academic Year Required !!
								</div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationCustom01"> Start Date</label>
							<div class="">
								<input type="text" id="datepicker3" class="form-control" value="" placeholder="Start Date">
								<div class="valid-feedback bottom-unset">
									Looks good!
								</div>
								<div class="invalid-feedback bottom-unset">
									End Date Required !!
								</div>
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="validationCustom02">End Date</label>
							<div class="">
								<input type="text" id="datepicker4" class="form-control" value="" placeholder="End Date">
								<div class="valid-feedback bottom-unset">
									Looks good!
								</div>
								<div class="invalid-feedback bottom-unset">
									End Date Required !!
								</div>
							</div>
						</div>
					</div>
					<button class="btn btn-primary mt-4 d-block w-100" type="submit">Update Batch</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include_once('footer.php')?>