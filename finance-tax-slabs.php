

<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<div class="ms-panel-header pt-0">
				<h6 class="d-md-inline">Finance</h6> |  <small>Tax Slabs</small>
				<a href="javascript:void();" data-toggle="modal" data-target="#modal-1" class="btn btn-success float-md-right m-auto width70">New Slab</a>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
		            <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
					<li class="breadcrumb-item"><a href="Administration-Finance_sub.php">Finance</a></li>
                    <li class="breadcrumb-item"><a href="Administration-Finance_tax_sub.php">Tax</a></li>
					<li class="breadcrumb-item active" aria-current="page">Tax Slabs</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-8 m-auto">
			<div class="ms-panel w-100">
				<div class="ms-panel-body">
					<div class="alert alert-warning text-center mb-4">
						<strong>Tax Slab Created</strong>
					</div>
					<h6>Tax Slabs</h6>
					<small>Create and manage applicable tax slabs.</small>

					<div class="table-responsive mt-4">
						<table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered">
							<thead>
								<tr>
									<th>Name</th>
									<th>Rate (%)</th>
									<th>Description</th>
									<th width="200"></th>
								</tr>
							</thead>
										
							<tbody>
								<tr>
									<td>GST</td>
									<td>18.00</td>
									<td>GST for Pakistan</td>
									<td>
										<a href="javascript:void();" class="nav-item" data-toggle="modal" data-target="#modal-2"><del>Edit Slab</del></a> |
										<a href="javascript:void();" class="nav-item"><del>Delete Slab</del></a>
									</td>
								</tr>
								<tr>
									<td>GST</td>
									<td>18.00</td>
									<td>GST for Pakistan</td>
									<td>
										<a href="javascript:void();" class="nav-item" data-toggle="modal" data-target="#modal-2">Edit Slab</a> |
										<a href="javascript:void();" class="nav-item">Delete Slab</a>
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
				<h6 class="modal-title has-icon ms-icon-round ">Create Tax Slab</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<form class="needs-validation" novalidate>
					<small>Tax slab create description.</small>
					<div class="form-row mt-2">
						<div class="col-md-4">
							<label class="mt-2" for="validationCustom03">Name</label>
						</div>
						<div class="col-md-7">
							<div class="input-group">
								<input type="text" class="form-control" id="validationCustom03" placeholder="GST on Education in Pakistan">
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-4">
							<label class="mt-2" for="validationCustom03">Rate</label>
						</div>
						<div class="col-md-7">
							<div class="input-group">
								<input type="text" class="form-control" id="validationCustom03" placeholder="17">
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-4">
							<label class="mt-2" for="validationCustom03">Description</label>
						</div>
						<div class="col-md-7">
							<div class="input-group">
								<textarea rows="4" class="form-control" placeholder="GST has been revised in 2019 by PTI Government"></textarea>
							</div>
						</div>
					</div>
				</form>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-primary shadow-none" type="submit">Create Tax Slab</button>
				<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
			</div>

		</div>
	</div>
</div>
<div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="modal-1">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round ">Edit Tax Slab</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<form class="needs-validation" novalidate>
					<small>Tax slab create description.</small>
					<div class="form-row mt-2">
						<div class="col-md-4">
							<label class="mt-2" for="validationCustom03">Name</label>
						</div>
						<div class="col-md-7">
							<div class="input-group">
								<input type="text" class="form-control" id="validationCustom03" placeholder="GST on Education in Pakistan">
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-4">
							<label class="mt-2" for="validationCustom03">Rate</label>
						</div>
						<div class="col-md-7">
							<div class="input-group">
								<input type="text" class="form-control" id="validationCustom03" placeholder="17">
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-4">
							<label class="mt-2" for="validationCustom03">Description</label>
						</div>
						<div class="col-md-7">
							<div class="input-group">
								<textarea rows="4" class="form-control" placeholder="GST has been revised in 2019 by PTI Government"></textarea>
							</div>
						</div>
					</div>
				</form>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-primary shadow-none" type="submit">Update Tax Slab</button>
				<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
			</div>

		</div>
	</div>
</div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



