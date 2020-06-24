<!-- header -->

<?php require 'header.php'; ?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12 m-auto">
            <div class="ms-panel-header">
                <h6 class="my-4 d-md-inline"><b>Students | </b><small>Send Email</small></h6>
                <div class="float-md-right">
                    <a href="Academic-studentAdmission_profile.php" class="mt-1 btn btn-primary">Profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="Academic-student.php">Students</a></li>
                    <li class="breadcrumb-item"><a href="Academic-studentAdmission_profile.php">Sabiha</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Send Email</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-warning my-4 text-center">
                    <p><b>Name</b> : Sabiha &nbsp;&nbsp;<b>Course And Batch : </b>G2-A-2011 &nbsp;&nbsp;<b>Admin No : </b>S2</p>
                </div>
            </div>
        </div>
        <div class="form-group row mt-3">
            <div class="col-md-2">
                <label class="d-inline">Subject<span class="text-danger d-inline">*</span></label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label class="d-inline">Recipents</label>
            </div>
            <div class="col-md-6">
                <select class="form-control">
                    <option selected>Select Recipents</option>
                    <option value="Students">Students</option>
                    <option value="Guardian">Guardian</option>
                    <option value="Students & Guardians">Students & Guardians</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label class="d-inline">Message<span class="text-danger d-inline">*</span></label>
            </div>
            <div class="col-md-6">
                <textarea class="form-control" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="col-md-2 m-md-auto">
            <a href="#" class="btn btn-primary">Create</a>
        </div>
    </div>
</div>
<!-- footer -->

<?php require 'footer.php'; ?>

<!-- footer -->