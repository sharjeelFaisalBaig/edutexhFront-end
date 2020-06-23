<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="ms-panel-header">
                <h6 class="my-4 d-md-inline"><b>Students | </b><small>Home</small></h6>
                <div class="float-md-right">
                    <a href="Academic-studentAdmission.php" class="btn btn-primary m-0">Admission</a>
                    <a href="Academic-student_viewAll.php" class="btn btn-primary m-0">View All </a>
                    <a href="Academic-student_advance.php" class="btn btn-primary m-0">Advanced</a>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Students</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="form-group row">
            <label class="col-md-2 mt-1">Search</label>
            <div class="col-md-4">
                <input type="text" class="form-control">
            </div>
            <div class="custom-control custom-radio custom-control col-md-3 mt-2">
                <input type="radio" class="custom-control-input" id="present" name="example" value="customEx">
                <label class="custom-control-label" for="present">Present Students</label>
            </div>
            <div class="custom-control custom-radio custom-control col-md-3 mt-2">
                <input type="radio" class="custom-control-input" id="former" name="example" value="customEx">
                <label class="custom-control-label" for="former">Former Students</label>
            </div>
        </div>
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
                        <td><a href="Academic-studentAdmission_profile.php">Arsalan Khan Saleem</a></td>
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
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->
