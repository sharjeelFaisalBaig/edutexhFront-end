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
                    <li class="breadcrumb-item"><a href="Collaboration_sub.php">Collaboration</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Event Creation</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8 m-auto">
            <div class="ms-panel ms-panel-fh">

                <div class="ms-panel-body">
                    <form class="needs-validation mb-5" novalidate>
                        <div class="form-row mb-4">
                            <div class="col-md-5">
                                <label for="validationCustom03">Title :</label>
                                <input type="text" class="form-control" id="validationCustom03" placeholder="Parent Day" required>
                                <div class="invalid-feedback bottom-unset">This Field is Required</div>
                                <div class="valid-feedback bottom-unset">Looks Nice</div>
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="col-md-3">
                                <label for="validationCustom03">Start Date :</label>
                                <input type="text" class="form-control" id="datepicker" id="validationCustom03" placeholder="Start Date" required>
                                <div class="invalid-feedback bottom-unset">This Field is Required</div>
                                <div class="valid-feedback bottom-unset">Looks Nice</div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-3">
                                <label for="validationCustom03">End Date :</label>
                                <input type="text" class="form-control" id="datepicker2" id="validationCustom03" placeholder="End Date" required>
                                <div class="invalid-feedback bottom-unset">This Field is Required</div>
                                <div class="valid-feedback bottom-unset">Looks Nice</div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-4">
                                <label for="validationCustom03"></label>
                                <ul class="ms-list ms-task-block">
                                    <li class="ms-list-item">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">This Event is a Holiday</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="col-md-7">
                                <label for="validationCustom03">Description: </label>
                                <textarea class="form-control" id="validationCustom03" rows="9" placeholder="All parents are invited."></textarea>
                            </div>
                        </div>
                    </form>

                    <h6>Event Audience</h6>
                    <div class="form-row mb-4">
                        <div class="col-md-3">
                            <div class="custom-control custom-radio custom-control">
                                <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
                                <label class="custom-control-label" for="customRadio">All users of the institution</label>
                            </div>
                        </div> 
                        <div class="col-md-3">
                            <div class="custom-control custom-radio custom-control">
                                <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx" checked="">
                                <label class="custom-control-label" for="customRadio2">Select applicable users </label>
                            </div>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Students</h6>
                            <table id="data-table-4" class="table w-100 thead-primary table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox2">Batches</label>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox3">G1 - A(2018-2019)</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox4">G2 - A(2018-2019)</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox5">G3 - A(2018-2019)</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox6">G4 - A(2018-2019)</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox7">G5 - A(2018-2019)</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox8">G6 - A(2018-2019)</label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h6>Employees</h6>
                            <table id="data-table-4" class="table w-100 thead-primary table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox9">Department</label>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox10">English</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox11" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox11">Hostel</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox12" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox12">Maths</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox12" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox12">Maths</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox12" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox12">Maths</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox12" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox12">Maths</label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="accordion mt-4" id="accordionExample1">
                        <div class="ms-card">
                            <div class="card-header" data-toggle="collapse" role="button" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span>Hide Reminder Settings</span>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordionExample1">
                                <div class="card-body px-4 py-3">
                                    <p class="font-weight-bold">
                                        Reminders for Event
                                    </p>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="custom-control custom-radio custom-control">
                                                <input type="radio" class="custom-control-input" id="customRadio3" name="example" value="customEx">
                                                <label class="custom-control-label" for="customRadio3">Enable Reminders</label>
                                            </div>
                                        </div> 
                                        <div class="col-md-3">
                                            <div class="custom-control custom-radio custom-control">
                                                <input type="radio" class="custom-control-input" id="customRadio4" name="example" value="customEx" checked="">
                                                <label class="custom-control-label" for="customRadio4">Disable Reminders</label>
                                            </div>
                                        </div>                        
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">
                                            <p class="py-2"><strong>Set Reminder</strong></p>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="ms-list ms-task-block">
                                                <li class="ms-list-item">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox21" value="option1" checked="">
                                                        <label class="form-check-label" for="inlineCheckbox21">Before 1 day</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="ms-list ms-task-block">
                                                <li class="ms-list-item">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox20" value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox20">Before 1 week</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 offset-md-3">
                                            <small class="text-danger">
                                                <i class="fas fa-exclamation-triangle"></i>
                                                Reminders cannot be set for days that have already passed.
                                            </small>
                                        </div>
                                    </div>
                                    <a href="" class="text-success" data-toggle="modal" data-target=".bd-example-modal-lg">Advanced Reminder Setting</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary width70" type="submit">Create Event</button>
                    <button class="btn btn-light width70" type="submit">Cancel</button>

                </div>
            </div>
        </div>

    </div>
</div>
<!-- /Body Content Wrapper -->


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title has-icon ms-icon-round ">
                Advanced Reminder Setting</h6>
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
                <button type="button" class="btn btn-primary shadow-none">Save Changes</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>



<!-- footer -->
<?php require 'footer.php';?>

<!-- footer -->



