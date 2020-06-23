<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<style>
.alert-secondary {
    color: #383d41;
    background-color: #f4f4f4;
    border-color: #f4f4f4;
}
</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="ms-panel-header pt-0">
                <h6 class="d-md-inline"><i class="fas fa-user-alt"></i> Applicant Registration</h6> |  <small>Customize Form</small>
                <div class="float-md-right">
                    <a href="applicantReg-archivedApp.php" class="m-0 btn btn-primary m-md-auto width70 m-md-auto">Archived Applicaions</a>
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
                    <li class="breadcrumb-item active" aria-current="page">Master of Business Administration</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-10 m-auto">
            <div class="ms-panel-body">
                <div class="row d-none" id="to_show_3">
                    <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="alert alert-warning text-center my-4">
                                <strong>Selected Applicant Allocated Successfully</strong>
                            </div>
                        </div>
                    <div class="col-md-2"></div> 
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
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Search Registration No or Name" name="">
                    </div>
                    <div class="col-md-2">
                        <a href="javascript:void(0);" class="btn btn-primary width70 m-auto">Search</a>
                    </div>
                </div>
                <div class="alert alert-secondary my-3">
                    <div class="row">
                        <div class="col-md-3 pt-md-4">
                            <a href="javascript:void(0);">Today</a>
                            <a href="javascript:void(0);" class="mx-3">Last 10 days</a>
                            <a href="javascript:void(0);">Last 30 days</a>
                        </div>
                        <div class="col-md-3 border-left">
                            <label>Start Date</label>
                            <input type="date" class="form-control" name="">
                        </div>
                        <div class="col-md-3">
                            <label>End Date</label>
                            <input type="date" class="form-control" name="">
                        </div>
                        <div class="col-md-3 text-md-right">
                            <a href="#" onclick="showFilter(); hideAllocate();" class="btn btn-primary width70">Filter Applicants</a>
                            <a href="javascript" class="btn btn-primary width70">Cancel</a>
                        </div>
                    </div>
                </div>
                <!--  -->
                <!-- <div id="to_show" class="d-none">
                    <div class="row">
                        <div class="col-md-3 mt-2">
                            <label>Change The Status Of Selected Applicants</label>
                        </div>
                        <div class="col-md-3">
                            <select  class="form-control">
                                <option selected>Select Status</option>
                                <option value="Awaited">Awaited</option>
                                <option value="Pending">Pending</option>
                            </select>
                        </div>
                        <div class="col-md-2 mt-1">
                            <input class="form-check-input d-inline" type="checkbox" id="inlineCheckbox2" value="option1">
                            <label for="inlineCheckbox2" class="d-inline">Paid</label>
                        </div>
                        <div class="col-md-4">
                            <a href="#" onclick="hideFilter() ; showAllocate();" class="btn btn-primary d-inline">Update Status</a>&nbsp;
                            <a href="#" onclick="hideFilter()" class="btn btn-primary d-inline">Cancel</a>
                        </div>
                    </div>
                </div> -->
                <!--  -->
                <div class="tabsDiv mt-4">
                    <ul class="nav nav-tabs d-flex nav-justified mb-4" role="tablist">
                        <li role="presentation" ><a href="#tab13" aria-controls="tab13" class="active" role="tab" data-toggle="tab">All (1)</a></li>
                        <li role="presentation" ><a href="#tab14" aria-controls="tab14" role="tab" data-toggle="tab">Pending (0)</a></li>
                        <li role="presentation" ><a href="#tab15" aria-controls="tab15" role="tab" data-toggle="tab">Alloted (0)</a></li>
                        <li role="presentation" ><a href="#tab16" aria-controls="tab16" role="tab" data-toggle="tab">Discarded (0)</a></li>
                        <li role="presentation" ><a href="#tab17" aria-controls="tab17" role="tab" data-toggle="tab">Awaited (0)</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active show fade in" id="tab13">
                            <p class="text-muted">Listing all the applications of this course.</p>
                            <hr>
                            <div class="table-responsive">
                                <table id="data-table-4" class="table w-100 thead-primary">
                                    <thead>
                                        <tr>
                                            <th width="80">
                                                <input class="form-check-input ml-0 mt-0" type="checkbox" id="inlineCheckbox1" value="option1" style="position: unset;">
                                            </th>
                                            <th>Reg No</th>
                                            <th>Applicant Name</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Application Fee</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-bottom">
                                            <td width="80">
                                                <input class="form-check-input ml-0" type="checkbox" id="inlineCheckbox2" value="option1">
                                            </td>
                                            <td>1</td>
                                            <td><a href="applicantReg-ApplicationView.php">Muhammad Saleem</a></td>
                                            <td>27-05-2020</td>
                                            <td>Pending</td>
                                            <td>Not Paid</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="to_show" class="d-none">
                                <div class="row">
                                    <div class="col-md-3 mt-2">
                                        <label>Change The Status Of Selected Applicants</label>
                                    </div>
                                    <div class="col-md-3">
                                        <select  class="form-control">
                                            <option selected>Select Status</option>
                                            <option value="Awaited">Awaited</option>
                                            <option value="Pending">Pending</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 mt-1">
                                        <input class="form-check-input d-inline" type="checkbox" id="inlineCheckbox2" value="option1">
                                        <label for="inlineCheckbox2" class="d-inline">Paid</label>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#" onclick="hideFilter() ; showAllocate();" class="btn btn-primary d-inline">Update Status</a>&nbsp;
                                        <a href="#" onclick="hideFilter()" class="btn btn-primary d-inline">Cancel</a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-none" id="to_show_2">
                                <div class="row">
                                    <div class="col-md-4 mt-2">
                                        <label>Select Batch To Admit Selected Applicants</label>
                                    </div>
                                    <div class="col-md-4">
                                        <select  class="form-control">
                                            <option selected>Select Batch</option>
                                            <option value="Awaited">MBA-SEM II-A-2020</option>
                                            <option value="Pending">Pending</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-4 m-auto">
                                        <a href="#" onclick="hideAllocate() ; showAlert();" class="btn btn-primary">Allocate Applicant</a>
                                        <a href="#" onclick="hideAllocate()" class="btn btn-primary">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane show fade in" id="tab14">
                        </div>
                        <div role="tabpanel" class="tab-pane show fade in" id="tab15">
                        </div>
                        <div role="tabpanel" class="tab-pane show fade in" id="tab16">
                        </div>
                        <div role="tabpanel" class="tab-pane show fade in" id="tab17">
                        </div>
                        <!-- <div role="tabpanel" class="tab-pane show fade in" id="tab14">
                            <div class="row">
                                <div class="col-md-2">
                                    <h6 class="ml-md-4">Today</h6>
                                    <small class="ml-md-4 my-2">14 May 2020</small>
                                </div>
                                <div class="col-md-3 text-md-center">
                                    <h6 class="d-inline-block">Present</h6>
                                    <h5 class="d-inline ml-2">32 <sup>Out of 33</sup></h5>
                                </div>
                                <div class="col-md-3 text-md-center">
                                    <h6 class="d-inline-block">Absentees</h6>
                                    <h5 class="d-inline ml-2">1</h5>
                                </div>
                                <div class="col-md-4">
                                    <p class="font-weight-bold d-inline-block">Attendance Percentage</p>
                                    <h5 class="d-inline ml-2">96%</h5>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3 mt-2">
                                    List of Absentees
                                </div>
                                <div class="offset-md-4 col-md-5 text-md-right">
                                    <div class="date-div">
                                        <button class="next" id="prev"><i class="fas fa-chevron-left"></i></button>
                                        <input  type="text" id="datepicker" >
                                        <button class="prev" id="next"><i class="fas fa-chevron-right"></i></button>
                                        <i class="far fa-calendar-alt"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table id="data-table-4" class="table w-100 thead-primary table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SI NO</th>
                                            <th>Student Name</th>
                                            <th>Addmission Number</th>
                                            <th>Roll Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Amjad Khan</td>
                                            <td>S104</td>
                                            <td>PG025</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane show fade in" id="tab15">
                            <div class="row">
                                <div class="col-md-3 text-md-center">
                                    <h6 class="d-inline-block">Subjects</h6>
                                    <h5 class="d-inline ml-2">6</h5>
                                </div>
                                <div class="col-md-3">
                                    <h6 class="d-inline-block">Employees</h6>
                                    <h5 class="d-inline ml-2">6</h5>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="mt-2">Timetable</label>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control">
                                        <option value="">01 June 2020 - 28 February 2021</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2 mb-4">
                                <div class="col-md-3">
                                    <label>Subject-wise Summary</label>
                                </div>
                                <div class="col-md-4">
                                    <label class="text-muted">Employee-wise Summary</label>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table id="data-table-4" class="table w-100 thead-primary table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Subject</th>
                                            <th>Periods/Week</th>
                                            <th>Employee</th>
                                            <th>Periods/Employee</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>General Science</td>
                                            <td>5</td>
                                            <td>Muhammad Sufyan</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>General Science</td>
                                            <td>5</td>
                                            <td>Muhammad Sufyan</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>General Science</td>
                                            <td>5</td>
                                            <td>Muhammad Sufyan</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>General Science</td>
                                            <td>5</td>
                                            <td>Muhammad Sufyan</td>
                                            <td>5</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane show fade in" id="tab16">
                            <div class="row">
                                <div class="col-md-3">
                                    <h6 class="ml-md-4">01 June 2020</h6>
                                </div>
                                <div class="col-md-3">
                                    <h6 class="d-inline-block">Timetable Periods</h6>
                                    <h5 class="d-inline ml-2">6</h5>
                                </div>
                                <div class="col-md-3">
                                    <p class="font-weight-bold d-inline-block">Calendar Events</p>
                                    <h5 class="d-inline ml-2">1</h5>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3 mt-2">
                                    Timetable Periods (6)
                                </div>
                                <div class="offset-md-4 col-md-5 text-md-right">
                                    <div class="date-div">
                                        <button class="next" id="prev"><i class="fas fa-chevron-left"></i></button>
                                        <input  type="text" id="datepicker">
                                        <button class="prev" id="next"><i class="fas fa-chevron-right"></i></button>
                                        <i class="far fa-calendar-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive mb-4">
                                <table id="data-table-4" class="table w-100 thead-primary table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Class Timing</th>
                                            <th>Subject</th>
                                            <th>Emloyee</th>
                                            <th>Classroom</th>
                                            <th>Building</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>8:30 AM - 9:00 AM</td>
                                            <td>Mathematics</td>
                                            <td>Ibrar Hussain</td>
                                            <td>Grade - 01</td>
                                            <td>Academic Block - I</td>
                                        </tr>
                                        <tr>
                                            <td>8:30 AM - 9:00 AM</td>
                                            <td>Mathematics</td>
                                            <td>Ibrar Hussain</td>
                                            <td>Grade - 01</td>
                                            <td>Academic Block - I</td>
                                        </tr>
                                        <tr>
                                            <td>8:30 AM - 9:00 AM</td>
                                            <td>Mathematics</td>
                                            <td>Ibrar Hussain</td>
                                            <td>Grade - 01</td>
                                            <td>Academic Block - I</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <span>Calendar Events (1)</span>
                            <div class="table-responsive mt-3">
                                <table id="data-table-4" class="table w-100 thead-primary table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Timing</th>
                                            <th>Events</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01 June 2020 - 01 June 2020</td>
                                            <td>School Holiday</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane show fade in" id="tab17">
                            <div class="row">
                                <div class="col-md-2 text-md-center">
                                    <h6 class="d-inline-block">New Exams</h6>
                                    <h5 class="d-inline ml-1">0</h5>
                                </div>
                                <div class="col-md-3 border-right">
                                    <h6 class="d-inline-block">Published Exams</h6>
                                    <h5 class="d-inline">1</h5>
                                </div>
                                <div class="col-md-2">
                                    <p class="text-muted d-inline-block">Ongoing Exams</p>
                                    <p class="d-inline ml-2">0</p>
                                </div>
                                <div class="col-md-2">
                                    <p class="text-muted d-inline-block">Finished Exams</p>
                                    <p class="d-inline ml-2">0</p>
                                </div>
                                <div class="col-md-2">
                                    <p class="text-muted d-inline-block">Results Exams</p>
                                    <p class="d-inline ml-2">0</p>
                                </div>
                            </div>
                            <hr>
                            <div class="table-responsive">
                                <table id="data-table-4" class="table w-100 thead-primary table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Exam Group</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Assessment - I</td>
                                            <td>Exam Schedule Published</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!--  -->
                <!-- <div class="row">
                    <div class="col-md-4 mt-2">
                        <label>Change The Status Of Selected Applicants</label>
                    </div>
                    <div class="col-md-4">
                        <select  class="form-control">
                            <option selected>Select Batch</option>
                            <option value="Awaited">MBA-SEM II-A-2020</option>
                            <option value="Pending">Pending</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 m-auto">
                        <a href="#" class="btn btn-primary">Allocate Applicant</a>
                        <a href="#" class="btn btn-primary">Cancel</a>
                    </div>
                </div>  -->
                <!--  -->
                <div class="row">
                    <div class="col-md-7">
                        <a href="#" onclick="showFilter() ; hideAllocate();" class="btn btn-primary width70">Update Status</a>
                        <a href="#" onclick="showAllocate(); hideFilter(); " class="btn btn-primary width70">Allocate Applicant</a>
                        <a href="javascript:void();" class="btn btn-primary width70">Discard</a>
                    </div>
                    <div class="col-md-5 text-md-right">
                        <a href="javascript:void();" data-toggle="modal" data-target="#modal_contactApp" class="btn btn-primary width70">Contact Applicants</a>
                        <div class="dropdown d-inline">
                            <a href="javascript:void();" class="btn btn-primary width70  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Reports
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">PDF Report</a>
                                <a class="dropdown-item" href="#">Detailed CSV Report</a>
                                <a class="dropdown-item" href="#">Download PDF</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" id="modal_contactApp" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title has-icon ms-icon-round">Contact Applicant</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			</div>
			<div class="modal-body">
                <div class="row mt-4">
                    <label class="col-md-2">Application</label>
                    <label class="col-md-4 offset-md-1">0 Selected</label>
                </div>
                <div class="row mt-1">
                    <label class="col-md-2">Send To</label>
                    <div class="col-md-4 offset-md-1">
                        <input type="checkbox" name="cline1" id="c1">
                        <label for="c1" class="">Applicant</label>
                    </div>
                    <div class="col-md-4 offset-md-1">
                        <input type="checkbox" name="cline1" id="c2">
                        <label for="c2" class="">Guardian</label>
                    </div>
                </div>
                <div class="row mt-1">
                    <label class="col-md-2">Send To</label>
                    <div class="col-md-4 offset-md-1">
                        <input type="checkbox" name="cline2" id="c3">
                        <label for="c3" class="">E-mail</label>
                    </div>
                    <div class="col-md-4 offset-md-1">
                        <input type="checkbox" name="cline2" id="c4">
                        <label for="c4" class="">SMS</label>
                    </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-2">Email Content</label>
                  <div class="col-md-6 offset-md-1">
                    <input type="text" class="form-control" placeholder="Subject">
                    <textarea class="form-control mt-1" cols="30" rows="10" placeholder="Body"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-2">SMS Content</label>
                  <div class="col-md-6 offset-md-1">
                    <input type="text" class="form-control">
                  </div>
                </div>
            </div>
			<div class="modal-footer">
				<button type="button" href="#" data-dismiss="modal" class="btn btn-primary">Send</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>
<script>
    var showFilterVar = document.getElementById("to_show").classList;
    var showAllocVar = document.getElementById("to_show_2").classList;
    var showAlertVar = document.getElementById("to_show_3").classList;
    function showFilter(){
        showFilterVar.remove("d-none");
    }
    function hideFilter(){
        showFilterVar.add("d-none");
    }
    function showAllocate(){    
        showAllocVar.remove("d-none");
    }
    function hideAllocate(){    
        showAllocVar.add("d-none");
    }
    function showAlert() {
        showAlertVar.remove("d-none")
    } 
</script>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->