<!-- header -->

<?php require 'header.php'; ?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12 m-auto">
            <div class="ms-panel-header">
                <h6 class="my-4 d-md-inline"><b>Students Info | </b><small>Students Documents</small></h6>
                <div class="float-md-right">
                    <a href="Student_Document_Categories.php" class=" mt-1 btn btn-primary">Student Document Catagories</a>
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
                    <li class="breadcrumb-item active" aria-current="page">Student Documents</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="row my-5">
            <div class="col-md-2">
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
            <h5 class="col-md-12">Student Documents</h5>
        </div>
        <div class="row mt-4">
            <div class="col-md-2 text-md-left">
                <h6>Default</h6>
            </div>
            <div class="col-md-2 offset-md-8 text-md-right">
                <a href="#">Add Document</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-1">
                <div class="table-responsive">
                    <table class="table table-bordered thead-primary">
                        <thead>
                            <tr>
                                <th scope="col">Document Name</th>
                                <th scope="col">Added On</th>
                                <th></th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Transcript</th>
                                <td>31-02-2020</td>
                                <td>
                                    <a href="Academic-studentAdmission_profile.php" class="d-inline">Edit</a>&nbsp;&nbsp;
                                    <a href="Academic-studentAdmission_profile.php" class="d-inline float-md-right">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 text-md-left">
                <h6>Registration Documents</h6>
            </div>
            <div class="col-md-2 offset-md-6 text-md-right">
                <a href="#">Add Document</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-1">
                <div class="table-responsive">
                    <table class="table table-bordered thead-primary">
                        <thead>
                            <tr>
                                <th scope="col">Document Name</th>
                                <th scope="col">Added On</th>
                                <th></th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">CNIC</th>
                                <td>31-02-2020</td>
                                <td>
                                    <a href="Academic-studentAdmission_profile.php" class="d-inline">Edit</a>&nbsp;&nbsp;
                                    <a href="Academic-studentAdmission_profile.php" class="d-inline float-md-right">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Mark Sheet</th>
                                <td>31-05-2020</td>
                                <td>
                                    <a href="Academic-studentAdmission_profile.php" class="d-inline">Edit</a>&nbsp;&nbsp;
                                    <a href="Academic-studentAdmission_profile.php" class="d-inline float-md-right">Delete</a>
                                </td>
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