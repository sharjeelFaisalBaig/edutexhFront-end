

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
		            <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
					<li class="breadcrumb-item"><a href="Administration-Inventory_sub.php">Inventory</a></li>
					<li class="breadcrumb-item"><a href="inventory-billing.php">Billing</a></li>
					<li class="breadcrumb-item active" aria-current="page">New</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-9 m-auto">
			<div class="ms-panel-body">
				<div class="alert alert-warning text-center my-4">
					<strong>Invoice Inv001 Created Successfully. <a href="">Print</a></strong>
				</div>

				<div class="row">
					<div class="col-md-6 m-auto">
						<form class="need-validation" novalidate="">
							<div class="row mb-4">
								<div class="col-md-3">
									<label class="col-form-label">Store: </label>
								</div>
								<div class="col-md-8">
									<select class="form-control">
									    <option selected="">Office Inventory</option>
									</select>
								</div>
							</div>
							<div class="row mb-4">
								<div class="col-md-3">
									<label class="col-form-label">Issued No </label>
								</div>
								<div class="col-md-8">
									<input type="text" class="form-control" placeholder="Addmission No./Employee No.">
								</div>
							</div>
							<div class="row mb-4">
								<div class="col-md-3">
									<label class="col-form-label">Name<span class="text-danger">*</span></label>
								</div>
								<div class="col-md-8">
									<input type="text" class="form-control" placeholder="Muhammad Irfan">
								</div>
							</div>
							<div class="row mb-4">
								<div class="col-md-3">
									<label class="col-form-label">Address</label>
								</div>
								<div class="col-md-8">
									<textarea class="form-control" rows="5"></textarea>
								</div>
							</div>
						</form>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-2">
						<p class="font-weight-bold mt-2 mb-0">Billing Details</p>
					</div>
					<div class="col-md-5 offset-md-1 text-md-right">
						<label>Invoice No.</label>
						<input type="text" class="form-control ml-1 d-inline-block w-75" placeholder="Inv001">
					</div>
					<div class="col-md-4 text-md-right">
						<label>Date</label>
						<input type="date" class="form-control ml-1 d-inline w-75" placeholder="Inv001">
					</div>
				</div>

				<div class="table-responsive mt-4">
					<table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered">
						<thead>
							<tr>
								<th width="100">Code</th>
								<th width="300">Item</th>
								<th width="50">Quantity</th>
								<th width="100">Rate</th>
								<th width="80">Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
                                <td>
                                	<input type="text" class="form-control d-inline w-75" placeholder="02">
                                </td>
                                <td>
                                	<input type="text" class="form-control d-inline w-75" placeholder="Paper Clips">
                                </td>
                                <td>
                                	<input type="text" class="form-control d-inline w-75" placeholder="300">
                                </td>
                                <td>
                                	<input type="text" class="form-control d-inline w-75" placeholder="10.00">
                                </td>
                                <td>
                                	<input type="text" class="form-control d-inline w-75" placeholder="3000.00">
                                </td>
							</tr>
						</tbody>
					</table>
				</div>	
				<a href="" class="text-success">
					<i class="fas fa-plus"></i>
					Add New Item
				</a>
				<div class="row">
					<div class="col-md-3 offset-md-9">
						<div class="form-row">
							<label class="col-md-4 mt-md-2 form-control-label">Sub Total</label>
							<div class="col-md-8">
								<input type="text" class="form-control" placeholder="3000.00" name="">
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-md-3 offset-md-9">
						<div class="form-row">
							<label class="col-md-4 mt-md-2 form-control-label">Tax (%)</label>
							<div class="col-md-8">
								<input type="text" class="form-control" placeholder="17" name="">
							</div>
						</div>
					</div>
				</div>
				<hr>
				<p class="font-weight-bold">Additional Charges</p>
				<div class="table-responsive mt-4">
					<table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered">
						<thead>
							<tr>
								<th width="300">Name</th>
								<th width="50">Amount</th>
							</tr>
						</thead>
						<tbody>
							<tr>
                                <td>
                                	<input type="text" class="form-control d-inline w-75" placeholder="Delivery Charges">
                                </td>
                                <td>
                                	<input type="text" class="form-control d-inline w-75" placeholder="200">
                                </td>
							</tr>
						</tbody>
					</table>
				</div>	
				<a href="" class="text-success">
					<i class="fas fa-plus"></i>
					Add
				</a>
				<hr>
				<p class="font-weight-bold">Discounts</p>
				<div class="table-responsive mt-4">
					<table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered">
						<thead>
							<tr>
								<th width="300">Name</th>
								<th width="50">Amount</th>
							</tr>
						</thead>
						<tbody>
							<tr>
                                <td>
                                	<input type="text" class="form-control d-inline w-75" placeholder="Bulk Discount">
                                </td>
                                <td>
                                	<input type="text" class="form-control d-inline w-75" placeholder="300">
                                </td>
							</tr>
						</tbody>
					</table>
				</div>	
				<a href="" class="text-success">
					<i class="fas fa-plus"></i>
					Add
				</a>
				<div class="row mt-2">
					<div class="col-md-3 offset-md-9">
						<div class="form-row">
							<label class="col-md-4 mt-md-2 form-control-label">Total</label>
							<div class="col-md-8">
								<input type="text" class="form-control" placeholder="3393.00" name="">
							</div>
						</div>
					</div>
					<div class="col-md-3 offset-md-9">
						<div class="form-row">
							<label class="col-md-4 mt-md-2 form-control-label">Is Paid</label>
							<div class="col-md-8">
								<ul class="ms-list ms-task-block">
	                                <li class="ms-list-item text-center">
	                                    <div class="form-check form-check-inline">
	                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1">
	                                    </div>
	                                </li>
	                            </ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 offset-md-9 text-md-right mt-4">
						<button class="btn btn-primary m-auto width70">Save</button>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



