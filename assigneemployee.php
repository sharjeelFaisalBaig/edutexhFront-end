<!-- header -->
<?php require 'header.php';?>

<!-- header -->

<!-- Body Content Wrapper -->
<div class="ms-content-wrapper container">
    <div class="row">
        <div class="col-md-12">
            <div class="ms-panel-header pt-0">
                <h6 class="d-md-inline"><i class=""></i> Time Table</h6> |  <small>Assign Employee</small>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic-TimeTable_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="Academic-TimeTable_sub.php">Time Table</a></li>
                    <li class="breadcrumb-item"><a href="workallocation.php">Work allocations</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Assign Employee </li>
                </ol>
            </nav>
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="ms-panel-body">
                <form class="needs-validation mt-4 clearfix" novalidate>
                        <p class="font-weight-bold mb-4">Employee Allocation</p>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label class="form-control-label">Course</label>
                                <select class="form-control">
                                    <option value="NoneUser">Select Course</option>
                                    <option value="Students">BBA</option>
                                    <option value="Employees">Master of Business</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-control-label">Batch</label>
                                <select class="form-control">
                                    <option value="NoneUser">Select Batch</option>
                                    <option value="Students">MBA - Semester II - A 2020</option>
                                    <option value="Employees">MBA - Semester I - B 2020</option>
                                </select>
                            </div>
                            <div class="col-md-6 text-right">
                                <label class="form-control-label">No. of Weekly Classes <span>25</span></label>
                                
                            </div>
                           
                        </div>
                        <div class="mt-4">
                            <div class="row">
                                <div class="col-md-8 md-sm-4">
                                    <p>Manage Employee Subject Association</p>
                                </div>
                                <div class="col-md-6 mb-sm-4">
                                    <div class="table-responsive overflowY" style="height: 250px;">
                                        <table class="table table-bordered thead-primary">
                                            <thead>
                                                <tr>
                                                    <th>Subject</th>
                                                    <th width="150">Assigned Employee</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Organization Behaviour</td>
                                                    <td></td>
                                                    <td>Assign</td>
                                                </tr>
                                                <tr>
                                                    <td>English</td>
                                                    <td></td>
                                                    <td>Assign</td>
                                                </tr>
                                                <tr>
                                                    <td>Social Studies</td>
                                                    <td></td>
                                                    <td>Assign</td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="table-responsive overflowY" style="border: 1px solid #ccc;border-bottom: none;">
                                        <table class="table thead-primary">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">Available Employees</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Deparment
                                                    </td>
                                                    <td>
                                                        <select class="form-control">
                                                            <option>English</option>
                                                            <option>Urdu</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="table table-bordered thead-primary">
                                            <thead>
                                                <tr>
                                                    <th>Employee Name</th>
                                                    <th width="150">Alloted working hours</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Assadullah Shah (E15)</td>
                                                    <td>10</td>
                                                    <td>Assign</td>
                                                </tr>
                                                <tr>
                                                    <td>Shahmeer (E25)</td>
                                                    <td>10</td>
                                                    <td>Assign</td>
                                                </tr>
                                                <tr>
                                                    <td>Faraz Ali (E215)</td>
                                                    <td>10</td>
                                                    <td>Assign</td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    
                    

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
<!-- <script>
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
 -->

<!-- footer -->
<?php require 'footer.php';?>

<!-- footer -->



