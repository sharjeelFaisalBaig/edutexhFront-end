<!-- header -->

<?php require 'header.php'; ?>

<!-- header -->
<style>
    .cstm_thead {
        background-color: #8D0302;
        color: white;
    }
</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12 m-auto">
            <div class="ms-panel-header">
                <h6 class="my-4 d-md-inline"><b>Students Info | </b><small>Transport</small></h6>
                <div class="float-md-right">
                    <a href="Academic-userProfile_report_sub.php" class=" mt-1 btn btn-primary">Reports</a>
                    <a href="Academic-studentAdmission_step3.php" class="btn btn-primary mt-1 ">Guardians</a>
                    <a href="Academic-student-sendEmail.php" class="btn btn-primary mt-1 ">Send Email</a>
                    <a href="Academic-student-remove.php" class="btn btn-primary mt-1 ">Delete</a>
                    <a class="btn btn-primary dropdown-toggle  mt-1 " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="Academic-certificate_individualCertificate_sub.php">Generate TC</a>
                        <a class="dropdown-item" href="Academic-student-remarks.php">Remarks</a>
                        <a class="dropdown-item" href="#">Revert Archived Students</a>
                        <a class="dropdown-item" href="Academic-student-fees.php">Fees</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal_subject">Subjects</a>
                        <a class="dropdown-item" href="Academic-student-gallary.php">Gallary</a>
                        <a class="dropdown-item" href="Academic-student-hostel.php">Hostel</a>
                        <a class="dropdown-item" href="Academic-student-library.php">Library</a>
                        <a class="dropdown-item" href="Academic-studentAdmission_profile.php">Profile</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="Academic-student.php">Students</a></li>
                    <li class="breadcrumb-item"><a href="Academic-studentAdmission_profile.php">Profile</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Transport</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="row my-5">
            <div class="col-md-2 offset-md-3">
                <div class="text-center cstm_border">
                    <i class="fas fa-user  fa-10x"></i>
                </div>
            </div>
            <div class="col-md-6 ml-3 my-2">
                <h6 class="">Abdul Basit</h6>
                <p class="text-success">Class : Play Group</p>
                <p class="text-success">Batch : Pink</p>
                <p class="text-success">Admin No : S40</p>
                <p class="text-success">Roll No : PG025</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12 my-4">
                <div class="table-responsive">
                    <table class="table table-bordered thead-primary table-striped">
                        <tbody>
                            <tr>
                                <th class="cstm_thead">Mode</th>
                                <td>Two-Way Transport</td>
                            </tr>
                            <tr>
                                <th class="cstm_thead">Pickup Route</th>
                                <td>Soan Garden</td>
                            </tr>
                            <tr>
                                <th class="cstm_thead">Pickup Stop</th>
                                <td>Commetti Chowk</td>
                            </tr>
                            <tr>
                                <th class="cstm_thead">Pickup Vehical</th>
                                <td>RIJ-27</td>
                            </tr>
                            <tr>
                                <th class="cstm_thead">Drop Route</th>
                                <td>Soan Garden</td>
                            </tr>
                            <tr>
                                <th class="cstm_thead">Drop Stop</th>
                                <td>Commetti Chowk</td>
                            </tr>
                            <tr>
                                <th class="cstm_thead">Drop Vehical</th>
                                <td>RIJ-27</td>
                            </tr>
                            <tr>
                                <th class="cstm_thead">Fare</th>
                                <td>4000.00</td>
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