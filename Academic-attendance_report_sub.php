<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
  <div class="row">
    <div class="col-md-12">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb pl-0">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
          <li class="breadcrumb-item"><a href="Academic-attendance_sub.php">Attendance</a></li>
          <li class="breadcrumb-item active" aria-current="page">Attendance Report</li>
        </ol>
      </nav>
    </div>
    <div class="col-md-12">
        <div class="d-none">
            <h6>Attendance | <small>Attendance Report</small></h6>
        </div>
    </div>
    <div class="col-md-8 m-auto">        
        <div class="row my-5">
            <label class="col-md-2">Select A Batch</label>
            <div class="col-md-4">
                <select class="form-control" id="">
                    <option selected>PG-pink</option>
                    <option value="1">xyz</option>
                </select>                
            </div>
        </div>
        <div class="row">
            <label class="col-md-2">Select A Mode</label>
            <div class="col-md-10">
                <input class="form-input" type="radio" name="show_mode" id="show_mode" value="option1" onclick="show_monthly()">
                <label>Monthly</label>
                <span class="ml-3"></span>
                <input class="form-input" type="radio" name="show_mode" id="show_mode" value="option2" onclick="show_cstm()">
                <label>Custom Date</label>
                <span class="ml-3"></span>
                <input class="form-input" type="radio" name="show_mode" id="show_mode" value="option3" onclick="hide()" checked>
                <label>Over All</label>
            </div>
        </div>
        <div class="row my-5 d-none" id="to_show_cstm_1">
            <label class="col-md-2">Start Date</label>
            <div class="col-md-4">
                <input type="datetime-local" id="start-date" class="d-inline form-control hasDatepicker" placeholder="">    
            </div>
        </div>
        <div class="row my-5 d-none" id="to_show_cstm_2">
            <label class="col-md-2">End Date</label>
            <div class="col-md-4">
                <input type="datetime-local" id="end-date" class="d-inline form-control hasDatepicker" placeholder="">    
            </div>
        </div>
        <div class="row my-5 d-none" id="to_show_monthly">
            <label class="col-md-2">Select Month And Year</label>
            <div class="col-md-2">
                <select class="form-control">
                    <option selected>month</option>
                    <option value="2">jan</option>
                    <option value="2">feb</option>
                    <option value="3">march</option>
                </select>
            </div>
            <div class="col-md-2">
                <select class="form-control">
                    <option selected>Year</option>
                    <option value="1">2020</option>
                    <option value="2">2019</option>
                    <option value="3">2018</option>
                </select>
            </div>
            <span class="col-md-2"></span>
        </div>
        <div class="col-md-4">
            <a href="#" class="btn btn-primary" onclick="table_show()">View Report</a>
        </div>
        <div class="my-4 d-none" id="table_to_show">
            <div class="row mb-4">
                <div class="col-md-3">
                    <p>Total No. Of Working Days</p>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <label class="col-md-2">Filter</label>
                        <div class="col-md-4">
                            <select class="form-control">
                                <option selected>Below</option>
                                <option value="2">abc</option>
                                <option value="2">Above</option>
                                <option value="3">xyz</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary m-auto width70">Filter</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">    
                    <div class="table-responsive">
                        <table class="table table-bordered thead-primary">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Admin No.</th>
                                <th scope="col">Role No.</th>
                                <th scope="col">Total</th>
                                <th scope="col">Percentage(%)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-target="#modal_attendence_report" data-toggle="modal">Basit Gohari</td>
                                <td>E43</td>
                                <td>PG-052</td>
                                <td>4.0/5</td>
                                <td>80.0</td>
                            </tr>
                            <tr>
                                <td data-target="#modal_attendence_report" data-toggle="modal">Abdul Atiq</td>
                                <td>E30</td>
                                <td>PG-025</td>
                                <td>3.0/5</td>
                                <td>60.0</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" id="modal_attendence_report" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round">Student Details - Name</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			</div>
			<div class="modal-body">
            <div class="table-responsive">
                    <table class="table table-bordered thead-primary">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Reason</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12-04-2020</td>
                            <td>Full Day</td>
                            <td>Fever</td>
                        </tr>
                        <tr>
                            <td>12-04-2020</td>
                            <td>Full Day</td>
                            <td>Fever</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
			<div class="modal-footer">
				<button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<script>
    var monthly = document.getElementById("to_show_monthly").classList;
    var cstm_1 = document.getElementById("to_show_cstm_1").classList;
    var cstm_2 = document.getElementById("to_show_cstm_2").classList;
    var table = document.getElementById("table_to_show").classList;
    function show_monthly(){
        monthly.remove("d-none");
        cstm_1.add("d-none");
        cstm_2.add("d-none");
        table.add("d-none");
    }
    function show_cstm(){
        monthly.add("d-none");
        cstm_1.remove("d-none");
        cstm_2.remove("d-none");
        table.add("d-none");
    }
    function hide(){
        monthly.add("d-none");
        cstm_1.add("d-none");
        cstm_2.add("d-none");
        table.add("d-none");
    }
    function table_show(){
        table.remove("d-none");
    }
</script>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer --> 

        
        