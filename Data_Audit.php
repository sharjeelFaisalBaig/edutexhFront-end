<?php require_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Data_&_Reports_sub.php">Data & Reports</a></li>
					<li class="breadcrumb-item"><a href="DataAndReports-Audit_sub.php">Audit</a></li>
					<li class="breadcrumb-item active" aria-current="page">Data Audit</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-8 m-auto">
			<div class="ms-panel-body">

				<div class="row">
					<div class="col-md-4">
						<div class="form-group row">
							<label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Module</label>
							<div class="col-sm-8">
								<div class="input-group">
									<select class="form-control" id="validationCustom25" required="">
										<option value="">Select Module</option>
									</select>
									<div class="invalid-feedback">This Field is Required</div>
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group row">
							<label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Activity</label>
							<div class="col-sm-8">
								<div class="input-group">
									<select class="form-control" id="validationCustom25" required="">
										<option value="">Select Activity</option>
									</select>
									<div class="invalid-feedback">This Field is Required</div>
									<div class="valid-feedback">Looks good!</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group row">
							<label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Username</label>
							<div class="col-sm-8">
								<div class="input-group">
									<input type="text" class="form-control" name="" placeholder="">
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
								<th>Activity</th>
								<th>Details</th>
								<th>Username</th>
								<th>Date</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Employee Creation</td>
								<td>
									<label>First Name :</label> <strong>Muhammad Sufyan</strong>
									<br>
									<label>Employee No :</label> <strong>E2</strong>
								</td>
								<td>Admin</td>
								<td>08/05/2020 09:51 PM <br> 1 days ago</td>
							</tr>
							<tr>
								<td>Batch Creation</td>
								<td>
									<label>Batch :</label> <strong>Play Group Pink</strong>
								</td>
								<td>Admin</td>
								<td>08/05/2020 09:51 PM <br> 1 days ago</td>
							</tr>
							<tr>
								<td>Course Creation</td>
								<td>
									<label>Course :</label> <strong>Play Group</strong>
								</td>
								<td>Admin</td>
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