

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
					<li class="breadcrumb-item"><a href="Administration-Settings_sub.php">Human Resource</a></li>
					<li class="breadcrumb-item"><a href="Manage_ClientsEmpty.php">Employee Leave Management</a></li>
					<li class="breadcrumb-item active" aria-current="page"> Leave Reset</li>
				</ol>
			</nav>
		</div>


		<div class="col-md-8 m-auto">
			<div class="ms-panel w-100">

				<div class="ms-panel-header">
					<div class="row">
						<div class="col-md-6">

						</div>
                        <div class="col-md-6 text-right">
                            <a href="reset-leaves.php" class="btn btn-primary m-auto"  >Reset leaves</a>
                            <a href="" class="btn btn-primary m-auto"  >Leave reset settings</a>
                        </div>
					</div>
				</div>

				<div class="ms-panel-body">
                    <div>
                        <h4>Leave Reset Records</h4>
                        <p class="text-secondary ">List of all your recent leave reset details</p>
                    </div>

					<div class="table-responsive">
						<table class="table w-100 table-bordered thead-primary">
							<thead>
								<tr>
									<th>Reset date</th>
									<th>Employee</th>
									<th>Remarks</th>
									<th>Reset by</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td>No leave reset records present</td>
									<td></td>
									<td></td>
									<td></td>
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



