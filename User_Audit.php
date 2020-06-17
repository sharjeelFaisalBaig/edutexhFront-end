<?php require_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Data_&_Reports_sub.php">Data & Reports</a></li>
					<li class="breadcrumb-item"><a href="DataAndReports-Audit_sub.php">Audit</a></li>
					<li class="breadcrumb-item active" aria-current="page">User Audit</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-8 m-auto">
			<div class="ms-panel-body">

				<div class="row">
					<div class="col-md-4">
						<div class="form-group row">
							<label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Search by</label>
							<div class="col-sm-8">
								<div class="input-group">
									<select class="form-control" id="validationCustom25" required="">
										<option value="">Student</option>
									</select>
									<div class="invalid-feedback">This Field is Required</div>
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group row">
							<label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Course</label>
							<div class="col-sm-8">
								<div class="input-group">
									<select class="form-control" id="validationCustom25" required="">
										<option value="">Select a Course</option>
									</select>
									<div class="invalid-feedback">This Field is Required</div>
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group row">
							<label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Batch</label>
							<div class="col-sm-8">
								<div class="input-group">
									<select class="form-control" id="validationCustom25" required="">
										<option value="">Select a Batch</option>
									</select>
									<div class="invalid-feedback">This Field is Required</div>
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group row">
							<label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Select Date</label>
							<div class="col-sm-8">
								<div class="input-group">
									<select class="form-control" id="validationCustom25" required="">
										<option value="">Today</option>
										<option value="">Last Week</option>
										<option value="">Last Month</option>
										<option value="">Last 3 Months</option>
										<option value="">Last 6 Months</option>
										<option value="">1 Year</option>
									</select>
									<div class="invalid-feedback">This Field is Required</div>
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group row">
							<div class="col-sm-8">
								<div class="input-group">
									<input type="text" class="form-control" id="datepicker" name="" placeholder="Custom Date">
									<div class="invalid-feedback">This Field is Required</div>
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
							<div class="col-md-4">
								<a href="" class="btn btn-primary width30 m-0" type="submit">Search</a>
							</div>
						</div>
					</div>
				</div>


				<div class="table-responsive">
					<table id="data-table-4" class="table w-100 thead-primary table-bordered">
						<thead>
							<tr>
								<th>Name</th>
								<th>No of Visits</th>
								<th>Recent Activity</th>
								<th>Last Active</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><a href="User_Audit-User.php">Abdul Samad</a></td>
								<td>10</td>
								<td>Login</td>
								<td>08/05/2020 09:51 PM <br> 1 days ago</td>
							</tr>
							<tr>
								<td><a href="">Admin</a></td>
								<td>10</td>
								<td>Login</td>
								<td>08/05/2020 09:51 PM <br> 1 days ago</td>
							</tr>
							<tr>
								<td><a href="">S1</a></td>
								<td>2</td>
								<td>Login</td>
								<td>08/05/2020 09:51 PM <br> 1 days ago</td>
							</tr>
							<tr>
								<td><a href="">E1</a></td>
								<td>6</td>
								<td>Login</td>
								<td>08/05/2020 09:51 PM <br> 1 days ago</td>
							</tr>
							<tr>
								<td><a href="">S44</a></td>
								<td>4</td>
								<td>Login</td>
								<td>08/05/2020 09:51 PM <br> 1 days ago</td>
							</tr>
							<tr>
								<td><a href="">S45</a></td>
								<td>4</td>
								<td>Login</td>
								<td>08/05/2020 09:51 PM <br> 1 days ago</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include_once('footer.php')?>