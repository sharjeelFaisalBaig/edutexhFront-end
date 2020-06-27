

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
                    <li class="breadcrumb-item"><a href="finance-fee-defaulters.php">Fees Defaulters</a></li>
					<li class="breadcrumb-item active" aria-current="page">Abdul Salam</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-10 m-auto">
			<div class="ms-panel w-100">
				<div class="ms-panel-body">
					<div class="row">
						<div class="col-md-3">
							<strong>Fee Category Name</strong>
							<strong class="float-right ml-md-5">:</strong>
						</div>
						<div class="col-md-5">
							<strong>Tution Fees</strong>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<strong>Student Category</strong>
							<strong class="float-right ml-md-5">:</strong>
						</div>
						<div class="col-md-5">
							<strong>N.A</strong>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<strong>Fee Collection Name</strong>
							<strong class="float-right ml-md-5">:</strong>
						</div>
						<div class="col-md-5">
							<strong>July</strong>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 offset-md-4">
							<div class="form-row my-4">
								<div class="col-md-7">
									<label class="font-weight-bold mt-2">Due date has been exceeded. Please collect fine amount.</label>
								</div>
								<div class="col-md-3">
									<input type="text" class="form-control" name="">
								</div>
								<div class="col-md-2 text-md-right">
									<a href="javascript:void(0);" class="btn btn-primary width70 m-auto">Add Fine</a>
								</div>
							</div>
						</div>
					</div>

					<div class="table-responsive">
						<table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered mb-0">
							<thead>
								<tr>
									<th class="w-10">S.No.</th>
									<th class="w-50">Particulars</th>
									<th class="w-10">Amount (Rs)</th>
								</tr>
							</thead>			
							<tbody>
								<tr>
									<td class="w-10 bg-secondary"></td>
									<td class="font-weight-bold bg-secondary" colspan="2">Batch-wise</td>
								</tr>
								<tr>
									<td class="w-10">1</td>
									<td class="">Uniform Fee</td>
									<td class="w-10 text-md-right">1500.00</td>
								</tr>
								<tr>
									<td class="w-10">2</td>
									<td class="">Term 1 Fee</td>
									<td class="w-10 text-md-right">15000.00</td>
								</tr>
								<tr>
									<td class="w-10">3</td>
									<td class="">Term 2 Fee</td>
									<td class="w-10 text-md-right">15000.00</td>
								</tr>
								<tr>
									<td class="font-weight-bold text-md-right bg-secondary cursor-pointer" colspan="3">
										<i class="fas fa-plus"></i> Add Particular
									</td>
								</tr>
								<tr>
									<td class="font-weight-bold text-md-right bg-secondary cursor-pointer" colspan="3">
										<i class="fas fa-plus"></i> Add Discount
									</td>
								</tr>
								<tr>
									<td class="border-right-0 bg-secondary"></td>
									<td class="font-weight-bold border-left-0 bg-secondary" colspan="2">
										Summary
									</td>
								</tr>
								<tr>
									<td class="w-10">1</td>
									<td class="">Total Fees</td>
									<td class="w-10 text-md-right">31500.00</td>
								</tr>
								<tr>
									<td class="w-10">2</td>
									<td class="">Total Discount</td>
									<td class="w-10 text-md-right">0.00</td>
								</tr>
								<tr>
									<td class="font-weight-bold text-md-right" colspan="2">
										Total Amount to Pay
									</td>
									<td class="font-weight-bold text-md-right">31500.00</td>
								</tr>
								<tr>
									<td class="font-weight-bold text-md-right" colspan="2">
										Total Amount Paid
									</td>
									<td class="font-weight-bold text-md-right">0.00</td>
								</tr>
								<tr>
									<td class="font-weight-bold text-md-right" colspan="2">
										Total Due Amount
									</td>
									<td class="font-weight-bold text-md-right">31500.00</td>
								</tr>
							</tbody>
						</table>
					</div>


					<div class="bg-secondary p-3">
						<div class="row mt-0 mb-3">
		                    <div class="col-md-3">
		                    	<label class="font-weight-bold">Payment Mode</label>
		                        <select class="form-control">
		                            <option selected="">Cash</option>
		                        </select>
		                    </div>
		                    <div class="col-md-4">
		                    	<label class="font-weight-bold">Reference Number</label>
		                        <input type="number" class="form-control"/>
		                    </div>
		                    <div class="col-md-2 offset-md-3 text-md-right">
		                    	<label class="font-weight-bold">Amount</label>
		                    	<input type="text" class="form-control" placeholder="31500.00" name="">
		                    </div>
		                </div>
		                <div class="row mt-0">
		                    <div class="col-md-3">
		                    	<label class="font-weight-bold">Payment Date</label>
		                        <input type="date" class="form-control"/>
		                    </div>
		                    <div class="col-md-5">
		                    	<label class="font-weight-bold">Payment Notes</label>
		                        <textarea name="" id="" cols="" rows="1" class="form-control"></textarea>
		                    </div>
		                    <div class="col-md-3 offset-md-1">
		                        <a href=".php" class="btn btn-primary width70 mt30">Print Summary</a>
		                        <a href="PayFeeButton.php" class="btn btn-primary width70 ml-2 mt30">Pay Fees</a>
		                    </div>
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



