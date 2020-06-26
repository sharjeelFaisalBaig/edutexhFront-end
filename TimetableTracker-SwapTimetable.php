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
		<div class="col-md-12">
			<div class="ms-panel-header pt-0">
				<h6 class="d-md-inline"><i class="fas fa-clock"></i> Time Table</h6> | <small>Swapped Timetable</small>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="col-md-8">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Academic-TimeTable_sub.php">Timetable</a></li>
					<li class="breadcrumb-item"><a href="Academic-TimeTable_timetableTrack_sub.php">Timetable Tracker</a></li>
					<li class="breadcrumb-item active" aria-current="page">Swappped Timetable</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-8 m-auto">
			<div class=" w-100">
				<div id="stddiv">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group row my-3">
								<div class="col-md-12">
									<span class=""></span>
									<input class="form-input" type="radio" name="exampleRadios" id="searchAll" value="option1" onclick="changeToBatch()">
									<label class="form-label" for="searchAll">
										Batch-wise
									</label>
									<span class="ml-3"></span>
									<input class="form-input" type="radio" name="exampleRadios" id="searchBlocked" value="option1" onclick="changeToEmployee()">
									<label class="form-label" for="searchBlocked">
										Employee-wise
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group row my-3">
								<div class="col-md-12">
									<label>Select Batch</label>
									<select class="form-control " id="catagory">
										<option selected="">G1-A-2010</option>
										<option value="1">G1-B-2010</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group row my-3">
								<div class="col-md-12">
									<label>Select Date</label>
									<input type="date" class="form-control" name="">
								</div>
							</div>
						</div>
					</div>  
					<div class="row d-none" id="to_show_batch">
						<div class="col-lg-12 my-4">
							<div class="table-responsive">
								<table class="table thead-primary">
									<thead>
										<tr>
											<th>Class Timing</th>
											<th>Subject</th>
											<th scope="col" class="border-0"></th>
											<th scope="col" class="border-0"></th>
										</tr>
									</thead>
									<tbody class="table-bordered">
										<tr>
											<td>
												<div class="marginTop_x">08:00 AM - 09:00 AM</div>
											</td>
											<td>
												<p class="bold">English</p>
												<p class="d-inline text-muted">Teacher</p> &nbsp;&nbsp;
												<p class="d-inline">Nisar Ahmed Khoro</p>
											</td>
											<td>
												<p class="bold">Changed From English</p>
												<p class="d-inline text-muted">Teacher</p> &nbsp;&nbsp;
												<p class="d-inline">AsadUllah Khan</p>
											</td>
											<td>
												<div class="mt-4">
													<a href="#" class="d-inline m-0">Revert</a>&nbsp;&nbsp;
													<a href="#" class="d-inline m-0">Change</a>&nbsp;&nbsp;
													<a href="#" class="d-inline m-0">Cancel Class</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="marginTop_x">09:00 AM - 10:00 AM</div>
											</td>
											<td class="cstm_border_right"> 
												<p class="bold">Mathamatics</p>
												<p class="d-inline text-muted">Teacher</p> &nbsp;&nbsp;
												<p class="d-inline">Nisar Ahmed Khoro</p>
											</td>
											<td class="cstm_border_left cstm_border_right">

											</td>
											<td class="cstm_border_left">
												<div class="mt-4 text-md-right">
													<a href="#" class="d-inline m-0">Change</a>&nbsp;&nbsp;
													<a href="#" class="d-inline m-0">Cancel Class</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="marginTop_x">10:00 AM - 11:00 AM</div>
											</td>
											<td class="cstm_border_right"> 
												<p class="bold">Calculas</p>
												<p class="d-inline text-muted">Teacher</p> &nbsp;&nbsp;
												<p class="d-inline">Munir Nara</p>
											</td>
											<td class="cstm_border_left cstm_border_right">

											</td>
											<td class="cstm_border_left">
												<div class="mt-4 text-md-right">
													<a href="#" class="d-inline m-0">Change</a>&nbsp;&nbsp;
													<a href="#" class="d-inline m-0" data-toggle="modal" data-target="#modal_cancelClass">Cancel Class</a>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="row d-none" id="to_hide_emp">
						<div class="col-lg-12 my-4">
							<div class="table-responsive">
								<table class="table thead-primary">
									<thead>
										<tr>
											<th>Class Timing</th>
											<th>Subject</th>
											<th scope="col" class="border-0"></th>
											<th scope="col" class="border-0"></th>
										</tr>
									</thead>
									<tbody class="table-bordered">
										<tr>
											<td>
												<div class="marginTop_x">08:00 AM - 09:00 AM</div>
											</td>
											<td class="border-0">
												<label>Department</label>
												<select class="form-control " id="catagory">
													<option selected="">English</option>
													<option value="1">Math</option>
												</select>
												<div class="marginTop">
													<span class="bold">Teacher status:</span>&nbsp;Available
												</div>
											</td>
											<td class="border-0">
												<label>Employee</label>
												<select class="form-control " id="catagory">
													<option selected="">Nisaar Ahmed Siddiqui (E18)</option>
													<option value="1">Khalid Siddiqui</option>
												</select>
												<label class="ms-checkbox-wrap marginTop">
													<input type="checkbox" value="">
													<i class="ms-checkbox-check"></i>
												</label>
												<span>send alerts for this class change.</span>
											</td>
											<td class="border-0">
												<label>Subject</label>
												<select class="form-control " id="catagory">
													<option selected="">English</option>
													<option value="1">Math</option>
												</select>
												<a href="Swap.php" class="btn btn-primary">Swap</a>
												<a href="Academic-Library_ManageBookAdditionalDetails.php" class="btn btn-primary">Cancel</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" tabindex="-1" id="modal_cancelClass" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round">Cancel Class</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			</div>
			<div class="modal-body">
                <div class="row">
					<div class="col-md-12 text-md-center">
						<p>Are You Sure You Want To Cancel The Class </p>
					</div>
					<div class="col-md-12 text-md-center mt-2">
						<input class="form-check-input mt-1 " type="checkbox" id="inlineCheckbox2" value="option1">&nbsp;&nbsp;
						<label class="d-inline text-muted" for="inlineCheckbox2">Send Alerts</label>
					</div>
				</div>
            </div>
			<div class="modal-footer">
				<button type="button" href="#"  data-dismiss="modal" class="btn btn-primary">Cancel Class</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Leave</button>
			</div>
		</div>
	</div>
</div>
<script>
	var to_batch_var = document.querySelector("#to_show_batch");
	var to_emp_var = document.querySelector("#to_hide_emp");
	function changeToBatch(){
		to_batch_var.classList.remove("d-none")
		to_emp_var.classList.add("d-none")
	}
	function changeToEmployee(){
		to_batch_var.classList.add("d-none")
		to_emp_var.classList.remove("d-none")
	}
</script>
<!-- Body Content Wrapper -->
<!-- footer -->
<?php require 'footer.php'; ?>
<!-- footer -->