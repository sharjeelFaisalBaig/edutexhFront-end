

<!-- header -->

<?php require 'header.php';?>

<!-- header -->

<style>
	.center-border::before {
		content: "";
	    display: block;
	    position: absolute;
	    z-index: 1;
	    left: 38px;
	    top: 0;
	    bottom: 0;
	    border: 1px solid #ccc;
	    border-width: 0 0 0 1px;
	}
</style>


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
		            <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
					<li class="breadcrumb-item"><a href="Administration-Finance_sub.php">Finance</a></li>
                    <li class="breadcrumb-item"><a href="Administration-Finance_fees_sub.php">Fees</a></li>
					<li class="breadcrumb-item active" aria-current="page">Fees Structure</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-9 m-auto">
			<div class="ms-panel w-100">
				<div class="ms-panel-body">
					<form class="needs-validation mb-5" novalidate>
						<div class="row">
							<div class="col-md-1">
								<label class="mt-2">Search</label>
							</div>
							<div class="col-md-3">
								<input type="text" class="form-control" placeholder="">
							</div>
							<div class="col-md-1">
								<div class="border-left center-border"></div>
							</div>
							<div class="col-md-1">
								<label class="mt-2">Batch</label>
							</div>
							<div class="col-md-3">
								<select class="form-control">
									<option>PG - Pink</option>
								</select>
							</div>
							<div class="col-md-1">
								<a href="javascript:void();" class="btn btn-primary width70 m-auto">View Students</a>
							</div>
						</div>
					</form>

					<div class="table-responsive">
						<table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered">
							<thead>
								<tr>
									<th>S.No.</th>
									<th>First Name</th>
									<th>Batch</th>
									<th>Addmission No</th>
									<th>Roll Number</th>
									<th>Fees</th>
									<th></th>
								</tr>
							</thead>
										
							<tbody>
								<tr>
									<td>0001</td>
									<td>Abdul Salam</td>
									<td>PG - Pink</td>
									<td>S50</td>
									<td>PG025</td>
									<td>0.00s</td>
									<td>
										<a href="finance-structure-view.php" class="nav-item">View Structure</a>
									</td>
								</tr>
								<tr>
									<td>0001</td>
									<td>Abdul Salam</td>
									<td>PG - Pink</td>
									<td>S50</td>
									<td>PG025</td>
									<td>0.00s</td>
									<td>
										<a href="finance-structure-view.php" class="nav-item">View Structure</a>
									</td>
								</tr>
								<tr>
									<td>0001</td>
									<td>Abdul Salam</td>
									<td>PG - Pink</td>
									<td>S50</td>
									<td>PG025</td>
									<td>0.00s</td>
									<td>
										<a href="finance-structure-view.php" class="nav-item">View Structure</a>
									</td>
								</tr>
								<tr>
									<td>0001</td>
									<td>Abdul Salam</td>
									<td>PG - Pink</td>
									<td>S50</td>
									<td>PG025</td>
									<td>0.00s</td>
									<td>
										<a href="finance-structure-view.php" class="nav-item">View Structure</a>
									</td>
								</tr>
								<tr>
									<td>0001</td>
									<td>Abdul Salam</td>
									<td>PG - Pink</td>
									<td>S50</td>
									<td>PG025</td>
									<td>0.00s</td>
									<td>
										<a href="finance-structure-view.php" class="nav-item">View Structure</a>
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

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



