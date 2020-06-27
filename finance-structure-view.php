

<!-- header -->

<?php require 'header.php';?>

<!-- header -->


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
                    <li class="breadcrumb-item"><a href="finance-fee-structure.php">Fees Structure</a></li>
					<li class="breadcrumb-item active" aria-current="page">View Fees Structure</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-9 m-auto">
			<div class="ms-panel w-100">
				<div class="ms-panel-body">
					<div class="table-responsive">
						<table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered">
							<thead>
								<tr>
									<th>S.No.</th>
									<th>Fees Name</th>
									<th>Amount (Rs)</th>
									<th>Date</th>
									<th></th>
								</tr>
							</thead>
										
							<tbody>
								<tr>
									<td class="font-weight-bold bg-secondary" colspan="5">General Fees</td>
								</tr>
								<tr>
									<td>0001</td>
									<td>
										<a href="finance-fees-details.php" class="nav-item">For the Year 2020</a>
									</td>
									<td>31500.00 / 31500.00</td>
									<td>Due on 09-05-2020</td>
									<td>
										<a href="finance-fee-invoice.php" class="nav-item">View Invoice</a>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="text-md-right">
							<a href="javascript:void();" class="btn btn-primary width70 m-auto">PDF Report</a>
							<a href="javascript:void();" class="btn btn-primary width70 m-auto">CSV Report</a>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>	

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



