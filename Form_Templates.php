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
                    <li class="breadcrumb-item"><a href="Collaboration-Forms_sub.php">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form Templates</li>
                </ol>
            </nav>
        </div> 

        <div class="col-md-8 m-auto">
            <div class="ms-panel-body">
                <form class="needs-validation clearfix" novalidate>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label for="validationCustom25">Form Name</label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom04" placeholder="Gender Testing - 01" required>
                                                <div class="invalid-feedback">This Field is Required</div>
                                                <div class="valid-feedback">This Field is Good</div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <label for="validationCustom25">Feedback Form</label>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="input-group">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <label for="validationCustom25">Feedback for Selected People</label>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="input-group">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <label for="validationCustom25">Visibility</label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="custom-control custom-radio d-inline">
                                                        <input type="radio" class="custom-control-input" id="customRadio5" name="example" value="customEx">
                                                        <label class="custom-control-label" for="customRadio5">Public</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="custom-control custom-radio d-inline">
                                                        <input type="radio" class="custom-control-input" id="customRadio6" name="example" value="customEx">
                                                        <label class="custom-control-label" for="customRadio6">Private</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <h6>Select People</h6>
                                </div>
                                <div class="col-md-5">
                                    <label for="validationCustom25">Select Department</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <select class="form-control" id="validationCustom25" required="">
                                            <option value="">English</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Selection Required!
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label for="validationCustom25">Select Recipient</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="card px-3">
                                        <p class="mb-0 mt-2 border-bottom">
                                            <strong>
                                                <span>Select </span>
                                                <a href="">All</a> ,
                                                <a href="">None</a>
                                            </strong>
                                        </p>
                                        <label class=" border-bottom">Muhammad Saleem (E2)</label>
                                        <label class=" border-bottom">Muhammad Sufyan S ...(E1)</label>
                                    </div>
                                </div>
                                <div class="col-md-5 mt-3">
                                    <label for="validationCustom25">Select a Batch</label>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="input-group">
                                        <select class="form-control" id="validationCustom25" required="">
                                            <option value="">PG - Pink</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Selection Required!
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label for="validationCustom25">Select Recipient</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="card px-3 receiptCard">
                                        <p class="mb-0 mt-2 border-bottom">
                                            <strong>
                                                <span>Select </span>
                                                <a href="">All</a> ,
                                                <a href="">None</a>
                                            </strong>
                                        </p>
                                        <label class=" border-bottom">Abdul Bari (S51) </label>
                                        <label class=" border-bottom">Abdul Basit (S50) </label>
                                        <label class=" border-bottom">Abdul Qudoos (S52) </label>
                                        <label class=" border-bottom">Abdul Salam (S39) </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-4 mt-4">
                            <label>Selected Recipients</label>
                            <div class="card px-3 receiptCard">
                                <p class="mb-0 mt-2 border-bottom">
                                    <strong>
                                        <span>Select </span>
                                        <a href="">All</a> ,
                                        <a href="">None</a>
                                    </strong>
                                </p>
                                <label class=" border-bottom">Abdul Bari (S51) </label>
                                <label class=" border-bottom">Abdul Basit (S50) </label>
                                <label class=" border-bottom">Abdul Qudoos (S52) </label>
                                <label class=" border-bottom">Abdul Salam (S39) </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row my-4">
                        <div class="col-md-7">
                            <div class="row mb-5">
                                <div class="col-md-5">
                                    Include
                                </div>
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="custom-control custom-radio d-inline">
                                                <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
                                                <label class="custom-control-label" for="customRadio">Parent</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="custom-control custom-radio d-inline">
                                                <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
                                                <label class="custom-control-label" for="customRadio2">Student</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="custom-control custom-radio d-inline">
                                                <input type="radio" class="custom-control-input" id="customRadio3" name="example" value="customEx">
                                                <label class="custom-control-label" for="customRadio3">Both</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-5">
                                    User Preferences
                                </div>
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="ms-list ms-task-block">
                                                <li class="ms-list-item">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox3">Editable</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="ms-list ms-task-block">
                                                <li class="ms-list-item">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox4">Multiple Submit</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="">
                                        <a href="" class="btn btn-primary width80">Publish</a>
                                        <a href="" class="btn btn-primary width80">Cancel</a>
                                    </div>
                                </div>

                                

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<!-- /Body Content Wrapper -->

<!-- footer -->
<?php require 'footer.php';?>

<!-- footer -->



