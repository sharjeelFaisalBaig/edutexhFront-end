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
          <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
          <li class="breadcrumb-item"><a href="Administration-HumanResource_sub.php">Human Resource</a></li>
          <li class="breadcrumb-item"><a href="Administration-HumanResource_employeeManagement_sub.php">Employee Management</a></li>
          <li class="breadcrumb-item"><a href="Administration-HumanResource_employeeManagement_employeeAdmission_sub.php">Employee Admission</a></li>
          <li class="breadcrumb-item active" aria-current="page">Add To Leave Group</li>
        </ol>
      </nav>
    </div>

    <div class="col-md-12">
    <div class="ms-panel-header">
        <h6>Leave Management |<small>Leave Groups</small></h6>
    </div>
    </div>

    <div class="col-md-8 m-auto">
    
        <div class="col-md-12">
          <h6 class="my-5">Add To Leave Group</h6>
        </div>

        <div class="row">
          <div class="col-md-3">
            <p class="text-muted">Employee Name</p>
            <p>Name</p>
          </div>
          <div class="col-md-3">
            <p class="text-muted">Recent Leave Reset</p>
            <p>3/06/2020</p>
          </div>
          <div class="col-md-3">
            <p class="text-muted">Employee Department</p>
            <p>Botany</p>
          </div>
        </div>
        <div class="col-md-12">
          <hr>
        </div>

        <div class="col-md-12">
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Leave Group :</label>
        <div class="col-sm-6">
          <select class="form-control " id="leaveGroup">
              <option selected="">Select Leave Group</option>
              <option value="1">Regular Employees</option>
          </select>
        </div>
        </div>       
        </div>


        <div class="col-lg-8 my-4">
    
                <div class="">
                    <table class="table table-bordered thead-primary">
                    <thead>
                        <tr>
                            <th scope="col">Leave Types</th>
                            <th scope="col">Leave Counts</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Casual Leave (CL)</td>
                            <td>
                            <div class="form-group row">
                            <div class="col-sm-10">
                             <input type="text" class="form-control" id="fname" placeholder="No. Of Leaves" required>
                            </div>
                            </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Maternity Leave (ML)</td>
                            <td>
                            <div class="form-group row">
                            <div class="col-sm-10">
                             <input type="text" class="form-control" id="fname" placeholder="No. Of Leaves" required>
                            </div>
                            </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Recreational Leave (RL)</td>
                            <td>
                            <div class="form-group row">
                            <div class="col-sm-10">
                             <input type="text" class="form-control" id="fname" placeholder="No. Of Leaves" required>
                            </div>
                            </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Earned  Leave (EL)</td>
                            <td>
                            <div class="form-group row">
                            <div class="col-sm-10">
                             <input type="text" class="form-control" id="fname" placeholder="No. Of Leaves" required>
                            </div>
                            </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Casual Leave (CL)</td>
                            <td>
                            <div class="form-group row">
                            <div class="col-sm-10">
                             <input type="text" class="form-control" id="fname" placeholder="No. Of Leaves" required>
                            </div>
                            </div>
                            </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
        </div>

        <div class="row">
          <div class="col-md-2">
            <a class="btn btn-primary ml-3" type="submit" href="Administration-HumanResource_employeeManagement_employeeAdmission_profile_sub.php">Add To Leave Group</a>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-2">
            <a class="btn btn-primary ml-3" type="submit" href="Administration-HumanResource_employeeManagement_employeeAdmission_profile_sub.php">Skip & Finish </a>
          </div>
        </div>


    </div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->