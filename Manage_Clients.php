

<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-6">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
					<li class="breadcrumb-item"><a href="Administration-Settings_sub.php">Settings</a></li>
					<li class="breadcrumb-item"><a href="Manage_ClientsEmpty.php">Clients Apps</a></li>
					<li class="breadcrumb-item active" aria-current="page">New</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-6 text-right">
			<a href="" class="btn btn-primary topBtn m-auto" data-toggle="modal" data-target="#modal-2" >New</a>
		</div>

		<div class="col-md-6 offset-md-3">
			<div class="ms-panel w-100">
				<div class="ms-panel-header">
					<div class="row">
						<div class="col-md-6">
							<h6>Manage Clients</h6>
						</div>
					</div>
				</div>

				<div class="ms-panel-body">
					<form class="needs-validation mb-5" novalidate>
						<div class="form-row">
							<div class="col-md-6 offset-md-3">
								<label for="validationCustom03">Client Name</label>
								<div class="input-group">
									<input type="text" class="form-control" id="validationCustom03" placeholder="News Paper" required>
									<div class="invalid-feedback">This Field is Required</div>
								</div>
								<label for="validationCustom03">Redirect URL</label>
								<div class="input-group">
									<input type="text" class="form-control" id="validationCustom03" placeholder="http://www.thekawish.com/beta/" required>
									<div class="invalid-feedback">This Field is Required</div>
								</div>
								<ul class="ms-list ms-task-block">
									<li class="ms-list-item">
										<label class="ms-checkbox-wrap">
											<input type="checkbox" value="" checked=""> 
											<i class="ms-checkbox-check"></i>
										</label>
										<span class="text-disabled">Verified?</span>
									</li>
								</ul>
								<button class="btn btn-primary" type="submit">Save</button>
							</div>
						</div>
					</form>

					<div class="table-responsive ms-card">
						<table id="data-table-4" class="table w-100 thead-primary">
							<thead>
								<tr>
									<th>S.No</th>
									<th>Client Name</th>
									<th>Redirect URL</th>
									<th>Action</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td>0001</td>
									<td>News Paper</td>
									<td>http://www.thekawish.com/beta/</td>
									<td colspan="2">
										<a href="" class="nav-item" data-toggle="modal" data-target="#modal-3">Edit</a> |
										<a href="" class="nav-item">Delete</a>
									</td>
								</tr>
								<tr>
									<td>0002</td>
									<td>News Paper</td>
									<td>http://www.thekawish.com/beta/</td>
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

<div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="modal-2">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round ">New Clients </h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<form class="needs-validation" novalidate>
					<div class="form-row">
						<div class="col-md-6 offset-md-3">
							<label for="validationCustom03">Client Name</label>
							<div class="input-group">
								<input type="text" class="form-control" id="validationCustom03" placeholder="News Paper" required>
								<div class="invalid-feedback">This Field is Required</div>
							</div>
							<label for="validationCustom03">Redirect URL</label>
							<div class="input-group">
								<input type="text" class="form-control" id="validationCustom03" placeholder="http://www.thekawish.com/beta/" required>
								<div class="invalid-feedback">This Field is Required</div>
							</div>
							<ul class="ms-list ms-task-block">
								<li class="ms-list-item">
									<label class="ms-checkbox-wrap">
										<input type="checkbox" value="" checked=""> 
										<i class="ms-checkbox-check"></i>
									</label>
									<span class="text-disabled">Verified?</span>
								</li>
							</ul>
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
				<h6 class="modal-title has-icon ms-icon-round "> Edit Clients </h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<form class="needs-validation" novalidate>
					<div class="form-row">
						<div class="col-md-6 offset-md-3">
							<label for="validationCustom03">Client Name</label>
							<div class="input-group">
								<input type="text" class="form-control" id="validationCustom03" placeholder="News Paper" required>
								<div class="invalid-feedback">This Field is Required</div>
							</div>
							<label for="validationCustom03">Redirect URL</label>
							<div class="input-group">
								<input type="text" class="form-control" id="validationCustom03" placeholder="http://www.thekawish.com/beta/" required>
								<div class="invalid-feedback">This Field is Required</div>
							</div>
							<ul class="ms-list ms-task-block">
								<li class="ms-list-item">
									<label class="ms-checkbox-wrap">
										<input type="checkbox" value="" checked=""> 
										<i class="ms-checkbox-check"></i>
									</label>
									<span class="text-disabled">Verified?</span>
								</li>
							</ul>
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



