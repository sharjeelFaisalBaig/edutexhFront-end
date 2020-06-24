<!-- header -->

<?php require 'header.php'; ?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="ms-panel-header">
                <h6 class="my-4 d-md-inline"><b>Admission | </b><small>Select Siblings</small></h6>
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
                <strong>Select Sibling To Set Immediate Contact . Please Skip This Option To Add New Set Of Guardians </strong>
            </div>
        </div>
        <div class="row mt-5">
            <p class="col-md-2">Sibling Selected :</p>
            <a href="#" class="col-md-3">Arsalan Khan Saleem</a>
            <div class="col-md-7">
                <a href="Academic-studentAdmission_step3.php" class="btn btn-primary d-inline mt-md-2">Save & Proceed</a>
                <a href="Academic-studentAdmission_step3.php" class="btn btn-primary d-inline ml-1 mt-md-2">Skip</a>
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <label class="col-md-2">Search :</label>
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder='Search Siblings'>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="table-responsive">
                    <table class="table table-bordered thead-primary">
                        <thead>
                            <tr>
                                <th scope="col">SI No</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Batch</th>
                                <th scope="col">Admin No.</th>
                                <th scope="col">Roll No.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Arsalan Khan Saleem</td>
                                <td>MBA-SEM II-A-2020</td>
                                <td>E12</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->

<?php require 'footer.php'; ?>

<!-- footer -->