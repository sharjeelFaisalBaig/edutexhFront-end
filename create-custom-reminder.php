<!-- header -->
<?php require 'header.php';?>

<!-- header -->

<!-- Body Content Wrapper -->
<div class="ms-content-wrapper container">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
			        <li class="breadcrumb-item"><a href="Administration-reminder_sub.php">Reminders</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Custom Reminder</li>
                </ol>
            </nav>
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="ms-panel-body">
                <form class="needs-validation mt-4 clearfix" novalidate>
                    <div class="form-row">
                        <div class="col-md-3">
                            <p class="py-2"><strong>Reminder Name</strong></p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Urgent Meeting" name="">
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-md-3">
                            <p class="py-2"><strong>Reminder Date</strong></p>
                        </div>
                        <div class="col-md-2">
                            <input type="datetime-local" class="form-control" placeholder="" id="defaultdate" name="">
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-md-3">
                            <p class="py-3"><strong>Reminder Mode</strong></p>
                        </div>
                        <div class="col-md-3">
                            <ul class="ms-list ms-task-block">
                                <li class="ms-list-item">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" checked="">
                                        <label class="form-check-label" for="inlineCheckbox1">Email</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul class="ms-list ms-task-block">
                                <li class="ms-list-item">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1" checked="">
                                        <label class="form-check-label" for="inlineCheckbox2">SMS</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                    	<div class="col-md-6 mb-3">
                            <p class="font-weight-bold mb-4">Reminder Message - Email</p>
                            <p class="font-weight-bold">Email Subject</p>
                            <div class="ms-card p-3 mb-3 text-muted">Urgent Meeting - Exam Scheduling</div>
                            <p class="font-weight-bold">Email Message</p>
                            <textarea placeholder="Hi,
You all are invited to come on an Urgent Meeting." class="form-control" rows="5"></textarea>
                            <p class="font-weight-bold mt-3">Email Signature</p>
                            <textarea placeholder="Muhammad Adnan
Mehran Model School and College Pano-Akil,
Eidgah Road, Pano-Akil" class="form-control" rows="3"></textarea>
                        </div>
                    	<div class="col-md-6">
                    		<p class="font-weight-bold mb-4">Reminder Message - SMS</p>
                            <p class="font-weight-bold">SMS Message</p>
                            <textarea placeholder="Hi,
You all are invited to come on an Urgent Meeting." class="form-control" rows="5"></textarea>

                    	</div>
                    </div>
                    <hr>
                    <form class="needs-validation">
                        <p class="font-weight-bold mb-4">Recipients of Reminder</p>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label class="form-control-label">User Type</label>
                                <select class="form-control" id="location">
                                    <option value="NoneUser">Select User</option>
                                    <option value="Students">Students</option>
                                    <option value="Employees">Employees</option>
                                </select>
                            </div>
                            <div class="col-md-3 myD-none" id="Students">
                                <label class="form-control-label">Course</label>
                                <select class="form-control">
                                    <option>Grade 2</option>
                                </select>
                            </div>
                            <div class="col-md-3 myD-none" id="Students">
                                <label class="form-control-label">Batches</label>
                                <select class="form-control">
                                    <option>All Selected</option>
                                </select>
                            </div>
                            <div class="col-md-3 myD-none" id="Employees">
                                <label class="form-control-label">Employee Departments</label>
                                <select class="form-control">
                                    <option>All Selected</option>
                                </select>
                            </div>
                        </div>
                        <div class="myD-none" id="Students">
                            <div class="form-row">
                                <div class="col-md-1">
                                    <ul class="ms-list ms-task-block">
                                        <li class="ms-list-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option1" checked="">
                                                <label class="form-check-label" for="inlineCheckbox5">Students</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-2">
                                    <ul class="ms-list ms-task-block">
                                        <li class="ms-list-item">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox4">Parents</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 mb-sm-4">
                                    <div class="table-responsive overflowY" style="height: 250px;"> <!-- give "overflowY" desire width overflow will apply -->
                                        <table class="table table-bordered thead-primary">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <div class="form-check form-check-inline m-0">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="">
                                                        </div>
                                                    </th>
                                                    <th>Student Name</th>
                                                    <th width="150">Addmission Number</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="3">G2-A-2011</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-check-inline m-0">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="">
                                                        </div>
                                                    </td>
                                                    <td>Mohsin Irfan</td>
                                                    <td>S10</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-check-inline m-0">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="">
                                                        </div>
                                                    </td>
                                                    <td>Sabiha</td>
                                                    <td>S2</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-check-inline m-0">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="">
                                                        </div>
                                                    </td>
                                                    <td>Zeeshan Khan</td>
                                                    <td>S8</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">G2-A-2011</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-check-inline m-0">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="">
                                                        </div>
                                                    </td>
                                                    <td>Mohsin Irfan</td>
                                                    <td>S10</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-1 text-center">
                                    <button class="btn btnRytArrow">
                                        <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                                <div class="col-md-5">
                                    <div class="table-responsive overflowY" style="height: 250px;border: 1px solid #ccc;border-bottom: none;">
                                        <table class="table table-bordered thead-primary">
                                            <thead>
                                                <tr>
                                                    <th>Selected Users</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        G2-A-2011(2)
                                                        <a href=""><span aria-hidden="true" class="float-right">×</span></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <small>1 Selected</small>
                                </div>
                            </div>
                        </div>
                        <div class="myD-none mt-4" id="Employees">
                            <div class="row">
                                <div class="col-md-5 mb-sm-4">
                                    <div class="table-responsive overflowY" style="height: 250px;">
                                        <table class="table table-bordered thead-primary">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <div class="form-check form-check-inline m-0">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="">
                                                        </div>
                                                    </th>
                                                    <th>Employee Name</th>
                                                    <th width="150">Employee Number</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="3">Sytem Admin</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-check-inline m-0">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="">
                                                        </div>
                                                    </td>
                                                    <td>Admin User</td>
                                                    <td>Admin10</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">English</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-check-inline m-0">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="">
                                                        </div>
                                                    </td>
                                                    <td>Asadullah Shah</td>
                                                    <td>E16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-check-inline m-0">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="">
                                                        </div>
                                                    </td>
                                                    <td>Muhammad Aslam Sheikh</td>
                                                    <td>E17</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-check-inline m-0">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="">
                                                        </div>
                                                    </td>
                                                    <td>Muhammad Irshad Nazeer</td>
                                                    <td>E18</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-check-inline m-0">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="">
                                                        </div>
                                                    </td>
                                                    <td>Nisar Ahmed Siddique</td>
                                                    <td>E19</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-1 text-center">
                                    <button class="btn btnRytArrow">
                                        <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                                <div class="col-md-5">
                                    <div class="table-responsive overflowY" style="height: 250px;border: 1px solid #ccc;border-bottom: none;">
                                        <table class="table table-bordered thead-primary">
                                            <thead>
                                                <tr>
                                                    <th>Selected Users</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        G2-A-2011(2)
                                                        <a href=""><span aria-hidden="true" class="float-right">×</span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        English(2)
                                                        <a href=""><span aria-hidden="true" class="float-right">×</span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Mathematics(1)
                                                        <a href=""><span aria-hidden="true" class="float-right">×</span></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <small>5 Selected</small>
                                </div>
                            </div>
                        </div>
                    </form>

                    <hr>
                    <button class="btn btn-primary mr-sm-2 width70 m-auto">Save Changes</button>
                    <a href="" class="btn btn-light m-auto width70">Cancel</a>
                </form>
            </div>

        </div>

    </div>
</div>
<!-- /Body Content Wrapper -->


<!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script>
    $("#location").change(function(){
        if($(this).val()=="Students")
        {    
           $("div#Students").show('');
           $("div#Employees").hide('');
        }
        else if($(this).val()=="Employees")
        {    
           $("div#Employees").show('');
           $("div#Students").hide('');
        }
        else
        {
            $("div#NoneUser").hide('');
        }
    });
</script>


<!-- footer -->
<?php require 'footer.php';?>

<!-- footer -->



