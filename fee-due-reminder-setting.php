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
                    <li class="breadcrumb-item"><a href="fee-reminder-settings_sub.php">Fee Reminder Settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Fee Due Reminder Settings</li>
                </ol>
            </nav>
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="ms-panel-body">
            	<small>Set reminders and help Students and Parents keep track of fee due dates. The settings you configure here can be applied when scheduling a fee collection.</small>
                <br>
                <small>Modifying the current changes will affect only the new fee schedules, but not the existing ones.</small>
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
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox2">Parents</label>
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
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1" checked="">
                                        <label class="form-check-label" for="inlineCheckbox3">Before 1 day</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul class="ms-list ms-task-block">
                                <li class="ms-list-item">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox4">Before 2 day</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul class="ms-list ms-task-block">
                                <li class="ms-list-item">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option1" checked="">
                                        <label class="form-check-label" for="inlineCheckbox5">Before 1 week</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <a href="" class="text-success">
                                <i class="fas fa-plus"></i>
                                Add New
                            </a>
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
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option1" checked="">
                                        <label class="form-check-label" for="inlineCheckbox6">Email</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul class="ms-list ms-task-block">
                                <li class="ms-list-item">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox7">SMS</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                    	<div class="col-md-6 mb-3">
                            <p class="font-weight-bold mb-3">Reminder Message - Email</p>
                            <p class="font-weight-bold">Email Subject</p>
                    		<div class="ms-card p-3 text-muted">
                                Reminder: Fee Payment for {Fee Collection Name} is Due on {Due Date}
                            </div>
                            <p class="font-weight-bold">Email Message</p>
                            <div class="ms-card p-3 mb-4">
                                <p class="text-muted">Hi {user}</p>
                                <p class="text-muted">The Last Due Date for {Fee Collection Name} Payment is {Due Date}</p>
                            </div>
                            <textarea placeholder="Add Your Message" class="form-control" rows="5"></textarea>
                            <textarea placeholder="Add Your Signature" class="form-control mt-4" rows="3"></textarea>
                    	</div>
                        <div class="col-md-6">
                            <p class="font-weight-bold mb-3">Reminder Message - Email</p>
                            <p class="font-weight-bold">Sample Preview</p>
                            <div class="ms-card p-3">
                                <p class="font-weight-bold text-muted">Reminder: Fee Payment for Annual Fees is Due on 20 February 2015.</p>
                                <div style="margin-top: 101px;">
                                    <p class="text-muted">Hi Mary Ann,</p>
                                    <p class="text-muted">The Last Date for Annual Fees is 20 February 2015.</p>
                                </div>
                                <p class="text-muted" style="margin-top: 68px;">Students, please pay the Annual Fees before the due date to avoid fine.</p>
                                <p class="text-muted" style="margin-top: 117px;">
                                    Finance Department<br>
                                    Monk School of Business
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="font-weight-bold">Reminder Message - SMS</p>
                            <p class="text-muted mt-3">Your SMS message cannot be customized.</p>
                            <p class="font-weight-bold mt-4">Sample Preview</p>
                            <div class="ms-card p-3">
                                <p class="text-muted">
                                    Hi Mary Ann,<br>
                                    The Last Date for Annual Fees is 20 February 2015.
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



