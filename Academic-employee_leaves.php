<!-- header -->

<?php require 'header.php'; ?>

<!-- header -->
<style>
    .cstm_thead {
        background-color: #8D0302;
        color: white;
    }

    .cstm_border_left {
        border-left: none !important;
    }

    .cstm_border_right {
        border-right: none !important;
    }

    .cstm_text_vertical {
        writing-mode: tb-rl !important;
        text-orientation: sideways-right !important;
        font-size: 25px;
    }
</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12 m-auto">
            <div class="ms-panel-header">
                <h6 class="my-4 d-md-inline"><b>Employees | </b><small>Leaves</small></h6>
                <div class="float-md-right">
                    <a class="btn btn-primary mt-1" href="Academic-employee_generalProfile.php">Profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="Academic-employee_generalProfile.php">Employee</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Leaves</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="row mt-5">
            <h6 class="col-md-12">My Leaves</h6>
        </div>
        <hr>
        <div class="row mt-4">
            <div class="col-md-4 border-right">
                <p class="text-muted">Employee Name</p>
                <p class="bold">Manzoor Mustafa (E8)</p>
            </div>
            <div class="col-md-4 border-right">
                <p class="text-muted">Recent Leave Reset</p>
                <p class="bold">01-06-2020</p>
            </div>
            <div class="col-md-4">
                <p class="text-muted">Employee Department</p>
                <p class="bold">Botany</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-2">
                <p class="mt-5">Filters</p>
            </div>
            <div class="col-md-3  ml-1 mt-3">
                <label>Leave Group</label>
                <select class="form-control">
                    <option selected>Select Leave Group</option>
                    <option value="Regular Employees">Regular Employees</option>
                </select>
            </div>
            <div class="col-md-3 ml-1 mt-3">
                <label>Leave Type</label>
                <select class="form-control">
                    <option selected>Select Leave Type</option>
                    <option value="Regular Employees">All</option>
                </select>
            </div>
            <div class="col-md-3 ml-1 mt-3">
                <label>Leave Criteria</label>
                <select class="form-control">
                    <option selected>Select Leave Criteria</option>
                    <option value="Regular Employees">All</option>
                </select>
            </div>
        </div>
        <hr>
        <div class="row">
            <a class="col-md-12 mt-2" href="#">Filter With Dates</a>
        </div>
        <hr>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered thead-primary">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Total</th>
                                <th scope="col">Casual Leaves</th>
                                <th scope="col">Maternity Leaves</th>
                                <th scope="col">Recreational Leaves</th>
                                <th scope="col">Earned Leaves</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Available Leave Credits</td>
                                <td>170 / 173</td>
                                <td>20 / 20</td>
                                <td>90 / 90</td>
                                <td>15 / 15</td>
                                <td>45 / 48</td>
                            </tr>
                            <tr>
                                <td>Total Leaves</td>
                                <td>3</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Additional Leaves</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Loss Of Pay</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered thead-primary">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Leave Date</th>
                                <th scope="col">Leave Type Leaves</th>
                                <th scope="col">Leave Criteria</th>
                                <th scope="col">Approver</th>
                                <th scope="col">Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01-06-2020 (Full-Day)</td>
                                <td>Earned Leave</td>
                                <td>Earned Leave</td>
                                <td>Marrige OF Nephew</td>
                                <td>Mumtaz Ahmed (E10)</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>11-06-2020 (Full-Day)</td>
                                <td>Earned Leave</td>
                                <td>Earned Leave</td>
                                <td>Marrige OF Nephew</td>
                                <td>Mumtaz Ahmed (E10)</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>10-06-2020 (Full-Day)</td>
                                <td>Earned Leave</td>
                                <td>Earned Leave</td>
                                <td>Marrige OF Nephew</td>
                                <td>Mumtaz Ahmed (E10)</td>
                                <td></td>
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