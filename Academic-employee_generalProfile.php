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
                <h6 class="my-4 d-md-inline"><b>Employees | </b><small>General Profile</small></h6>
                <div class="float-md-right">
                    <div class="dropdown d-inline">
                        <a href="#" role="button" id="dropdownMenuLink_1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="  dropdown-toggle mt-1 btn btn-primary">Profile</a>
                        <div class="dropdown-menu dropdownMenuLink_1" aria-labelledby="dropdownMenuLink_1">
                            <a class="dropdown-item" href="Academic-employee_personalProfile.php">Personal Details</a>
                            <a class="dropdown-item" href="Academic-employee_addressProfile.php">Address Details</a>
                            <a class="dropdown-item" href="Academic-employee_contactProfile.php">Contact Details</a>
                            <a class="dropdown-item" href="Academic-employee_bankProfile.php">Bank Details</a>
                            <a class="dropdown-item" href="Academic-employee_additionalProfile.php">Additional Info</a>
                        </div>
                    </div>
                    <div class="dropdown d-inline">
                        <a href="#" role="button" id="dropdownMenuLink_2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="  dropdown-toggle mt-1 btn btn-primary">Salary</a>
                        <div class="dropdown-menu dropdownMenuLink_2" aria-labelledby="dropdownMenuLink_2">
                            <a class="dropdown-item" href="Academic-employee_payroll.php">Payroll</a>
                            <a class="dropdown-item" href="Academic-employee_payslip.php">Pay Slip</a>
                        </div>
                    </div>
                    <div class="dropdown d-inline">
                        <a href="#" role="button" id="dropdownMenuLink_3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="  dropdown-toggle mt-1 btn btn-primary">Leaves</a>
                        <div class="dropdown-menu dropdownMenuLink_3" aria-labelledby="dropdownMenuLink_3">
                            <a class="dropdown-item" href="Academic-employee_leaves.php">Leaves</a>
                            <a class="dropdown-item" href="Academic-employee_Applyleave.php">Apply Leave</a>
                        </div>
                    </div>
                    <a href="Academic-employee_remove.php" class="btn btn-primary mt-1">Delete</a>
                    <div class="dropdown d-inline">
                        <a class="dropdown-toggle mt-1 btn btn-primary " id="dropdownMenuLink_4" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
                        <div class="dropdown-menu dropdownMenuLink_4" aria-labelledby="dropdownMenuLink_4">
                            <a class="dropdown-item" href="Academic-employee_timeTable.php">Time Table</a>
                            <a class="dropdown-item" href="Academic-employee_library.php">Library</a>
                            <a class="dropdown-item" href="Academic-employee_transport.php">Transport</a>
                            <a class="dropdown-item" href="Academic-employee_activities.php">Activities</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="Academic-employee_generalProfile.php">Employee</a></li>
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
<!-- footer -->

<?php require 'footer.php'; ?>

<!-- footer -->