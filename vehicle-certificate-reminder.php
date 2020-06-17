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
                    <li class="breadcrumb-item active" aria-current="page">Vehicle Certificate Reminder Settings</li>
                </ol>
            </nav>
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="ms-panel-body">
            	<small>Set reminders and help Admin and Privileged Employees keep track of Vehicle Certificate dates. Reminders configured here can be applied at time of expired certificates.</small>
                <br>
                <small>Modifying the current settings will affect only the new certificates, but not the existing ones.</small>
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
                                        <label class="form-check-label" for="inlineCheckbox1">Employee</label>
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
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <p class="font-weight-bold mb-3">Reminder Message - Email</p>
                            <p class="font-weight-bold">Email Subject</p>
                            <div class="ms-card p-3 text-muted">
                                Reminder: Vehicle Certificate {Certificate Name - Number} will expire  on {Date of Expiry}
                            </div>
                            <p class="font-weight-bold">Email Message</p>
                            <div class="ms-card p-3 mb-4">
                                <p class="text-muted">Hi {user},</p>
                                <p class="text-muted">The Vehicle Certificate {Certificate Name - Number} will expire  on {Date of Expiry}</p>
                            </div>
                            <textarea placeholder="Add Your Message" class="form-control" rows="5"></textarea>
                            <textarea placeholder="Add Your Signature" class="form-control mt-4" rows="3"></textarea>
                        </div>
                        <div class="col-md-6">
                            <p class="font-weight-bold mb-3">Reminder Message - Email</p>
                            <p class="font-weight-bold">Sample Preview</p>
                            <div class="ms-card p-3">
                                <p class="font-weight-bold text-muted">Reminder: Vehicle Certificate Insurance will expire  on 10 December 2018</p>
                                <div style="margin-top: 125px;">
                                    <p class="text-muted">Hi Mary Ann,</p>
                                    <p class="text-muted">The Vehicle Certificate Insurance will expire  on 10 December 2018</p>
                                </div>
                                <p class="text-muted" style="margin-top: 87px;">Please make sure to renew the certificate. We wish you all the best.</p>
                                <p class="text-muted" style="margin-top: 115px;">
                                    Transport Controller<br>
                                    Monk School of Business
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



