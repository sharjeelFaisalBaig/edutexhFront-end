

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
					<li class="breadcrumb-item"><a href="Administration-reminder_sub.php">Reminders</a></li>
					<li class="breadcrumb-item active" aria-current="page">View Custom Reminders</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-8 m-auto">
			<div class="ms-panel-body">
				<div class="row">
					<div class="col-md-4 offset-md-8">
						<div class="form-group">
							<select class="form-control" id="validationCustom25" required="">
		                        <option value="">Upcoming Events</option>
		                        <option value="">Past Events</option>
		                    </select>
		                </div>
					</div>
				</div>

				<div class="table-responsive mt-2">
					<table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered">
						<thead>
							<tr>
								<th>Name of Custom Reminders</th>
								<th>
									Reminder Date
									<!-- <span class="float-right text-white">
										<i class="fas fa-chevron-up"></i>
									</span>  -->
								</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
                                <td>Urgent Meeting</td>
								<td>30-05-2020</td>
								<td>
									<a href="create-custom-reminder.php" class="text-success">Edit</a> | 
                                    <a href="create-custom-reminder.php" class="text-success">Delete</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>	
				<div>
					<p class="m-0 d-inline">
						<strong>Showing 1 - 1 </strong>
						<span class="text-muted">of 1 Events</span>
					</p>
				</div>	
			</div>
		</div>

	</div>
</div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



