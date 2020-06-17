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
    <h6>Add Payroll |<small>Step 2</small></h6>
  </div>
</div>



<div class="col-md-8 m-auto">


        <div class="col-md-12">
        <h6 class="my-5">Step 1 : Add To Pay Roll Group</h6>
        </div>
        <div class="row">
            <div class="col-md-8"> 
                <div class="form-group row">
                      <label class="col-sm-4 col-form-label my-2">Payroll Group :</label>
                    <div class="col-sm-8">
                      <label class="col-sm-4 col-form-label my-2">BPS-17</label>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
            <a class="btn btn-primary " type="submit" href="Administration-HumanResource_employeeManagement_employeeAdmission_addPayrollFinal_sub.php">Change</a>     
            </div>


        <div class="col-md-12">
        <hr>
        <h6 class="my-5">Step 2 : Add Pay Roll Details</h6>
        </div>

        <div class="col-md-12">
        <h6 class="my-1">Payroll Catagories of This Payroll Groups</h6>
        </div>

        <div class="row">
          <div class="col-md-6">
            <p class=" text-muted my-3 mx-3">Please Enter The Values Of Highlightened Catagories First And Click On The Calculate To Compute The values Of Other Catagories You Can Also Change The Values Of Catagory And Recalculate Its Dependent Catagories By Clicking On the Icon Against New Value Of Payroll Catagory</p>
          </div>
          <div class="col-md-3">
            <a class="btn btn-primary ml-2" type="submit" href="Administration-HumanResource_employeeManagement_employeeAdmission_addPayrollFinal_sub.php">Calculate</a>     
          </div>
          <div class="col-md-3">
            <a class="btn btn-primary ml-2" type="submit" href="Administration-HumanResource_employeeManagement_employeeAdmission_addPayrollFinal_sub.php">Reset All</a>     
          </div>
        </div>

        <div class="col-md-12">
          <h6 class="my-5">Earnings</h6>
          <hr>
        </div>

        <div class="col-md-12">
            <div class="form-group row">
          <label class="col-sm-2 col-form-label">Basic Salary</label>
        <div class="col-sm-6 input-group">
        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
        <div class="input-group-append">
            <span class="input-group-text">Rs.</span>
            <span class="input-group-text border border-left"><i class="fas fa-sync-alt"></i></span>
          </div>
        </div>
        </div>
        </div>

        <div class="col-md-12">
            <div class="form-group row">
          <label class="col-sm-2 col-form-label">HRA</label>
        <div class="col-sm-6 input-group">
        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
        <div class="input-group-append">
            <span class="input-group-text">Rs.</span>
        </div>
        </div>
        </div>
        </div>

        <div class="col-md-12">
            <div class="form-group row">
          <label class="col-sm-2 col-form-label">Medical Allowance</label>
        <div class="col-sm-6 input-group">
        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
        <div class="input-group-append">
            <span class="input-group-text">Rs.</span>
        </div>
        </div>
        </div>
        </div>

        <div class="col-md-12">
            <div class="form-group row">
          <label class="col-sm-2 col-form-label">Total Earning</label>
        <div class="col-sm-6 input-group">
          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" readonly>
        </div>
        </div>
        </div>




        <div class="col-md-12">
          <h6 class="my-5">Deduction</h6>
          <hr>
        </div>

        <div class="col-md-12">
            <div class="form-group row">
          <label class="col-sm-2 col-form-label">Income Tax</label>
        <div class="col-sm-6 input-group">
        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
        <div class="input-group-append">
            <span class="input-group-text">Rs.</span>
            <span class="input-group-text border border-left"><i class="fas fa-sync-alt"></i></span>
          </div>
        </div>
        </div>
        </div>

        <div class="col-md-12">
            <div class="form-group row">
          <label class="col-sm-2 col-form-label">Provident Fund</label>
        <div class="col-sm-6 input-group">
        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
        <div class="input-group-append">
            <span class="input-group-text">Rs.</span>
        </div>
        </div>
        </div>
        </div>

        <div class="col-md-12">
            <div class="form-group row">
          <label class="col-sm-2 col-form-label">Total Deduction</label>
        <div class="col-sm-6 input-group">
          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" readonly>
        </div>
        </div>
        </div>

        <div class="col-md-8">
            <div class="">
                <table class="table table-bordered">
                <tbody>
                    <tr class="col-md-4">
                        <td>Gross Pay (Total Earnings)</td>
                        <td>33450.00  RS</td>
                    </tr>

                    <tr class="col-md-4">
                        <td>Net Pay</td>
                        <td>28450.00  RS</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-12"><hr></div>

        <div class="col-md-2">
          <a class="btn btn-primary ml-2" type="submit" href="Administration-HumanResource_employeeManagement_employeeAdmission_addToLeaveGroup_sub.php">Asign Payroll</a>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2">
          <a class="btn btn-primary ml-2" type="submit" href="Administration-HumanResource_employeeManagement_employeeAdmission_addToLeaveGroup_sub.php">Skip & Proceed </a>
        </div>

</div>        
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->
