

<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<div class="ms-panel-header pt-0">
				<h6 class="d-md-inline">Finance</h6> |  <small>Receipt Template</small>
				<a href="finance-receipt-template-new.php" class="btn btn-success float-md-right m-auto width70">New</a>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
		            <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
					<li class="breadcrumb-item"><a href="Administration-Finance_sub.php">Finance</a></li>
                    <li class="breadcrumb-item"><a href="Administration-Finance_settings_sub.php">Finance Settings</a></li>
					<li class="breadcrumb-item active" aria-current="page">Receipt Templates</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-8 m-auto">
			<div class="ms-panel w-100">
				<div class="ms-panel-body">
					<div class="alert alert-warning text-center mb-4">
						<strong>Receipt Set Created</strong>
					</div>
					<h6>Receipt Templates</h6>
					<small>Design custom templates with header and footer for fee receipts.</small>

					<div class="table-responsive mt-4">
						<table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered">
							<thead>
								<tr>
									<th colspan="2">Name</th>
								</tr>
							</thead>
										
							<tbody>
								<tr>
									<td>Academic Fees</td>
									<td width="200">
										<a href="finance-template-preview.php">Preview</a> |
										<a href="javascript:void();" class="nav-item" data-toggle="modal" data-target="#modal-1">Edit</a> |
										<a href="javascript:void();" class="nav-item">Delete</a>
									</td>
								</tr>
								<tr>
									<td>Hostel Fees</td>
									<td width="200">
										<a href="finance-template-preview.php">Preview</a> |
										<a href="javascript:void();" class="nav-item" data-toggle="modal" data-target="#modal-1">Edit</a> |
										<a href="javascript:void();" class="nav-item">Delete</a>
									</td>
								</tr>
								<tr>
									<td>Library Fees</td>
									<td width="200">
										<a href="finance-template-preview.php">Preview</a> |
										<a href="javascript:void();" class="nav-item" data-toggle="modal" data-target="#modal-1">Edit</a> |
										<a href="javascript:void();" class="nav-item">Delete</a>
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

<div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="modal-1">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round ">Create Receipt Set</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<form class="needs-validation mb-2" novalidate>
					<small>Create a new fee receipt here. Enter the optional sequence prefix and a starting number for this receipt set.</small>
					<div class="form-row mt-2">
						<div class="col-md-4">
							<label class="mt-2" for="validationCustom03">Name</label>
						</div>
						<div class="col-md-7">
							<div class="input-group">
								<input type="text" class="form-control" id="validationCustom03" placeholder="Academic Fees">
								<div class="invalid-feedback">This Field is Required</div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-4">
							<label class="mt-2" for="validationCustom03">Sequence Prefix</label>
						</div>
						<div class="col-md-7">
							<div class="input-group">
								<input type="text" class="form-control" id="validationCustom03" placeholder="ACA-">
								<div class="invalid-feedback">This Field is Required</div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-4">
							<label class="mt-2" for="validationCustom03">Starting Number</label>
						</div>
						<div class="col-md-7">
							<div class="input-group">
								<input type="text" class="form-control" id="validationCustom03" placeholder="001">
								<div class="invalid-feedback">This Field is Required</div>
							</div>
						</div>
					</div>
				</form>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-primary shadow-none" type="submit">Create Receipt Set</button>
				<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
			</div>

		</div>
	</div>
</div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



