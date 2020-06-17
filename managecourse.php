<?php require_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-6">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb pl-0">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
							<li class="breadcrumb-item"><a href="Administration-Settings_sub.php">Settings</a></li>
							<li class="breadcrumb-item"><a href="Administration-Settings_courseBatch_sub.php">Manage Course /Batch</a></li>
							<li class="breadcrumb-item active" aria-current="page">Manage Course</li>
						</ol>
					</nav>
				</div>
				<div class="col-6 text-right">
					<a href="" class="btn btn-primary theme-btn m-auto topBtn" data-toggle="modal" data-target="#modal-2" >New</a>
				</div>
			</div>
		</div>
		<div class="col-md-8 m-auto">
			<div class="ms-panel">

				<div class="ms-panel-body mt-5">
					<div class="table-responsive">
						<table id="data-table-4" class="table w-100 thead-primary table-bordered">
							<thead>
								<tr>
									<th>S.No</th>
									<th>Course Name</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td><a href="batch.php">Play Group</a></td>
									<td colspan="2">
										<a href="" class="nav-item" data-toggle="modal" data-target="#modal-3">Edit</a> |
										<a href="" class="nav-item">Delete</a>
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
<div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="modal-3">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round ">Add New Course</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<form class="needs-validation" novalidate>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationCustom01">Course Name</label>
							<div class="">
								<input type="text" class="form-control" id="validationCustom01" placeholder="Course name" required>
								<div class="valid-feedback bottom-unset">
									Looks good!
								</div>
								<div class="invalid-feedback bottom-unset">
									Course Name Required !!
								</div>
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="validationCustom02">Section Name</label>
							<div class="">
								<input type="text" class="form-control" id="validationCustom02" placeholder="Section name" required>
								<div class="valid-feedback bottom-unset">
									Looks good!
								</div>
								<div class="invalid-feedback bottom-unset">
									Section Name Required !!
								</div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationCustom01">Code</label>
							<div class="">
								<input type="text" class="form-control" id="validationCustom01" placeholder="Code" required>
								<div class="valid-feedback bottom-unset">
									Looks good!
								</div>
								<div class="invalid-feedback bottom-unset">
									Code Required !!
								</div>
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="validationCustom02">Grading System Type</label>
							<div class="">
								<select class="form-control" id="validationCustom02"required>
									<option>Normal</option>
								</select>
								<div class="valid-feedback bottom-unset">
									Looks good!
								</div>
								<div class="invalid-feedback bottom-unset">
									Grading System Required !!
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-check pl-0">
							<label class="ms-checkbox-wrap">
								<input class="form-check-input" type="checkbox" value="" id="invalidCheck">
								<i class="ms-checkbox-check"></i>
							</label>
							<span> Enable Elective Subjects Selection </span>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="form-row">
								<div class="col-md-12">
									<h6>Initial Batch Detail</h6>
									<hr>
								</div>
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
										<input type="text" id="datepicker" class="form-control" value="" placeholder="Start Date">
										<div class="valid-feedback bottom-unset">
											Looks good!
										</div>
										<div class="invalid-feedback bottom-unset">
											Start Date Required !!
										</div>
									</div>
								</div>
								<div class="col-md-6 mb-3">
									<label for="validationCustom02">End Date</label>
									<div class="">
										<input type="text" id="datepicker2" class="form-control" value="" placeholder="End Date">
										<div class="valid-feedback bottom-unset">
											Looks good!
										</div>
										<div class="invalid-feedback bottom-unset">
											End Date Required !!
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<button class="btn btn-primary mt-4 d-block w-100" type="submit">Save</button>
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
					Edit Course
				</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<form class="needs-validation" novalidate>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationCustom01">Course Name</label>
							<div class="">
								<input type="text" class="form-control" id="validationCustom01" placeholder="Course name" required>
								<div class="valid-feedback bottom-unset">
									Looks good!
								</div>
								<div class="invalid-feedback bottom-unset">
									Course Name Required !!
								</div>
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="validationCustom02">Section Name</label>
							<div class="">
								<input type="text" class="form-control" id="validationCustom02" placeholder="Section name" required>
								<div class="valid-feedback bottom-unset">
									Looks good!
								</div>
								<div class="invalid-feedback bottom-unset">
									Section Name Required !!
								</div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationCustom01">Code</label>
							<div class="">
								<input type="text" class="form-control" id="validationCustom01" placeholder="Code" required>
								<div class="valid-feedback bottom-unset">
									Looks good!
								</div>
								<div class="invalid-feedback bottom-unset">
									Code Required !!
								</div>
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="validationCustom02">Grading System Type</label>
							<div class="">
								<select class="form-control" id="validationCustom02"required>
									<option>Normal</option>
								</select>
								<div class="valid-feedback bottom-unset">
									Looks good!
								</div>
								<div class="invalid-feedback bottom-unset">
									Grading System Required !!
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-check pl-0">
							<label class="ms-checkbox-wrap">
								<input class="form-check-input" type="checkbox" value="" id="invalidCheck">
								<i class="ms-checkbox-check"></i>
							</label>
							<span> Enable Elective Subjects Selection </span>
						</div>
					</div>
					<button class="btn btn-primary mt-4 d-block w-100" type="submit">Update Course</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include_once('footer.php')?>