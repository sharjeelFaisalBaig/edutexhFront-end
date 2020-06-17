<?php require_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-7">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php"> Home</a></li>
					<li class="breadcrumb-item"><a href="Academic_sub.php">Leaves</a></li>
					<li class="breadcrumb-item"><a href="Administration-HR-Leave_sub.php">Leaves</a></li>
					<li class="breadcrumb-item active" aria-current="page">Reportee’s Leaves</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-8 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-header">
                    <div>
                        <div class="dropdown text-right">
                            <button class="btn btn-primary">Pending leave applications(1)</button>
                            <button class="btn btn-primary">All Leave applications</button>
                        </div>
                    </div>
                </div>
                <div class="ms-panel-body">
                  <h4>Reportee’s Leaves</h4>
                    <p>Leave details od all the employee who report to you. Select an employee to view the leave details of the individual</p>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered table-striped thead-primary">
                        <thead>
                        <tr>
                            <th scope="col">Employee</th>
                            <th scope="col">Recent leave reset</th>
                            <th scope="col">Total leaves</th>
                            <th scope="col">Additional leaves</th>
                            <th scope="col">Loss of pay</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Libary</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><a href="employee-detail.php" class="text-dark">Muhammad Karan Gohar (E28)</a></td>

                            <td>
                               10-05-2020
                            </td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>

                        </tr>
                        </tbody>
                    </table>
                </div>
                <button class="btn btn-primary">CVS Report</button>
            </div>

        </div>
	</div>

</div>

<?php include_once('footer.php')?>
<script>
//    $("#startDate").val(new Date().getTime() / 1000 | 1);
//    $("#startDate").val(new Date().toDateString());

</script>
<script type="text/javascript">
//    start date
    var d = new Date();
    var elem = document.getElementById("startdate");
    elem.value = d.toISOString().slice(0,16);
//    end date
    var d = new Date();
    var elem = document.getElementById("enddate");
    elem.value = d.toISOString().slice(0,16);
</script>