<!-- header -->

<?php require 'header.php'; ?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="ms-panel-header">
                <h6 class="my-4 d-md-inline"><b>Admission | </b><small>Additional Details</small></h6>
            </div>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="Academic-student.php">Students</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Students Admission</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="col-md-12 m-auto">
            <div class="alert alert-warning text-center my-4">
                <strong>Add The Additional Details</strong>
            </div>
        </div>
        <div class="row">
            <h6 class="mt-3">Additional Details</h6>
        </div>
        <hr>
        <div class="row my-4">
            <p class="d-inline"> Fields Marked With </p>
            <h6 class="text-danger d-inline"> *</h6>
            <p class="d-inline"> Must Be Filled</p>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Passport No.</label>
            <div class="col-sm-2">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Height Of Student</label>
            <div class="col-sm-2">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Wieght Of Student</label>
            <div class="col-sm-2">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-md-2">
            <a href="Academic-studentAdmission_profile.php" class="btn btn-primary">Save & Proceed</a>
        </div>
        <span class="col-md-10"></span>
    </div>
</div>
<!-- footer -->

<?php require 'footer.php'; ?>

<!-- footer -->