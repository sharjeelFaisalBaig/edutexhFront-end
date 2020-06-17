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
                    <li class="breadcrumb-item active" aria-current="page">Send SMS to Students</li>
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
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom25">Select a batch</label>
                                        <div class="input-group">
                                            <select class="form-control" id="validationCustom25" required="">
                                                <option value="">PG - Pink</option>
                                                <option value="">MDY</option>
                                                <option value="">YMD</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Selection Required!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <h6>
                                            Select: 
                                            <a href="">All,</a>
                                            <a href="">None</a>
                                        </h6>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ms-widget ms-card overFlow-auto">
                                            <div class="ms-card-header">
                                                <h6>Student Name (Roll Number)</h6>
                                            </div>
                                            <div class="ms-card-body">
                                                <ul class="ms-list ms-task-block">
                                                    <li class="ms-list-item">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="" disabled="" > 
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span class="text-disabled">Amjad Ali (-)</span>
                                                    </li>
                                                    <li class="ms-list-item">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="" checked>
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Hamza (-) </span>
                                                    </li>
                                                    <li class="ms-list-item">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="" checked>
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Sabiha (-) </span>
                                                    </li>
                                                    <li class="ms-list-item">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="" checked>
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Sharik (-) </span>
                                                    </li>
                                                    <li class="ms-list-item">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="" checked>
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Ahsaan (-) </span>
                                                    </li>
                                                    <li class="ms-list-item">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="" checked>
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Islam (-) </span>
                                                    </li>
                                                    <li class="ms-list-item">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="" checked>
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Shehbaz (-) </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <small>Note : Students cannot be selected if student guardian doesn't have mobile number</small>
                                    </div>
                                    <div class="col-md-6">
                                        <form class="needs-validation mb-5" novalidate>
                                            <div class="form-row">
                                                <div class="col-md-2">
                                                    <label for="validationCustom03">
                                                        <p>Message</p>
                                                    </label>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="input-group">
                                                        <textarea class="form-control" id="validationCustom03" rows="9" placeholder="Hi, this is testing message"></textarea>
                                                        <div class="valid-feedback">Looks Good!</div>
                                                        <div class="invalid-feedback">Minimum 28 characters required.</div>
                                                    </div>
                                                    <small>28 characters</small>
                                                    <input type="submit" class="btn btn-primary d-block width80" name="btn25" value="Send SMS">
                                                </div>
                                            </div>
                                        </form>
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



