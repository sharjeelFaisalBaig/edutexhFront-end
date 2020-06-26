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
                <h6 class="my-4 d-md-inline"><b>Students Info | </b><small>General Profile</small></h6>
                <div class="float-md-right">
                    <a href="#" role="button" id="dropdownMenuLink_profile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="  dropdown-toggle mt-1 btn btn-primary">Profile</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_profile">
                        <a class="dropdown-item" href="Academic-employee_generalProfile.php">General Profile</a>
                        <a class="dropdown-item" href="Academic-employee_personalProfile.php">Personal Details</a>
                        <a class="dropdown-item" href="Academic-employee_addressProfile.php">Address Details</a>
                        <a class="dropdown-item" href="Academic-employee_contactProfile.php">Contact Details</a>
                        <a class="dropdown-item" href="Academic-employee_bankProfile.php">Bank Details</a>
                        <a class="dropdown-item" href="Academic-employee_additionalProfile.php">Additional Info</a>
                    </div>
                    <a href="#" role="button" id="dropdownMenuLink_salary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="  dropdown-toggle mt-1 btn btn-primary">Salary</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_salary">
                        <a class="dropdown-item" href="#">abc</a>
                        <a class="dropdown-item" href="#">xyz</a>
                    </div>
                    <a href="#" role="button" id="dropdownMenuLink_leave" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="  dropdown-toggle mt-1 btn btn-primary">Leaves</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_leave">
                        <a class="dropdown-item" href="#">abc</a>
                        <a class="dropdown-item" href="#">xyz</a>
                    </div>
                    <a href="#" class="btn btn-primary mt-1 ">Delete</a>
                    <a class="btn btn-primary dropdown-toggle  mt-1 " href="#" role="button" id="dropdownMenuLink_more" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_more">
                        <a class="dropdown-item" href="#">abc</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="#">Employee</a></li>
                    <li class="breadcrumb-item active" aria-current="page">General Profile</li>
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
                <h6 class="">Mumtaz Ahmed</h6>
                <p class="text-success">Employee ID : E10</p>
            </div>
        </div>
        <hr>
        <div class="col-md-12 my-4">
            <div class="table-responsive">
                <table class="table table-bordered thead-primary table-striped">
                    <tbody>
                        <tr>
                            <th class="cstm_thead">Joining Date</th>
                            <td>27 May 2020</td>
                        </tr>
                        <tr>
                            <th class="cstm_thead">Department</th>
                            <td>Chemistry</td>
                        </tr>
                        <tr>
                            <th class="cstm_thead">Catagory</th>
                            <td>Teaching Staff</td>
                        </tr>
                        <tr>
                            <th class="cstm_thead">Position</th>
                            <td>Senior Teacher</td>
                        </tr>
                        <tr>
                            <th class="cstm_thead">Grade</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="cstm_thead">Job Title</th>
                            <td>HST</td>
                        </tr>
                        <tr>
                            <th class="cstm_thead">Manager</th>
                            <td>
                                <a href="#">Zohaib Ali</a>&nbsp;&nbsp;
                                <a href="#">Chnage</a>
                            </td>
                        </tr>
                        <tr>
                            <th class="cstm_thead">Gender</th>
                            <td>Male</td>
                        </tr>
                        <tr>
                            <th class="cstm_thead">Email</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="cstm_thead">Status</th>
                            <td>Active</td>
                        </tr>
                        <tr>
                            <th class="cstm_thead">Qualification</th>
                            <td>BS</td>
                        </tr>
                        <tr>
                            <th class="cstm_thead">Experience</th>
                            <td>14 Years 5 Months</td>
                        </tr>
                        <tr>
                            <th class="cstm_thead">Experience Info</th>
                            <td>HST</td>
                        </tr>
                        <tr>
                            <th class="cstm_thead">Biometric ID</th>
                            <td>00000000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4 m-auto">
            <a href="Academic-studentAdmission.php" class="btn btn-primary d-inline">Edit</a>
            <a href="#" class="btn btn-primary d-inline">PDF Report</a>
        </div>
    </div>
</div>
<!-- <div class="modal fade" tabindex="-1" id="modal_subject" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title has-icon ms-icon-round">Student Subjects</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <p class="col-md-12">Normal</p>
                </div>
                <hr>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered thead-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Code</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>English</td>
                                        <td>ENG-G3</td>
                                    </tr>
                                    <tr>
                                        <td>Mathametics</td>
                                        <td>MATH-G3</td>
                                    </tr>
                                    <tr>
                                        <td>Physical Education</td>
                                        <td>PHY.EDU-G3</td>
                                    </tr>
                                    <tr>
                                        <td>Science</td>
                                        <td>SCI-G3</td>
                                    </tr>
                                    <tr>
                                        <td>Social Studies</td>
                                        <td>SS-G3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <p class="col-md-12">Elective Subjects</p>
                    <p class="col-md-12 text-muted mt-3"><i>No Electives Available</i></p>
                </div>
                <hr>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div> -->
<!-- footer -->

<?php require 'footer.php'; ?>

<!-- footer -->