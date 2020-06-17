

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
					<li class="breadcrumb-item active" aria-current="page">View Event Reminder</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-8 m-auto">
			<div class="ms-panel-body">

				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<select class="form-control" id="validationCustom25" required="">
				                        <option value="">Events with Reminders</option>
				                    </select>
				                </div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<div class="row">
	                        <div class="col-md-2">
	                            <ul class="ms-list ms-task-block">
	                                <li class="ms-list-item">
	                                    <div class="form-check form-check-inline">
	                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" checked="">
	                                        <label class="form-check-label" for="inlineCheckbox1">Event</label>
	                                    </div>
	                                </li>
	                            </ul>
	                        </div>
	                        <div class="col-md-4">
	                            <ul class="ms-list ms-task-block">
	                                <li class="ms-list-item">
	                                    <div class="form-check form-check-inline">
	                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1" checked="">
	                                        <label class="form-check-label" for="inlineCheckbox2">Exam Related Events</label>
	                                    </div>
	                                </li>
	                            </ul>
	                        </div>
	                        <div class="col-md-4">
	                            <ul class="ms-list ms-task-block">
	                                <li class="ms-list-item">
	                                    <div class="form-check form-check-inline">
	                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1" checked="">
	                                        <label class="form-check-label" for="inlineCheckbox3">Fee Related Events</label>
	                                    </div>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<select class="form-control" id="validationCustom25" required="">
		                        <option value="">Upcoming Events</option>
		                        <option value="">Past Events</option>
		                    </select>
		                </div>
					</div>
				</div>

				<div class="table-responsive mt-4">
					<table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered">
						<thead>
							<tr>
								<th>Event Name</th>
								<th>Event Type</th>
								<th>
									Event Date
									<span class="float-right text-white">
										<i class="fas fa-chevron-up"></i>
									</span> 
								</th>
								<th>Reminder Date</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>School Holiday</td>
								<td>Event</td>
								<td>31-05-2020</td>
								<td>30-05-2020</td>
								<td>
									<a href="" class="text-success" data-toggle="modal" data-target=".bd-example-modal-lg">Settings</a>
								</td>
							</tr>
							<tr>
								<td>School Holiday</td>
								<td>Event</td>
								<td>31-05-2020</td>
								<td>30-05-2020</td>
								<td>
									<a href="" class="text-success" data-toggle="modal" data-target=".bd-example-modal-lg">Settings</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>	
				<div>
					<p class="m-0 d-inline">
						<strong>Showing 1 - 2 </strong>
						<span class="text-muted">of 2 Events</span>
					</p>
				</div>	
			</div>
		</div>

	</div>
</div>


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title has-icon ms-icon-round ">
                Edit Reminder Setting - School Holiday</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>

            <div class="modal-body">
                <form class="needs-validation clearfix" novalidate="">
                    <div class="form-row">
                        <div class="col-md-3">
                            <p><strong>Reminders</strong></p>
                        </div>
                        <div class="col-md-3">
                            <div class="custom-control custom-radio custom-control">
                                <input type="radio" class="custom-control-input" id="customRadio5" name="example" value="customEx" checked="">
                                <label class="custom-control-label" for="customRadio5">Enable Reminders</label>
                            </div>
                        </div> 
                        <div class="col-md-3">
                            <div class="custom-control custom-radio custom-control">
                                <input type="radio" class="custom-control-input" id="customRadio6" name="example" value="customEx">
                                <label class="custom-control-label" for="customRadio6">Disable Reminders</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-md-3">
                            <p class="py-3"><strong>Set Reminder</strong></p>
                        </div>
                        <div class="col-md-3">
                            <ul class="ms-list ms-task-block">
                                <li class="ms-list-item">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" checked="">
                                        <label class="form-check-label" for="inlineCheckbox1">Before 1 day</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul class="ms-list ms-task-block">
                                <li class="ms-list-item">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1" checked="">
                                        <label class="form-check-label" for="inlineCheckbox3">Before 1 week</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <p>Before</p>
                        </div>
                        <div class="col-md-6">
                            <small class="text-danger">
                                <i class="fas fa-exclamation-triangle"></i>
                                Reminders cannot be set for days that have already passed.
                            </small>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-md-3">
                            <p class="py-3"><strong>Reminder Mode</strong></p>
                        </div>
                        <div class="col-md-3">
                            <ul class="ms-list ms-task-block">
                                <li class="ms-list-item">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" checked="">
                                        <label class="form-check-label" for="inlineCheckbox1">Email</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul class="ms-list ms-task-block">
                                <li class="ms-list-item">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1" checked="">
                                        <label class="form-check-label" for="inlineCheckbox2">SMS</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="font-weight-bold">Reminder Message - Email</p>
                            <p class="text-muted mt-3">Your Email message cannot be customized.</p>
                            <p class="font-weight-bold mt-4">Sample Preview</p>
                            <div class="ms-card p-3">
                                <p class="font-weight-bold text-muted">Reminder: Silver Jubilee Art Exhibition scheduled on 14 February 2015</p>
                                <p class="text-muted">Hi Mary Ann,</p>
                                <p class="text-muted">Silver Jubilee Art Exhibition has been scheduled from 14 February 2015 to 15 February 2015.</p>
                                <p class="text-muted">The Principal, Teachers and Students of our school cordially invite you to be present at the Silver Jubilee Art Exhibition from 9:00 AM in the school premises.</p>
                                <p class="text-muted">
                                    Regards, <br>
                                    Administrator<br>
                                    Sri Lankan School Muscat
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="font-weight-bold">Reminder Message - SMS</p>
                            <p class="text-muted mt-3">Your SMS message cannot be customized.</p>
                            <p class="font-weight-bold mt-4">Sample Preview</p>
                            <div class="ms-card p-3">
                                <p class="text-muted">
                                    Hi Mary Ann,<br>
                                    Silver Jubilee Art Exhibition has been scheduled from 14 February 2015 to 15 February 2015.<br>
                                    Thanks!
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary shadow-none">Update Changes</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



