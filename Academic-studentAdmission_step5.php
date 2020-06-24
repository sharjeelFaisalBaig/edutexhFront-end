<!-- header -->

<?php require 'header.php'; ?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="ms-panel-header">
                <h6 class="my-4 d-md-inline"><b>Admission | </b><small>Previous Educational Details</small></h6>
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
        <hr>
        <div class="row">
            <h5>Previous Educational Details</h5>
        </div>
        <hr>
        <form>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group row mt-4">
                        <label class="col-sm-3 col-form-label">Institution Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-3 col-form-label">Course</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-3 col-form-label">Year</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-3 col-form-label">Total Marks</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6 m-auto">
                        <a href="Academic-studentAdmission_step6.php" class="btn btn-primary d-inline">Skip</a>
                        <a href="Academic-studentAdmission_step6.php" class="btn btn-primary d-inline">Save & Proceed</a>
                    </div>
                </div>
                <div class="col-md-4 border-left">
                    <hr>
                    <div class="row mt-4">
                        <label class="col-md-5 text-muted">Physics :</label>
                        <p class="col-md-2 text-success">300</p>
                        <div class="col-md-2">
                            <i class="fas fa-minus-circle text-danger"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <label class="col-md-5 text-muted">Chemistry :</label>
                        <p class="col-md-2 text-success">100</p>
                        <div class="col-md-2">
                            <i class="fas fa-minus-circle text-danger"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <label class="col-md-5 text-muted">Biology :</label>
                        <p class="col-md-2 text-success">200</p>
                        <div class="col-md-2">
                            <i class="fas fa-minus-circle text-danger"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <a href="#" class="col-md-12">Add Subject</a>
                    </div>
                    <div class="row mt-4">
                        <h6 class="col-md-12">Subject Details</h6>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-sm-3 col-form-label">Subject</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-sm-3 col-form-label">Marks</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">Save</a>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- footer -->

<?php require 'footer.php'; ?>

<!-- footer -->