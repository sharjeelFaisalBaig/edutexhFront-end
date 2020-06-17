

<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-10">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
					<li class="breadcrumb-item"><a href="Administration-HumanResource_sub.php">Human Resource</a></li>
                    <li class="breadcrumb-item"><a href="admin-HR-payroll-and-payslip-management.php">Payroll and Payslip Management</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Payslip Report</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-10 m-auto">
			<div class="ms-panel w-100">
				<div class="ms-panel-body">
					<div class="row">
                        <div class="col-md-7 mb-sm-3">
                            <div class="row">
                                <div class="col-md-3">
                                	<label>Department</label>
                                    <div class="form-group">
                                        <strong>English</strong>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                	<label>Date</label>
                                    <div class="form-group">
                                        <strong>01-05-2020 to 31-05-2020</strong>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                	<label></label>
                                    <div class="form-group mt-md-2">
                                        <strong>
                                        	<a href="">Change</a> &nbsp;&nbsp;
                                        	<a href="">Advanced Search</a>
                                        </strong>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <div class="col-md-5">
                            <form class="needs-validation filterBorder" novalidate>
								<div class="form-row">
									<div class="col-md-2">
										<P></p>
										<label class="mt-md-3 font-weight-bold">Filters</label>
									</div>
									<div class="col-md-5">
										<label>Payslip Status</label>
										<div class="form-group">
											<select class="form-control" id="validationCustom25" required="">
						                        <option value="">All</option>
						                    </select>
						                </div>
									</div>
									<div class="col-md-5">
										<label>Payslip Period</label>
										<div class="form-group">
											<select class="form-control" id="validationCustom25" required="">
						                        <option value="">All</option>
						                    </select>
						                </div>
									</div>
								</div>
							</form>  
                        </div>
                    </div>

<hr>
                    <div class="ms-panel-header">
			            <div class="dropdown text-right">
			                <a href="" class="btn btn-primary">PDF Report</a>
			                <a href="" class="btn btn-primary">CSV Report</a>
			            </div>
				    </div>

					<div class="table-responsive mt-3">
	                    <table id="data-table-4" class="table w-100 thead-primary table-bordered">
	                        <thead>
	                            <tr>
	                            	<th>Employee</th>
	                            	<th>Employee No.</th>
	                            	<th>Payslip Period</th>
	                            	<th>Amount (Rs)</th>
	                            	<th>Payslip Status</th>
	                            	<th></th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                        	<tr>
	                        		<th colspan="6">Monthly</th>
	                        	</tr>
	                        </tbody>
	                        <tbody>
	                        	<tr>
	                        		<td>Faizan Javed</td>
	                        		<td>E8</td>
	                        		<td>May 2020</td>
	                        		<td>101125.00</td>
	                        		<td>Approved</td>
	                        		<td>
	                        			<a href="" data-toggle="modal" data-target="#modal-1">View</a>
	                        		</td>
	                        	</tr>
	                        	<tr>
	                        		<td>Faizan Javed</td>
	                        		<td>E8</td>
	                        		<td>May 2020</td>
	                        		<td>101125.00</td>
	                        		<td>Approved</td>
	                        		<td>
	                        			<a href="" data-toggle="modal" data-target="#modal-1">View</a>
	                        		</td>
	                        	</tr>
	                        	<tr>
	                        		<td>Faizan Javed</td>
	                        		<td>E8</td>
	                        		<td>May 2020</td>
	                        		<td>101125.00</td>
	                        		<td>Approved</td>
	                        		<td>
	                        			<a href="" data-toggle="modal" data-target="#modal-1">View</a>
	                        		</td>
	                        	</tr>
	                        	<tr>
	                        		<td>Faizan Javed</td>
	                        		<td>E8</td>
	                        		<td>May 2020</td>
	                        		<td>101125.00</td>
	                        		<td>Approved</td>
	                        		<td>
	                        			<a href="" data-toggle="modal" data-target="#modal-1">View</a>
	                        		</td>
	                        	</tr>
	                        	<tr>
	                        		<td>Faizan Javed</td>
	                        		<td>E8</td>
	                        		<td>May 2020</td>
	                        		<td>101125.00</td>
	                        		<td>Approved</td>
	                        		<td>
	                        			<a href="" data-toggle="modal" data-target="#modal-1">View</a>
	                        		</td>
	                        	</tr>
	                        </tbody>
	                    </table>
	                </div>

					<div class="row">
						<div class="col-md-3">
                        	<label>Total Payslips</label>
                            <div class="form-group">
                                <strong>4</strong>
                            </div>
                        </div>
						<div class="col-md-3">
                        	<label>Total Employees</label>
                            <div class="form-group">
                                <strong>4</strong>
                            </div>
                        </div>
						<div class="col-md-3">
                        	<label>Total Salary</label>
                            <div class="form-group">
                                <strong>Rs 415785.00</strong>
                            </div>
                        </div>
						<div class="col-md-3">
                        	<label>Approved Salary</label>
                            <div class="form-group">
                                <strong>Rs 415785.00</strong>
                            </div>
                        </div>
					</div>

				</div>
			</div>
		</div>

	</div>
</div>

<div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="modal-3">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h6 class="modal-title">Edit Leave Groups</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <div class="table-responsive">
                    <table id="data-table-4" class="table w-100 thead-primary ms-card">
                        <thead>
                        	<tr>
                        		<th>Generate Reports</th>
                        	</tr>
                        </thead>
                        <tbody>
                        	<tr>
                        		<td>Pay Report</td>
                        	</tr>
                        	<tr>
                        		<td>Payroll Category-Wise Report</td>
                        	</tr>
                        	<tr>
                        		<td>Employee Payroll Report</td>
                        	</tr>
                        	<tr>
                        		<td>Comparison Report</td>
                        	</tr>
                        	<tr>
                        		<td>Overall Salary Report</td>
                        	</tr>
                        	<tr>
                        		<td>Overall Estimation Report</td>
                        	</tr>
                        	<tr>
                        		<td>Employee-Wise Estimation Report</td>
                        	</tr>
                        </tbody>
                    </table>
                </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary shadow-none width70" data-toggle="modal" data-target="#modal-2">Ok</button>
                <button type="button" class="btn btn-light width30" data-dismiss="modal" >Cancel</button>
            </div>

        </div>
    </div>
</div>


<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



