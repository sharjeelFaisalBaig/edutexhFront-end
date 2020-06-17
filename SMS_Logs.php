<?php require_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
                    <li class="breadcrumb-item"><a href="Administration-Settings_sub.php">Settings</a></li>
                    <li class="breadcrumb-item"><a href="Administration-Settings_SMS_sub.php">SMS Module</a></li>
                    <li class="breadcrumb-item active" aria-current="page">SMS Logs</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-8 m-auto">
			<div class="ms-panel">
				<div class="ms-panel-header">
					<div class="row">
                        <div class="col-6">
                            <h6></h6>
                            <small>Click on SMS messages to see the status</small>
                        </div>
                        <div class="col-6">
                            <p class=" text-right">Available SMS : 0</p>
                        </div>
                    </div>
				</div>
				<div class="ms-panel-body">
					<div class="table-responsive">
						<table id="data-table-4" class="table w-100 thead-primary table-bordered">
							<thead>
								<tr>
									<th>S.No</th>
									<th>SMS Messages</th>
									<th>Total SMS Messages sent : 0</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>
										<a href="#" data-toggle="modal" data-target="#modal-3">Hi Employees</a>
									</td>
									<td>10 May 2020 11:50 AM</td>
								</tr>
								<tr>
									<td>2</td>
									<td>
										<a href="#" data-toggle="modal" data-target="#modal-3">Hi Students</a>
									</td>
									<td>10 May 2020 11:50 AM</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<div class="modal fade" id="modal-3" tabindex="-1" role="dialog" aria-labelledby="modal-3">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round ">SMS Log for - Hi Employees</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<div class="table-responsive">
					<table class="table w-100 thead-primary table-bordered">
						<thead>
							<tr>
								<th>S.No</th>
								<th>Mobile</th>
								<th>Gateway Response</th>
								<th>Sent at</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>0312-3456789</td>
								<td>Message sending failed : No active SMS package found</td>
								<td>10 May 2020 11:50 AM</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include_once('footer.php')?>