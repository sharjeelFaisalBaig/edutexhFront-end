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
          <li class="breadcrumb-item active" aria-current="page">Step 2</li>
        </ol>
      </nav>
    </div>

<div class="col-md-12">
  <div class="ms-panel-header">
    <h6>Employee Admission |<small> Step 2</small></h6>
  </div>
</div>


<div class="col-md-4"></div>
<div class="col-md-4">
    <div class="alert alert-warning text-center my-4">
        <strong>Employee Name All Record Saved</strong>
    </div>
</div>
<div class="col-md-4"></div>

<div class="col-md-8 m-auto" id="main">

<div class="col-md-12 my-2">
  <h5>Home Address</h5>
  <hr>
</div>

<form  class="form my-4" id="homeAddressDetails">


    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Line 1 :</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="addr1" placeholder=" Block 9-C Green Street London e.t.c. ">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Line 2 :</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="addr2" placeholder=" Next To Fortis Hopital e.t.c. ">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">City :</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="city" placeholder=" City ">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">State :</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="state" placeholder="State">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Country :</label>
        <div class="col-sm-10">
          <select class="form-control " id="country">
              <option selected>Pakistan ( پاکستان)</option>
              <option value="1">abc</option>
              <option value="2">efg</option>
              <option value="3">xyz</option>
          </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">PIN Code :</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="pin_code" placeholder="0000">
        </div>
    </div>

</form>

<div class="col-md-12 my-3">
  <hr>
  <h5>Office Address</h5>
  <hr>
</div>


<form  class="form my-4" id="OfficeAddressDetails">

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Line 1 :</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="ofc_addr1" placeholder=" Block 9-C Green Street London e.t.c. ">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Line 2 :</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="ofc_addr2" placeholder=" Next To Fortis Hopital e.t.c. ">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">City :</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="ofc_city" placeholder=" City ">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">State :</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="ofc_state" placeholder="State">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Country :</label>
        <div class="col-sm-10">
          <select class="form-control " id="ofc_country">
              <option selected>Pakistan ( پاکستان)</option>
              <option value="1">abc</option>
              <option value="2">efg</option>
              <option value="3">xyz</option>
          </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">PIN Code :</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="ofc_pin_code" placeholder="0000">
        </div>
    </div>

    <div class="col-lg-2 m-auto">
      <a class="btn btn-primary" type="submit" href="Administration-HumanResource_employeeManagement_employeeAdmission_step3_sub.php">Save And Proceed</a>
    </div>
</form>


  

</div>


<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->