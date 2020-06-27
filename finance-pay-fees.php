

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
							<label>Paid by:</label>
							<select class="form-control">
								<option>Student</option>
								<option>Employee</option>
								<option>Guest</option>
							</select>
						</div>
						<div class="col-md-3">
							<label>Search:</label>
							<input type="text" placeholder="" class="form-control" name="">
						</div>
						<div class="col-md-3">
							<label>Category:</label>
							<select class="form-control">
								<option>Hostel Fees</option>
							</select>
						</div>
					</div>
					<div class="table-responsive">
						<table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered mb-0">
							<thead>
								<tr>
									<th>S.No.</th>
									<th class="" style="width: 35%;">Particulars</th>
									<th>Amount</th>
									<th>Discount (%)</th>
									<th class="w-10">Tax (%)</th>
									<th>Total Amount</th>
								</tr>
							</thead>			
							<tbody>
								<tr>
									<td class="border-right-0">1</td>
									<td class="border-right-0 border-left-0">Tution Fees</td>
									<td class="border-right-0 border-left-0"><input type="text" class="form-control py-0" placeholder="5000.00"></td>
									<td class="border-right-0 border-left-0"><input type="text" class="form-control py-0" placeholder="0.00"></td>
									<td class="border-right-0 border-left-0">-</td>
									<td class="border-left-0">
										<input type="text" class="form-control py-0 d-inline-block w-75" placeholder="5000.00">
										<input class="form-check-input ml-3 mt-2" type="checkbox" id="inlineCheckbox1" value="option1">
									</td>
								</tr>
								<tr>
									<td class="border-right-0">2</td>
									<td class="border-right-0 border-left-0">Uniform Fees</td>
									<td class="border-right-0 border-left-0"><input type="text" class="form-control py-0" placeholder="5000.00"></td>
									<td class="border-right-0 border-left-0"><input type="text" class="form-control py-0" placeholder="0.00"></td>
									<td class="border-right-0 border-left-0">-</td>
									<td class="border-left-0">
										<input type="text" class="form-control py-0 d-inline-block w-75" placeholder="5000.00">
										<input class="form-check-input ml-3 mt-2" type="checkbox" id="inlineCheckbox1" value="option1">
									</td>
								</tr>
								<tr>
									<td class="border-right-0">3</td>
									<td class="border-right-0 border-left-0">Books Fees</td>
									<td class="border-right-0 border-left-0"><input type="text" class="form-control py-0" placeholder="5000.00"></td>
									<td class="border-right-0 border-left-0"><input type="text" class="form-control py-0" placeholder="0.00"></td>
									<td class="border-right-0 border-left-0">-</td>
									<td class="border-left-0">
										<input type="text" class="form-control py-0 d-inline-block w-75" placeholder="5000.00">
										<input class="form-check-input ml-3 mt-2" type="checkbox" id="inlineCheckbox1" value="option1">
									</td>
								</tr>
								<tr>
									<td class="border-right-0">4</td>
									<td class="border-right-0 border-left-0">registration Fees</td>
									<td class="border-right-0 border-left-0"><input type="text" class="form-control py-0" placeholder="5000.00"></td>
									<td class="border-right-0 border-left-0"><input type="text" class="form-control py-0" placeholder="0.00"></td>
									<td class="border-right-0 border-left-0">-</td>
									<td class="border-left-0">
										<input type="text" class="form-control py-0 d-inline-block w-75" placeholder="5000.00">
										<input class="form-check-input ml-3 mt-2" type="checkbox" id="inlineCheckbox1" value="option1">
									</td>
								</tr>
								<tr>
									<td class="font-weight-bold text-md-right bg-secondary cursor-pointer" colspan="6">
										<i class="fas fa-plus"></i> Add Particular
									</td>
								</tr>
								<tr>
									<td class="border-right-0 bg-secondary"></td>
									<td class="font-weight-bold border-left-0 bg-secondary" colspan="5">
										Summary
									</td>
								</tr>
								<tr>
									<td class="border-right-0">1</td>
									<td colspan="4" class="border-left-0 border-right-0">Total Fees</td>
									<td class="border-left-0">31500.00</td>
								</tr>
								<tr>
									<td class="border-right-0">2</td>
									<td colspan="4" class="border-left-0 border-right-0">Total Discount</td>
									<td class="border-left-0">31500.00</td>
								</tr>
								<tr>
									<td class="border-right-0">3</td>
									<td colspan="4" class="border-left-0 border-right-0">Total Tax</td>
									<td class="border-left-0">31500.00</td>
								</tr>
								<tr>
									<td class="bold border-right-0 text-md-right" colspan="5">
										Total Amount to Pay:
									</td>
									<td class="bold border-left-0">31500.00</td>
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
		                    <div class="col-md-3 offset-md-1 text-md-right">
		                        <a href="PayFeeButton.php" class="btn btn-primary width70 mt30">Pay Fees</a>
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



