<?php require_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-7">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php"> Home</a></li>
					<li class="breadcrumb-item"><a href="Academic_sub.php">Leaves</a></li>
					<li class="breadcrumb-item"><a href="Administration-HR-Leave_sub.php">Leaves</a></li>
					<li class="breadcrumb-item"><a href="Administration-HR-Leave_sub.php">Reportee’s Leaves</a></li>
					<li class="breadcrumb-item"><a href="Administration-HR-Leave_sub.php">Pending leave applications</a></li>
					<li class="breadcrumb-item active" aria-current="page">Approve/Deny Leave</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-8 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-body">
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
                    <h4>Leave Summary</h4>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered table-striped thead-primary">

                            <tbody>
                            <tr>
                                <td>Total Leave taken:</td>
                                <td>0/83</td>
                            </tr>
                            <tr>
                                <td>Casual Leave taken</td>
                                <td>0/20</td>
                            </tr>
                            <tr>
                                <td>Additional leaves taken</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Recent leave:</td>
                                <td>-</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-2">Remarks</div>
                        <div class="col-10">
                            <textarea class="form-control" name="" id="" rows="10"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-success">Approve</button>
                    <button class="btn btn-danger">Deny</button>
                </div>
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