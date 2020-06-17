<!-- header -->
<?php require 'header.php';?>
<!-- header -->

<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
                    <li class="breadcrumb-item"><a href="Administration-Settings_sub.php">Settings</a></li>
                    <li class="breadcrumb-item"><a href="Administration-Settings_SMS_sub.php">SMS Module</a></li>
                    <li class="breadcrumb-item active" aria-current="page">SMS Settings</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8 m-auto">
            <div class="ms-panel ms-panel-fh">
                <div class="ms-panel-header">
                    <div class="row">
                        <div class="col-6">
                            <h6></h6>
                        </div>
                        <div class="col-6">
                            <p class=" text-right">Available SMS : 0</p>
                        </div>
                    </div>
                </div>
                <div class="ms-panel-body">
                    <form class="needs-validation clearfix" novalidate>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <div class="row">
                                    <div class="col-md-4 offset-md-4">
                                        <ul class="ms-list ms-task-block">
                                            <li class="ms-list-item">

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">Application</label>
                                                </div>
                                                
                                            </li>
                                        </ul>
                                        <input type="submit" class="btn btn-primary d-block width70" name="btn25" value="Update">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 my-2">
                                        <h6>General SMS Settings: </h6>
                                    </div>
                                    <div class="col-md-4 offset-md-4">
                                        <ul class="ms-list ms-task-block">
                                            <li class="ms-list-item">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="">
                                                    <label class="form-check-label" for="inlineCheckbox2">Student Addmission</label>
                                                </div>
                                            </li>
                                            <li class="ms-list-item">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="">
                                                    <label class="form-check-label" for="inlineCheckbox3">Exam Schedule / Result</label>
                                                </div>
                                            </li>
                                            <li class="ms-list-item">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="">
                                                    <label class="form-check-label" for="inlineCheckbox4">Attendance</label>
                                                </div>
                                                <li class="ms-list-item ml-5">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="">
                                                        <label class="form-check-label" for="inlineCheckbox5">Manual Notification</label>
                                                    </div>
                                                </li>
                                            </li>

                                            <li class="ms-list-item">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="">
                                                    <label class="form-check-label" for="inlineCheckbox6">Events</label>
                                                </div>
                                            </li>
                                            <li class="ms-list-item">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="">
                                                    <label class="form-check-label" for="inlineCheckbox7">Fee Submission</label>
                                                </div>
                                            </li>
                                            <li class="ms-list-item">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="">
                                                    <label class="form-check-label" for="inlineCheckbox8">TimetableSwap & Cancel</label>
                                                </div>
                                            </li>
                                            <li class="ms-list-item">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="">
                                                    <label class="form-check-label" for="inlineCheckbox9">Send SMS to Parents</label>
                                                </div>
                                            </li>
                                            <li class="ms-list-item">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="">
                                                    <label class="form-check-label" for="inlineCheckbox10">Send SMS to Students</label>
                                                </div>
                                            </li>
                                            <li class="ms-list-item">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox11" value="">
                                                    <label class="form-check-label" for="inlineCheckbox11">Send SMS to Employees</label>
                                                </div>
                                            </li>
                                        </ul>
                                        <input type="submit" class="btn btn-primary d-block width70" name="btn25" value="Update">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /Body Content Wrapper -->

<!-- footer -->
<?php require 'footer.php';?>
<!-- footer -->



