

<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
					<li class="breadcrumb-item"><a href="Administration-Settings_sub.php">Settings</a></li>
					<li class="breadcrumb-item active" aria-current="page">Manage Student Category</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-8 m-auto">
			<div class="ms-panel w-100">
				<div class="ms-panel-body">
					<form class="needs-validation mb-5" novalidate>
						<div class="form-row">
							<div class="col-md-6 m-auto">
								<label for="validationCustom03">Enter New Category :</label>
								<div class="input-group">
									<input type="text" class="form-control" id="validationCustom03" placeholder="Category" required>
									<div class="invalid-feedback">This Field is Required</div>
                                    <button class="btn btn-primary width70 m-0" type="submit">Save</button>
								</div>

							</div>
						</div>
					</form>

					<div class="table-responsive">
						<table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered table-striped">
							<thead>
								<tr>
									<th>S.No</th>
									<th>Student Category</th>
									<th>Action</th>
								</tr>
							</thead>
										
							<tbody>
								<tr>
									<td>0001</td>
									<td>Regular</td>
									<td colspan="2">
										<a href="" class="nav-item" data-toggle="modal" data-target="#modal-3">Edit</a> |
										<a href="" class="nav-item">Delete</a>
									</td>
								</tr>
								<tr>
									<td>0002</td>
									<td>Financial Weak Student</td>
									<td colspan="2">
										<a href="" class="nav-item" data-toggle="modal" data-target="#modal-3">Edit</a> |
										<a href="" class="nav-item">Delete</a>
									</td>
								</tr>
								<tr>
									<td>0003</td>
									<td>Sibling Child</td>
									<td colspan="2">
										<a href="" class="nav-item" data-toggle="modal" data-target="#modal-3">Edit</a> |
										<a href="" class="nav-item">Delete</a>
									</td>
								</tr>
								<tr>
									<td>0004</td>
									<td>Staff Child</td>
									<td colspan="2">
										<a href="" class="nav-item" data-toggle="modal" data-target="#modal-3">Edit</a> |
										<a href="" class="nav-item">Delete</a>
									</td>
								</tr>
								<tr>
									<td>0005</td>
									<td>Non-Muslim Child</td>
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

<div class="modal fade" id="modal-3" tabindex="-1" role="dialog" aria-labelledby="modal-3">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round ">Edit Student Category </h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<form class="needs-validation mb-2" novalidate>
					<div class="form-row">
						<div class="col-md-6 offset-md-3">
							<label for="validationCustom03">Enter New Category :</label>
							<div class="input-group">
								<input type="text" class="form-control" id="validationCustom03" placeholder="Category" required>
								<div class="invalid-feedback">This Field is Required</div>
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

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



