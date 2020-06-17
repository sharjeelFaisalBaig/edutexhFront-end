

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
		            <li class="breadcrumb-item"><a href="Data_&_Reports_sub.php">Data and Reports</a></li>
		            <li class="breadcrumb-item active" aria-current="page">Custom Report</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-6 text-right">
			<a href="Custom_Report-studentReport.php" class="btn btn-primary width70 m-auto" type="submit">
				Show All Reports
			</a>
			<a href="Custom_Report-employeeReport.php" class="btn btn-primary width70 m-auto" type="submit">
				Export CSV
			</a>
		</div>

		<div class="col-md-8 m-auto">
			<div class="ms-panel-body">
				<h6>Custom Reports  | <small>Student Report</small></h6>	
				<div class="table-responsive mt-4">
					<table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered">
						<thead>
							<tr>
								<th>S.No</th>
								<th>
									First Name
									<span class="float-right text-white">
										<i class="fas fa-long-arrow-alt-down"></i>
									</span> 
								</th>
								<th>
									Addmission Date
									<span class="float-right text-white">
										<i class="fas fa-long-arrow-alt-down"></i>
									</span> 
								</th>
								<th>
									Country
									<span class="float-right text-white">
										<i class="fas fa-long-arrow-alt-down"></i>
									</span> 
								</th>
								<th>
									Batch
									<span class="float-right text-white">
										<i class="fas fa-long-arrow-alt-down"></i>
									</span> 
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Muhammad Kaleem</td>
								<td>09/05/2020</td>
								<td>Pakistan</td>
								<td>PG - Pink</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Muhammad Kaleem</td>
								<td>09/05/2020</td>
								<td>Pakistan</td>
								<td>PG - Pink</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Muhammad Kaleem</td>
								<td>09/05/2020</td>
								<td>Pakistan</td>
								<td>PG - Pink</td>
							</tr>
						</tbody>
					</table>
				</div>		
			</div>
		</div>

	</div>
</div>


<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



