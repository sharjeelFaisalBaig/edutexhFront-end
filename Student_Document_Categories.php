<?php require_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-6">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
					<li class="breadcrumb-item"><a href="Administration-Settings_sub.php">Settings</a></li>
					<li class="breadcrumb-item active" aria-current="page">Student Document Categories</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-6 text-right">
			<button class="btn btn-primary m-auto topBtn" data-toggle="modal" data-target="#modal-2" >Add Category</button>
		</div>
		<div class="col-md-8 m-auto">
			<div class="ms-panel">
				<div class="ms-panel-header">
					<h6></h6>
					<small>Create categories for managing documents of students</small>
				</div>
				<div class="ms-panel-body">
					<div class="table-responsive">
						<table id="data-table-4" class="table w-100 thead-primary">
							<thead>
								<tr>
									<th>SI NO</th>
									<th>Document Categories</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Default</td>
									<td colspan="2">
										<a href="" class="nav-item" data-toggle="modal" data-target="#modal-3">Edit</a> |
										<a href="" class="nav-item">Delete</a>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Registration Document</td>
									<td colspan="2">
										<a href="" class="nav-item" data-toggle="modal" data-target="#modal-3">Edit</a> |
										<a href="" class="nav-item">Delete</a>
									</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Participation Certificate</td>
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
				<h6 class="modal-title has-icon ms-icon-round ">Create Student Document Category</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<form class="needs-validation" novalidate>
					<div class="form-row">
						<div class="col-md-6 offset-md-3">
							<label for="validationCustom01">Category name</label>
							<div class="input-group">
								<input type="text" class="form-control" id="validationCustom01" placeholder="Participation Certificate" required>
								<div class="valid-feedback">
									Looks good!
								</div>
								<div class="invalid-feedback">
									Course Name Required !!
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary shadow-none" type="submit">Save</button>
				<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-3" tabindex="-1" role="dialog" aria-labelledby="modal-3">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round ">Edit Student Document Category</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<form class="needs-validation" novalidate>
					<div class="form-row">
						<div class="col-md-6 offset-md-3">
							<label for="validationCustom01">Category name</label>
							<div class="input-group">
								<input type="text" class="form-control" id="validationCustom01" placeholder="Participation Certificate" required>
								<div class="valid-feedback">
									Looks good!
								</div>
								<div class="invalid-feedback">
									Course Name Required !!
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary shadow-none" type="submit">Save</button>
				<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>
<?php include_once('footer.php')?>