<?php require_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Data_&_Reports_sub.php">Data & Reports</a></li>
					<li class="breadcrumb-item"><a href="DataAndReports-Audit_sub.php">Audit</a></li>
					<li class="breadcrumb-item"><a href="Activity_Audit.php">Activity Audit</a></li>
					<li class="breadcrumb-item active" aria-current="page">Login</li>
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
									<strong>: User</strong>
								</div>
							</div>
							<div class="row my-2">
								<div class="col-md-1">
									<label for="validationCustom03">Date </label>
								</div>
								<div class="col-md-4">
									<strong>: 09/05/2020 To 09/05/2020</strong>
								</div>
							</div>
							
						</div>
						<div class="col-md-3 text-right">
							<input type="text" class="form-control" name="" placeholder="Search Username">
						</div>
					</div>
				</form>

				<div class="table-responsive">
					<table id="data-table-4" class="table w-100 thead-primary table-bordered">
						<thead>
							<tr>
								<th>Username</th>
								<th>No of Visits</th>
								<th>Last Visited</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><a href="Activity_AuditUser.php">Mehtan Parveen</a></td>
								<td>1</td>
								<td>08/05/2020 7:34 PM <br> 1 days ago</td>
							</tr>
							<tr>
								<td><a href="">Deleted User</a></td>
								<td>5</td>
								<td>08/05/2020 7:34 PM <br> 1 days ago</td>
							</tr>
							<tr>
								<td><a href="">admin</a></td>
								<td>4</td>
								<td>08/05/2020 7:34 PM <br> 1 days ago</td>
							</tr>
							<tr>
								<td><a href="">S1</a></td>
								<td>2</td>
								<td>08/05/2020 7:34 PM <br> 1 days ago</td>
							</tr>
							<tr>
								<td><a href="">E1</a></td>
								<td>3</td>
								<td>08/05/2020 7:34 PM <br> 1 days ago</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include_once('footer.php')?>