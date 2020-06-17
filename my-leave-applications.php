<?php require_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
        <div class="col-md-7">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php"> Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Leaves</a></li>
                    <li class="breadcrumb-item"><a href="Administration-HR-Leave_sub.php">My Leaves</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> My leave applications</li>
                </ol>
            </nav>
        </div>
		<div class="col-md-8 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-body">
                    <h4> My leave applications</h4>
                    <p>List of pending leave applications from employee who report to you</p>
                    <div class="row">
                        <div class="col-md-4 mt-4 mb-4">
                            <p class="text-secondary m-0">Employee name</p>
                            <p>Muhammad Karan Gohar (E28)</p>
                        </div>
                        <div class="col-md-4 mt-4 mb-4">
                            <p class="text-secondary m-0">Department</p>
                            <p>Library</p>
                        </div>

                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3">
                            <p class="">Applications status</p>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <select name="" id="" class="form-control">
                                    <option value="">All</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <a href="#" class="text-dark">Filter by date</a>
                        </div>

                    </div>
                    <hr>
                    <a href="#" class="text-dark"><u>Filter with dates</u></a>
                    <hr>

                    <div class="table-responsive">
                        <table class="table table-hover table-bordered table-striped thead-primary">
                            <thead>
                            <tr>
                                <th>Start date</th>
                                <th>End date</th>
                                <th>No. of days</th>
                                <th>Leave type</th>
                                <th>Leave status</th>
                                <th>Reason</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>12-05-2020</td>
                                <td>14-05-2020</td>
                                <td>3</td>
                                <td>Casual Leave</td>
                                <td>Denied</td>
                                <td>Work at home</td>
                                <td><a href="#"  data-toggle="modal" data-target="#modal-3">View</a></td>
                            </tr>
                            <tr>
                                <td>12-05-2020</td>
                                <td>14-05-2020</td>
                                <td>3</td>
                                <td>Casual Leave</td>
                                <td>Approved</td>
                                <td>Work at home</td>
                                <td><a href="#"  data-toggle="modal" data-target="#modal-3">View</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
	</div>

</div>
<div class="modal fade" id="modal-3" tabindex="-1" role="dialog" aria-labelledby="modal-3">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h6 class="modal-title has-icon ms-icon-round ">Edit Passport Number </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered table-striped thead-primary">

                        <tbody>
                        <tr>
                            <td>Employee</td>
                            <td>Muhammad Karan Gohar (E28)</td>
                        </tr>
                        <tr>
                            <td>Manager name:</td>
                            <td>Rashid Ahmed (E3)</td>
                        </tr>
                        <tr>
                            <td>Leave type:</td>
                            <td>Casual Leave</td>
                        </tr>
                        <tr>
                            <td>Date:</td>
                            <td>12-05-2020 To 14-05-2020</td>
                        </tr>
                        <tr>
                            <td>No.of days</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Status: </td>
                            <td>Pending</td>
                        </tr>
                        <tr>
                            <td>Reason:</td>
                            <td>Work at home</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary shadow-none">Update</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>

        </div>
    </div>
</div>
<?php include_once('footer.php')?>


