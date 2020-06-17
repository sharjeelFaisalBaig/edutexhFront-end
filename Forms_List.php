<?php require_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Collaboration_sub.php">Collaboration</a></li>
					<li class="breadcrumb-item"><a href="Collaboration-Forms_sub.php">Forms</a></li>
					<li class="breadcrumb-item active" aria-current="page">Forms List</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-8 m-auto">
			<div class="ms-panel">

				<div class="ms-panel-body">
					<div class="alert alert-warning text-center my-4">
						<strong>Form Response Successfully Recorded</strong>
				    </div>
					<div class="table-responsive">
						<table id="data-table-4" class="table w-100 thead-primary">
							<thead>
								<tr>
									<th>S.No</th>
									<th>Form Name</th>
									<th>Type</th>
									<th>Status</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>
										<a href="" class="nav-item" data-toggle="modal" data-target="#modal-2">Introduction - PG - Pink</a>
									</td>
									<td>Private</td>
									<td>Submitted</td>
									<td>
										<a href="" class="nav-item" data-toggle="modal" data-target=".bd-example-modal-lg" >View Responses</a>
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
				<h6 class="modal-title has-icon ms-icon-round ">Introduction - PG - Pink</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<form class="needs-validation" novalidate>
					<div class="form-row">
						<div class="col-md-10">
							<label for="validationCustom01">Introduction <br>
							<small>Please Introduce Yourself</small></label>
							<div class="input-group">
								<textarea class="form-control" rows="5" required=""></textarea>
								<div class="valid-feedback">
									Looks good!
								</div>
								<div class="invalid-feedback">
									Field Required !!
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary shadow-none" type="submit">Submit</button>
				<button type="button" class="btn btn-light" data-dismiss="modal">Reset</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round ">Responses</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						<h6>Responses : Introduction - PG - Pink</h6>
					</div>
					<div class="col-md-6 text-right">
						<p>Edit</p>
					</div>
				</div>
				<div class="table-responsive">
					<table id="data-table-4" class="table w-100 thead-primary">
						<thead>
							<tr>
								<th class="mybg-primary text-white">S.No</th>
								<th class="mybg-primary text-white">Submitted at</th>
								<th class="mybg-primary text-white">Introduction</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>09 May 2020 <br> 09:34 AM</td>
								<td>My name is mehtab parveen.</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include_once('footer.php')?>