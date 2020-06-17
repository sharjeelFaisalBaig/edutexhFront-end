<?php require_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
        <div class="col-md-7">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php"> Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">HR</a></li>
                    <li class="breadcrumb-item"><a href="Administration-HR-Leave_sub.php">Employee Leave Management</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Attendance Report</li>
                </ol>
            </nav>
        </div>
		<div class="col-md-8 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-body">
                    <h4>Attendance Report</h4>
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="" class="text-secondary">Leave type</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Active</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="" class="text-secondary">Select the department</label>
                                <select name="" id="" class="form-control">
                                    <option value="">All departments</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="" class="text-secondary">Employee with leave criteria</label>
                                <select name="" id="" class="form-control">
                                    <option value="">All</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <a href="#" class="text-dark"><u>Filter with dates</u></a>
                        </div>
                    </div>
                    <div class="table-responsive  table-bordered">
                        <div class="row p-3">
                            <div class="col-3"></div>
                            <div class="col-3">Leave Summary</div>
                            <div class="col-3">Casual Leave (CL)</div>
                            <div class="col-3">Earned Leave</div>
                        </div>
                        <table class="table table-hover table-striped thead-primary">
                            <thead>
                            <tr>
                                <th>Employee</th>
                                <th>Total leaves</th>
                                <th>Additional leaves</th>
                                <th>Loss of pay</th>
                                <th>Total Leave</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Library</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Muhammad Karan Gohar (E28)</td>
                                <td>1</td>
                                <td>-</td>
                                <td>-</td>
                                <td>1</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <button class="btn btn-primary">CSV report</button>
                </div>
            </div>
        </div>
	</div>

</div>

<?php include_once('footer.php')?>
