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
          <li class="breadcrumb-item active" aria-current="page">Add Payroll</li>
        </ol>
      </nav>
    </div>

<div class="col-md-12">
  <div class="ms-panel-header">
    <h6>Manage Payroll  |<small> Add Payroll </small></h6>
  </div>
</div>


<div class="col-md-8 m-auto">


        <div class="col-md-12">
        <h6 class="my-5">Step 1 : Add To Pay Roll Group</h6>
        </div>
        <div class="row">
            <div class="col-md-8"> 
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Add Payroll Group :</label>
                    <div class="col-sm-8">
                    <select class="form-control input_text_cstm " id="inputGroupSelect01">
                        <option selected>Select Payroll Group</option>
                        <option value="1">BPS-17</option>
                        <option value="2">abc</option>
                        <option value="3">xyz</option>
                    </select>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
            <a class="btn btn-primary my-1" type="submit" href="Administration-HumanResource_employeeManagement_employeeAdmission_addPayrollFinal_sub.php">Save & Proceed </a>     
            </div>
        </div>
        
</div>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->