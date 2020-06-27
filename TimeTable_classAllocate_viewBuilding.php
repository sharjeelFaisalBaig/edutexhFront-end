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
                <h6 class="d-md-inline"><i class="fa fa-building" aria-hidden="true"></i>Manage Building</h6> | Acedemic Block I <small></small>
                <div class="float-md-right">
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal_addRoom">Add Rooms</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic-TimeTable_sub.php">Timetable</a></li>
                    <li class="breadcrumb-item"><a href="Academic-TimeTable_classAllocate_sub.php">Class Allocation</a></li>
                    <li class="breadcrumb-item"><a href="TimeTable_classAllocate_manageBuilding.php">Manage Building</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Acedemic Block I</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="row mt-5">
            <label class="col-md-3 d-inline">Building Name</label>
            <label class="col-md-3 d-inline">: Academic Block I</label>
        </div>
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="table-responsive">
                    <table class="table table-bordered thead-primary">
                        <thead>
                            <tr>
                                <th scope="col">SI No</th>
                                <th scope="col">Room Name</th>
                                <th scope="col">Capacity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Room No. 1</td>
                                <td>
                                    <label>40</label>
                                    <div class="float-md-right">
                                        <a href="#" class="d-inline">Edit</a>&nbsp;&nbsp;
                                        <a href="#" class="d-inline">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Room No. 2</td>
                                <td>
                                    <label>40</label>
                                    <div class="float-md-right">
                                        <a href="#" class="d-inline">Edit</a>&nbsp;&nbsp;
                                        <a href="#" class="d-inline">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" id="modal_addRoom" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title has-icon ms-icon-round">Add Rooms</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="form-group row mt-4">
                    <label class="col-md-3">Room Name</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3">Capacity</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" href="#" data-dismiss="modal" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- <div class="ms-card p-3">
    <ul class="nav nav-tabs d-flex nav-justified mb-4" role="tablist">
        <li role="presentation"><a href="#tab13" aria-controls="tab13" class="active" role="tab" data-toggle="tab">Students</a></li>
        <li role="presentation"><a href="#tab14" aria-controls="tab14" role="tab" data-toggle="tab">Attendance </a></li>
        <li role="presentation"><a href="#tab15" aria-controls="tab15" role="tab" data-toggle="tab">Subject and Employee Allocation</a></li>
        <li role="presentation"><a href="#tab16" aria-controls="tab16" role="tab" data-toggle="tab">Timetables and Activities</a></li>
        <li role="presentation"><a href="#tab17" aria-controls="tab17" role="tab" data-toggle="tab">Examinations</a></li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active show fade in" id="tab13">
            <h5 class="d-inline-block ml-4 mb-3">9</h5><span class="font-weight-bold ml-3">Students</span>
            <hr>
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
                            <td>G204</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Arsalan Ali</td>
                            <td>S104</td>
                            <td>G204</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Jamshed Khan</td>
                            <td>S104</td>
                            <td>G204</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane show fade in" id="tab14">
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
                        <input type="text" id="datepicker">
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
                        <input type="text" id="datepicker">
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
        </div>
    </div>
</div> -->
<!-- footer -->
<?php require 'footer.php'; ?>
<!-- footer -->