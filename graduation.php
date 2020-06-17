<?php require_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-7">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
					<li class="breadcrumb-item"><a href="#">Administration</a></li>
					<li class="breadcrumb-item"><a href="#">Settings</a></li>
					<li class="breadcrumb-item"><a href="#">Manage Course /Batch</a></li>
					<li class="breadcrumb-item"><a href="#">Manage Batch</a></li>
					<li class="breadcrumb-item"><a href="#">Batch Transfer</a></li>
					<li class="breadcrumb-item"><a href="#">Batch Name xyz</a></li>

					<li class="breadcrumb-item active" aria-current="page"> Graduation</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-5 text-right">
			<a href="" class="btn btn-primary m-auto" data-toggle="modal" data-target="#modal-2" >Grading System</a>
			<a href="batchtransfer.php" class="btn btn-primary m-auto">Batch Transfer</a>
			<a href="revertbatch.php" class="btn btn-primary m-auto">Revert Batch Transfer</a>
		</div>
		<div class="col-md-8 m-auto">
			<div class="ms-panel">

				<div class="ms-panel-body">
					<div class="col-md-8 offset-3">
						<form class="needs-validation clearfix" novalidate="">

							<div class="form-row">

								<div class="col-xl-4 col-md-12 mb-3">
									<label for="validationCustom29">Status description:</label>
									<div class="input-group">
										<input type="text" class="form-control" name="">
									</div>
								</div>
								<div class="col-xl-4 col-md-12 mb-3">
									<label>Leaving Date</label>
									<input type="text" class="form-control" id="datepicker" name="">
								</div>
							</div>

						</form>
					</div>
					<div class="col-md-7 offset-3">
						<div class="table-responsive">
							<table class="table w-100 thead-primary table-bordered">
								<thead>
									<tr>
										<th>Admn No.</th>
										<th>Name</th>
										<th>Student &nbsp;
											<a href="">All, </a>
											<a href="">None</a>
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>S120</td>
										<td>Abdul Samad</td>
										<td>
											<input type="checkbox">
										</td>
									</tr>
									<tr>
										<td>S120</td>
										<td>Abdul Samad</td>
										<td>
											<input type="checkbox">
										</td>
									</tr>
									<tr>
										<td>S120</td>
										<td>Abdul Samad</td>
										<td>
											<input type="checkbox">
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="form-row">
							<div class="col-xl-4 offset-5 col-md-12">
								<button class="btn btn-primary mybtn" type="submit">Submit</button>
							</div>
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
				<h3 class="modal-title has-icon ms-icon-round "><i class="flaticon-share bg-primary text-white"></i> Add New Batch</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<form class="needs-validation" novalidate>
					
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationCustom01"> Name</label>
							<div class="input-group">
								<input type="text" class="form-control" id="validationCustom01" placeholder="Course name" required>
								<div class="valid-feedback">
									Looks good!
								</div>
								<div class="invalid-feedback">
									Name Required !!
								</div>
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="validationCustom02">Select Academic Year</label>
							<div class="input-group">
								<select class="form-control" id="validationCustom02"required>
									<option>Select an academic year</option>
								</select>
								<div class="valid-feedback">
									Looks good!
								</div>
								<div class="invalid-feedback">
									Academic Year Required !!
								</div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationCustom01"> Start Date</label>
							<div class="input-group">
								<input type="date" class="form-control" id="validationCustom01" placeholder="Course name" required>
								<div class="valid-feedback">
									Looks good!
								</div>
								<div class="invalid-feedback">
									Start Date Required !!
								</div>
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="validationCustom02">End Date</label>
							<div class="input-group">
								<input type="date" class="form-control" id="validationCustom01" placeholder="Course name" required>
								<div class="valid-feedback">
									Looks good!
								</div>
								<div class="invalid-feedback">
									End Date Required !!
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-check pl-0">
							<label class="ms-checkbox-wrap">
								<input class="form-check-input" type="checkbox" value="" id="invalidCheck1">
								<i class="ms-checkbox-check"></i>
							</label>
							<span> Improve Previous Batch Master </span>
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
				<h3 class="modal-title has-icon ms-icon-round "><i class="flaticon-share bg-primary text-white"></i> 
					Edit Batch
				</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<form class="needs-validation" novalidate>
					
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationCustom01"> Name</label>
							<div class="input-group">
								<input type="text" class="form-control" id="validationCustom01" placeholder="Course name" required>
								<div class="valid-feedback">
									Looks good!
								</div>
								<div class="invalid-feedback">
									Name Required !!
								</div>
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="validationCustom02">Select Academic Year</label>
							<div class="input-group">
								<select class="form-control" id="validationCustom02"required>
									<option>Select an academic year</option>
								</select>
								<div class="valid-feedback">
									Looks good!
								</div>
								<div class="invalid-feedback">
									Academic Year Required !!
								</div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationCustom01"> Start Date</label>
							<div class="input-group">
								<input type="date" class="form-control" id="validationCustom01" placeholder="Course name" required>
								<div class="valid-feedback">
									Looks good!
								</div>
								<div class="invalid-feedback">
									Start Date Required !!
								</div>
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="validationCustom02">End Date</label>
							<div class="input-group">
								<input type="date" class="form-control" id="validationCustom01" placeholder="Course name" required>
								<div class="valid-feedback">
									Looks good!
								</div>
								<div class="invalid-feedback">
									End Date Required !!
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-check pl-0">
							<label class="ms-checkbox-wrap">
								<input class="form-check-input" type="checkbox" value="" id="invalidCheck12">
								<i class="ms-checkbox-check"></i>
							</label>
							<span> Improve Previous Batch Master </span>
						</div>
					</div>
					<button class="btn btn-primary mt-4 d-block w-100" type="submit">Save</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include_once('footer.php')?>