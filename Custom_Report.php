

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
				New Student Report
			</a>
			<a href="Custom_Report-employeeReport.php" class="btn btn-primary width70 m-auto" type="submit">
				New Employee Report
			</a>
		</div>

		<div class="col-md-8 m-auto">
			<div class="ms-panel-body">
				<div class="alert alert-warning text-center my-4">
					<strong>Report Created Successfully</strong>
			    </div>	

			    <div class="table-responsive">
					<table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered table-striped">
						<tbody>
							<tr>
								<td width="50">1</td>
								<td><a href="Custom_Report-ShowStdRep.php">Student Report</a></td>
								<td class="text-center" width="200">
									<a href="Custom_Report-ShowStdRep.php">Show Report</a> |
									<a href="">Delete</a>
								</td>
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



