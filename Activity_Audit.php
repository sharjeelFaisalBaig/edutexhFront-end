<?php require_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Data_&_Reports_sub.php">Data & Reports</a></li>
					<li class="breadcrumb-item"><a href="DataAndReports-Audit_sub.php">Audit</a></li>
					<li class="breadcrumb-item active" aria-current="page">Activity Audit</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-8 m-auto">

			<div class="ms-panel-body">
				
				<form class="needs-validation mb-5" novalidate>
					<div class="form-row">
						<div class="col-md-2">
							<!-- <label for="validationCustom03">Enter New Category :</label> -->
							<div class="input-group">
								<select class="form-control" id="validationCustom25" required="">
									<option value="">Today</option>
									<option value="">Last Week</option>
									<option value="">Last Month</option>
									<option value="">Last 3 Months</option>
									<option value="">Last 6 Months</option>
									<option value="">1 Year</option>
								</select>
								<div class="invalid-feedback">This Field is Required</div>
								<div class="valid-feedback">Looks good!</div>
							</div>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control" id="datepicker" name="" placeholder="Custom Date">
						</div>
					</div>
				</form>

				<div class="table-responsive">
					<table id="data-table-4" class="table w-100 thead-primary table-bordered">
						<thead>
							<tr>
								<th>Activity Name</th>
								<th>Module</th>
								<th>No of Visits</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><a href="Activity_Audit-Login.php">Login</a></td>
								<td>User</td>
								<td>14</td>
							</tr>
							<tr>
								<td><a href="">Logout</a></td>
								<td>User</td>
								<td>13</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include_once('footer.php')?>