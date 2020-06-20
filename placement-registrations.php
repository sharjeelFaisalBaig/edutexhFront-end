<?php require_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="placement.php">Placements</a></li>
					<li class="breadcrumb-item active" aria-current="page">Research Assistant</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-8 m-auto">
			<div class="ms-panel-body">
				<div class="alert alert-warning text-center my-4">
					<strong>All messages will appear here</strong>
				</div>
				<div class="table-responsive">
					<table id="data-table-4" class="table w-100 thead-primary table-bordered">
						<thead>
							<tr>
								<th>Students</th>
								<th>Batch</th>
								<th>Registrations</th>
								<th>Attendance</th>
								<th>Placement Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Abdul Salam</td>
								<td>G1 - A - 2020</td>
								<td>
									<a href="javascript:void(0);">Approve Registration</a> | 
									<a href="javascript:void(0);">Reject Registration</a>
								</td>
								<td>
									<a href="javascript:void(0);">Attended</a> | 
									<a href="javascript:void(0);">Not Attended</a>
								</td>
								<td></td>
							</tr>
							<tr>
								<td>Abdul Salam</td>
								<td>G1 - A - 2020</td>
								<td>
									<a href="javascript:void(0);">Awaiting Response from Student</a>
								</td>
								<td>
									<a href="javascript:void(0);">Attended</a> | 
									<a href="javascript:void(0);">Not Attended</a>
								</td>
								<td></td>
							</tr>
							<tr>
								<td>Abdul Salam</td>
								<td>G1 - A - 2020</td>
								<td>
									<a href="javascript:void(0);">Reject Registration</a>
								</td>
								<td>
									<a href="javascript:void(0);">Attended</a> | 
									<a href="javascript:void(0);">Not Attended</a>
								</td>
								<td>Approve Placement</td>
							</tr>
							<tr>
								<td>Abdul Salam</td>
								<td>G1 - A - 2020</td>
								<td>
									<a href="javascript:void(0);">Placed</a>
								</td>
								<td>
									<a href="javascript:void(0);">Attended</a> | 
									<a href="javascript:void(0);">Not Attended</a>
								</td>
								<td>Disapprove Placement</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>




<?php include_once('footer.php')?>