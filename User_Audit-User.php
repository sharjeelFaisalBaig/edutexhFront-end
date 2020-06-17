<?php require_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Data_&_Reports_sub.php">Data & Reports</a></li>
					<li class="breadcrumb-item"><a href="DataAndReports-Audit_sub.php">Audit</a></li>
					<li class="breadcrumb-item"><a href="User_Audit.php">User Audit</a></li>
					<li class="breadcrumb-item active" aria-current="page">Abdul Samad</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-8 m-auto">
			<div class="ms-panel-body">

				<form class="needs-validation mb-3" novalidate>
					<div class="form-row">
						<div class="col-md-9">
							<div class="row">
								<div class="col-md-1">
									<label for="validationCustom03">Activity </label>
								</div>
								<div class="col-md-4">
									<strong>: Abdul Samad</strong>
								</div>
							</div>
							<div class="row my-2">
								<div class="col-md-1">
									<label for="validationCustom03">Date </label>
								</div>
								<div class="col-md-4">
									<strong>: 2020-05-09 To 2020-05-09</strong>
								</div>
							</div>
						</div>
					</div>
				</form>

				<div class="table-responsive">
					<table id="data-table-4" class="table w-100 thead-primary table-bordered">
						<thead>
							<tr>
								<th>Activity</th>
								<th>Module</th>
								<th>No of Visits</th>
								<th>Last Visited</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Login</td>	
								<td>User</td>	
								<td>2</td>
								<td>08/05/2020 09:51 PM <br> 1 days ago</td>	
							</tr>
							<tr>
								<td>Logout</td>	
								<td>User</td>	
								<td>2</td>
								<td>08/05/2020 09:51 PM <br> 1 days ago</td>	
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include_once('footer.php')?>