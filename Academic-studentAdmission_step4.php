<!-- header -->

<?php require 'header.php'; ?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="ms-panel-header">
                <h6 class="my-4 d-md-inline"><b>Admission | </b><small>Add Guardian</small></h6>
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
        <div class="col-md-6 m-auto">
            <p class="col-md-12">The Following Guardian Is Saved For Muhammad Saleem </p>
            <div class="col-md-12">
                <input type="text" value="Muhammad Anwar - Father" readonly class="form-control">
            </div>
        </div>
        <div class="col-md-12 mt-4">
            <div class="col-md-6 m-auto">
                <a href="Academic-studentAdmission_step3.php" class="btn btn-primary d-inline">Add Another Guardian</a>
                <a href="#" data-toggle="modal" data-target="#modal_confirmGuardian" class="btn btn-primary d-inline">Set Immediate Contact</a>
                <a href="Academic-studentAdmission_step5.php" class="btn btn-primary d-inline">Finish</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" id="modal_confirmGuardian" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title has-icon ms-icon-round">Select Emergency Contacts</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="alert alert-warning text-center my-4">
                            <strong>Select One Of The Guardian As An Emergency Details</strong>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-6 m-auto">
                        <div class="custom-control custom-radio custom-control mt-3">
                            <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
                            <label class="custom-control-label" for="customRadio">Muhammad Anwar</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="Academic-studentAdmission_step5.php" class="btn btn-primary">Finish</a>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- footer -->

<?php require 'footer.php'; ?>

<!-- footer -->