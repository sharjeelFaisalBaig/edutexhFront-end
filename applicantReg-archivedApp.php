<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="ms-panel-header pt-0">
                <h6 class="d-md-inline"><i class="fas fa-user-alt"></i>Applicant Registration</h6> | Archived Application
                <div class="float-md-right">
                    <a href="applicantReg-view-details.php" class="m-0 btn btn-primary m-md-auto width70 m-md-auto">Active Applicaions</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="ApplicantRegistration.php">Applicant Registration</a></li>
                    <li class="breadcrumb-item"><a href="applicantReg-view-details.php">Master of Business Administration</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Archived Applications</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-10 m-auto">
        <div class="row my-4">
            <h5 class="col-md-12">Archive Applications</h5>
        </div>    
        <div class="row mt-3">
            <div class="col-md-1">
                <p>Courses</p>
            </div>
            <div class="col-md-6">
                <p class="font-weight-bold">MBA (2.5 Years Program) (Master of Business Administrationdmin)</p>
            </div>
            <div class="col-md-2">
                <p>Applicant <b> &nbsp;&nbsp;1</b></p>
            </div>
            <div class="col-md-3 text-md-right">
                <p>Amount Collected <b> &nbsp;&nbsp; Rs. 0.00</b></p>
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <div class="col-md-3">
                <input type="text" class="form-control">
            </div>
            <div class="col-md-2">
                <a href="#" class="btn btn-primary m-0">Search</a>
            </div>
            <label class="col-md-1 offset-md-2">Filter By Status</label>
            <div class="col-md-4">
                <select class="form-control">
                    <option value="all-status">All Status</option>
                    <option value="pending">Pending</option>
                    <option value="awaited">Awaited</option>
                </select>
            </div>
        </div>
        <div class="table-responsive">
            <table id="data-table-4" class="table w-100 thead-primary">
                <thead>
                    <tr>
                        <th>Reg No</th>
                        <th>Applicant Name</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Application Fee</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-bottom">
                        <td>1</td>
                        <td><a href="applicantReg-ApplicationView.php">Muhammad Saleem</a></td>
                        <td>27-05-2020</td>
                        <td>Pending</td>
                        <td>Not Paid</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6 m-auto">
            <a href="#" class="btn btn-primary">Detailed CSV Report</a>
            <a href="#" class="btn btn-primary">Download PDF</a>
            <a href="#" class="btn btn-primary">Export CSV</a>
        </div>
    </div>
</div>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->