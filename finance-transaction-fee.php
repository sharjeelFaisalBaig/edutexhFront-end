

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
                    <li class="breadcrumb-item"><a href="finance-instant-fee_sub.php">Instant Fees</a></li>
					<li class="breadcrumb-item active" aria-current="page">Pay Fees</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-9 m-auto">
			<div class="ms-panel w-100">
				<div class="ms-panel-body">
					<div class="row mb-4">
						<div class="col-md-3">
							<label>Category</label>
							<select class="form-control">
								<option>Donation</option>
								<option>Library</option>
								<option>Hostel Fees</option>
							</select>
						</div>
						<div class="col-md-3">
							<label>Start Date</label>
							<input type="date" placeholder="" class="form-control" name="">
						</div>
						<div class="col-md-3">
							<label>End Date</label>
							<input type="date" placeholder="" class="form-control" name="">
						</div>
						
					</div>
					<div class="table-responsive">
						<table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered mb-0">
							<thead>
								<tr>
									<th>Receipt No.</th>
									<th>Name</th>
									<th>Amount</th>
									<th>Payment Date</th>
									<th>Payment Mode</th>
									<th></th>
								</tr>
							</thead>			
							<tbody>
								<tr>
									<td>Receipt14</td>
									<td>Aneez Azeez</td>
									<td>27750.00</td>
									<td>08/05/2020</td>
									<td>Cash</td>
									<td style="width: 114px;">
										<a href="javascript:void();" >
											<i class="far fa-file-pdf"></i>
										</a>
										<a href="javascript:void();" >
											<i class="fas fa-print"></i>
										</a>
										<a href="javascript:void();" >
											<i class="fas fa-history"></i>
										</a>
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



