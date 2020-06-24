<!-- header -->

<?php require 'header.php'; ?>

<!-- header -->
<style>
    .mrgn_cstm {
        margin-bottom: -20px;
    }
</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12 m-auto">
            <div class="ms-panel-header">
                <h6 class="my-4 d-md-inline"><b>Students | </b><small>Archived Students Report</small></h6>
                <div class="float-md-right">
                    <a href="Academic-studentAdmission_profile.php" class="mt-1 btn btn-primary">Profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="Academic-student.php">Students</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Archived Students Report</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="form-group row mt-5">
            <label class="col-md-4 mt-2">Student Name</label>
            <div class="col-md-6">
                <input type="text" class="form-control" value="Abdul Basit">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-4 mt-2">Admission No.</label>
            <div class="col-md-6">
                <input type="text" class="form-control" value="S50">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-4 mt-2">Roll No.</label>
            <div class="col-md-6">
                <input type="text" class="form-control" value="PG025">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-4 mt-2">Subject</label>
            <div class="col-md-6">
                <select class="form-control">
                    <option selected="">Select Subject</option>
                    <option value="Subjects">All Subjects</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-4 mt-2">Mode</label>
            <div class="col-md-6">
                <select class="form-control">
                    <option selected="">Monthly</option>
                    <option value="monthly">Monthly</option>
                    <option value="over all">Over All</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-4 mt-2">Select Month And Year</label>
            <div class="col-md-3">
                <select class="form-control">
                    <option selected="">Month</option>
                    <option value="monthly">Monthly</option>
                    <option value="over all">Over All</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-control">
                    <option selected="">Year</option>
                    <option value="monthly">Monthly</option>
                    <option value="over all">Over All</option>
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal_PbatchReport">OK</a>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" id="modal_PbatchReport" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title has-icon ms-icon-round">Previous Batch Attendance Report</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mrgn_cstm text-center bold">
                        <p>Total Working Hours 50 | No. Of Applicable Days | Total Presents 50 | Percentage 100.00 </p>
                    </div>
                    <div class="col-md-12">
                        <div class="alert alert-warning text-center my-4">
                            <strong>Subject Skill Set Created</strong>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 my-5">
                    <div class="table-responsive">
                        <table class="table table-bordered thead-primary">
                            <tbody>
                                <tr>
                                    <th>Total No. Of Working Days</th>
                                    <td>14</td>
                                </tr>
                                <tr>
                                    <th>No. Of Applicable Days</th>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <th>Total Present</th>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <th>Percentage</th>
                                    <td>80 %</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <h5 class="col-md-12 my-2">Leave Details</h5>
                <div class="col-md-12 my-5">
                    <div class="table-responsive">
                        <table class="table table-bordered thead-primary">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Reason</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>14-05-2020</td>
                                    <td>Full-Day</td>
                                    <td>Fever</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal_batchReport_view" class="btn btn-primary">OK</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- footer -->

<?php require 'footer.php'; ?>

<!-- footer -->