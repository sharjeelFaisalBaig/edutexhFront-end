

<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<div class="ms-panel-header pt-0">
				<h6 class="d-md-inline">Asset Liability Management</h6> |  <small>Liability View</small>
				<a href="javascript:void();" class="btn btn-success float-md-right m-auto width70">PDF Report</a>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
					<li class="breadcrumb-item"><a href="Administration-Finance_sub.php">Finance</a></li>
					<li class="breadcrumb-item"><a href="Administration-Finance_assetLiability_sub.php">Asset Liability Management</a></li>
					<li class="breadcrumb-item active" aria-current="page">View Liability</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-8 m-auto">
			<div class="ms-panel w-100">
				<div class="ms-panel-body">
					<div class="table-responsive mt-4">
						<div class="alert alert-warning text-center mb-4">
							<strong>Liability Updated Successfully</strong>
						</div>
						<table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered">
							<thead>
								<tr>
									<th>Liability</th>
									<th>Created at</th>
									<th>Total Amount</th>
									<th></th>
								</tr>
							</thead>	
							<tbody>
								<tr>
									<td>Bank Loan</td>
									<td>11/05/2020</td>
									<td>Rs 500000.00</td>
									<td>
										<a href="javascript:void();" class="nav-item" data-toggle="modal" data-target="#modal-2">Edit</a> |
										<a href="javascript:void();" class="nav-item">Delete</a>
									</td>
								</tr>
								<tr>
									<td>Bank Loan</td>
									<td>11/05/2020</td>
									<td class="text-disabled" style="cursor: not-allowed;">Rs 500000.00</td>
									<td>
										<a href="javascript:void();" class="nav-item" data-toggle="modal" data-target="#modal-2">Edit</a> |
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

<div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="modal-1">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round ">Edit Liability</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<form class="needs-validation" novalidate>
					<div class="form-row mt-2">
						<div class="col-md-4">
							<label class="mt-2" for="validationCustom03">Title :</label>
						</div>
						<div class="col-md-6">
							<div class="input-group">
								<input type="text" class="form-control" id="validationCustom03" placeholder="Bank Loan">
							</div>
						</div>
						<div class="col-md-4">
							<label class="mt-2" for="validationCustom03">Description :</label>
						</div>
						<div class="col-md-6">
							<div class="input-group">
								<input type="text" class="form-control" id="validationCustom03" placeholder="HBL Loan">
							</div>
						</div>
						<div class="col-md-4">
							<label class="mt-2" for="validationCustom03">Amount :</label>
						</div>
						<div class="col-md-6">
							<div class="input-group">
								<input type="text" class="form-control" id="validationCustom03" placeholder="5000000">
							</div>
						</div>
                        <div class="col-md-4">
                            <label class="mt-2">Solve this Liability? </label>
                        </div>
                        <div class="col-md-6">
                            <input class="form-control ml-5" style="margin-top: 12px;" type="checkbox">
							<a href="javascript:void();" class="btn btn-primary width70 mt-4">Save</a>
                        </div>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



