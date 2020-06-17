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
          <li class="breadcrumb-item active" aria-current="page">Step 3</li>
        </ol>
      </nav>
    </div>

<div class="col-md-12">
  <div class="ms-panel-header">
    <h6>Employee Admission |<small> Step 3</small></h6>
  </div>
</div>


<div class="col-md-4"></div>
<div class="col-md-4">
    <div class="alert alert-warning text-center my-4">
        <strong>Employee Address Details Saved For Name</strong>
    </div>
</div>
<div class="col-md-4"></div>


<div class="col-md-8 m-auto" id="main">

<div class="col-md-12 my-2">
  <h5>Bank Details</h5>
  <hr>
</div>


<form  class="form my-4" id="bankDetails">


    <div class="form-group row">
            <label class="col-sm-2 col-form-label">Bank Name :</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="bankName" placeholder="HBL etc.">
            </div>
    </div>

    <div class="form-group row">
            <label class="col-sm-2 col-form-label">Bank Address :</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="bankAddr" placeholder="Bank Address">
            </div>
    </div>

    <div class="form-group row">
            <label class="col-sm-2 col-form-label">Account Number :</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="bankAccountNo" placeholder="Account No.">
            </div>
    </div>

    <div class="col-lg-2 m-auto">
      <a class="btn btn-primary" type="submit" href="Administration-HumanResource_employeeManagement_employeeAdmission_step4_sub.php">Save And Proceed</a>
    </div>

</form>
</div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->