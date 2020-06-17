<?php require_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Collaboration_sub.php">Collaboration</a></li>
					<li class="breadcrumb-item"><a href="Collaboration-Forms_sub.php">Forms</a></li>
					<li class="breadcrumb-item active" aria-current="page">Manage Forms</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-8 m-auto">
			<div class="ms-panel-body">
				<div class="form-row mb-3">
					<label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">Filter</label>
					<div class="col-md-2">
						<select class="form-control" id="validationCustom25" required="">
	                        <option value="">Select</option>
	                        <option value="">All</option>
	                        <option value="">Feedback</option>
	                        <option value="">Public</option>
	                        <option value="">Private</option>
	                    </select>
					</div>
				</div>
				<div class="table-responsive">
					<table id="data-table-4" class="table w-100 thead-primary table-bordered">
						<thead>
							<tr>
								<th>S.No</th>
								<th>Form Name</th>
								<th>Type</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>
									<a href="" class="nav-item" data-toggle="modal" data-target=".bd-example-modal-lg" >Introduction - PG - Pink</a>
								</td>
								<td>Private</td>
								<td>
									<a href="" class="nav-item">Close</a> |
									<a href="Form_Templates.php" class="nav-item">Edit</a> |
									<a href="" class="nav-item">Delete</a>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>
									<a href="" class="nav-item" data-toggle="modal" data-target=".bd-example-modal-lg2" >Gender Testing - 01</a>
								</td>
								<td>Feedback</td>
								<td>
									<a href="" class="nav-item">Close</a> |
									<a href="Form_Templates.php" class="nav-item">Edit</a> |
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

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round ">Introduction - PG - Pink</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<div class="row">
					<div class="col-md-12 text-right">
						<button type="button" class="btn btn-primary mb-2">Export as CSV</button>
					</div>
				</div>
				<div class="table-responsive">
					<table id="data-table-4" class="table w-100 thead-primary table-bordered">
						<thead>
							<tr>
								<th class="mybg-primary text-white">S.No</th>
								<th class="mybg-primary text-white">Introduction</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>My name is Abdul Samad.</td>
							</tr>
							<tr>
								<td>2</td>
								<td>My name is Mehtab parveen.</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round ">Gender Testing - 01</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<div class="row">
					<div class="col-md-12 text-right mb-2">
						<a href="Feedback_ConsolidatedReport.php" type="button" class="btn btn-primary">Consolidated Report</a>
						<a href="Feedback_Analysis.php" type="button" class="btn btn-primary">Analysis</a>
						<button type="button" class="btn btn-primary">Export as CSV</button>
					</div>
				</div>
				<div class="table-responsive">
					<table id="data-table-4" class="table w-100 thead-primary table-bordered">
						<thead>
							<tr>
								<th class="mybg-primary text-white">S.No</th>
								<th class="mybg-primary text-white">Gender</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Male</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Male</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include_once('footer.php')?>