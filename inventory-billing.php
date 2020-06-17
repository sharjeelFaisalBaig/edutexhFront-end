

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
					<li class="breadcrumb-item active" aria-current="page">Billing</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-6 text-md-right">
			<a href="inventory-billingAdd.php" class="btn btn-success m-auto width70">New</a>
		</div>

		<div class="col-md-8 m-auto">
			<div class="ms-panel-body">
				<div class="row mb-4">
					<label class="col-md-3 col-form-label">Select Store: </label>
					<div class="col-md-3">
						<select class="form-control">
						    <option selected="">Office Inventory</option>
						</select>
					</div>
					<div class="col-md-3">
					  <input type="text" class="form-control" placeholder="Search Invoice No.">
					</div>
				</div>

				<div class="alert alert-warning text-center my-4">
					<strong>No Ivoices Present</strong>
				</div>
				<div class="table-responsive">
					<table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered">
						<thead>
							<tr>
								<th>S.No.</th>
								<th>Invoice Np.</th>
								<th>Date</th>
								<th>Tax (%)</th>
								<th>Additional Charges (Rs. )</th>
								<th>Discount (Rs. )</th>
								<th>Total (Rs. )</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
                                <td>1</td>
                                <td>Inv002</td>
								<td>27-05-2020</td>
								<td>17.00</td>
								<td>0.00</td>
								<td>20.00</td>
								<td>93.60</td>
								<td>
									<a href="inventory-billingAdd.php">Edit</a> | 
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



