<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="ms-panel-header">
                <h6 class="my-4 d-md-inline"><b>Students | </b><small>View All</small></h6>
            </div>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="Academic-student.php">Students</a></li>
                    <li class="breadcrumb-item active" aria-current="page">View All</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="row form-group mt-4">
            <label class="col-md-1 mt-2">Batch</label>
            <div class="col-md-6">
                <select class="form-control">
                    <option value="mba-sem2">MBA-SEM II-A-2020</option>
                    <option value="mbaII-sem2">MBA-SEM II-B-2020</option>
                </select>
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
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><a href="Academic-studentAdmission_profile.php">Arsalan Khan Saleem</a></td>
                            <td>MBA-SEM II-A-2020</td>
                            <td>E12</td>
                            <td>-</td>
                            <td><a href="Academic-studentAdmission_profile.php">Profile</a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td><a href="Academic-studentAdmission_profile.php">Saleem Sattar</a></td>
                            <td>MBA-SEM II-A-2020</td>
                            <td>E12</td>
                            <td>-</td>
                            <td><a href="Academic-studentAdmission_profile.php">Profile</a></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->