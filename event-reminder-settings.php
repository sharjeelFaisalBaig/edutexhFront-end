<!-- header -->
<?php require 'header.php';?>

<!-- header -->

<!-- Body Content Wrapper -->
<div class="ms-content-wrapper container">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
			        <li class="breadcrumb-item"><a href="Administration-reminder_sub.php">Reminders</a></li>
			        <li class="breadcrumb-item"><a href="reminder-setting_sub.php">Reminder Settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Event Reminder Settings</li>
                </ol>
            </nav>
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="ms-panel-body">
            	<small>Set reminders and help Students, Employees and Parents keep track of event dates. The settings you configure here can be applied when creating an event.</small>
                <br>
                <small>Modifying the current settings will affect only the new events, but not the existing ones.</small>
                <form class="needs-validation mt-4 clearfix" novalidate>
                    <div class="form-row">
                        <div class="col-md-3">
                            <p class="py-3"><strong>Target Recipients</strong></p>
                        </div>
                        <div class="col-md-3">
                            <ul class="ms-list ms-task-block">
                                <li class="ms-list-item">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" checked="">
                                        <label class="form-check-label" for="inlineCheckbox1">Students</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul class="ms-list ms-task-block">
                                <li class="ms-list-item">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1" checked="">
                                        <label class="form-check-label" for="inlineCheckbox2">Employees</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul class="ms-list ms-task-block">
                                <li class="ms-list-item">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1" checked="">
                                        <label class="form-check-label" for="inlineCheckbox3">Parents</label>
                                    </div>
                                </li>
                            </ul>
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
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox2">Before 2 day</label>
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
                        	<select class="form-control d-inline w-25 mr-1">
                        		<option value="">days</option>
                        	</select>
                        	<select class="form-control d-inline w-25 mr-1">
                        		<option value="">3</option>
                        	</select>
                        	<button class="btn btn-primary m-auto width30 d-inline">Add</button>
                        	<button class="btn btn-light m-auto width30 d-inline">Cancel</button>
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
                    <hr>

                    <button class="btn btn-primary d-md-inline mr-sm-2 width70 m-auto">Save Changes</button>
                    <a href="" class="text-success float-md-right">Reset to Default Changes</a>
                </form>
            </div>

        </div>

    </div>
</div>
<!-- /Body Content Wrapper -->

<!-- footer -->
<?php require 'footer.php';?>

<!-- footer -->



