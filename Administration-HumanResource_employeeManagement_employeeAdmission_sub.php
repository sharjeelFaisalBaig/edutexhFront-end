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
          <li class="breadcrumb-item active" aria-current="page">Employee Admission</li>
        </ol>
      </nav>
    </div>

<div class="col-md-12">
  <div class="ms-panel-header">
    <h6>Employee Admission |<small> Step 1</small></h6>
  </div>
</div>


<div class="col-md-8 m-auto" id="main">
<div class="col-md-12 my-5">
  <p class="d-inline"> Fields Marked With <h6 class="text-danger d-inline"> *</h6> Must Be Filled</p>
</div>
<div class="col-md-12 my-2">
  <h5>General Details</h5>
  <hr>
</div>
<div class="col-md-12">
  <form  id="generalDetailsForm" class="form my-3">

    <div class="form-group row">
      <label class="col-sm-2 col-form-label"> Employee Number<h6 class="text-danger d-inline"> *</h6> :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="e_number" placeholder="Employee Number" required>
    </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Date :</label>
    <div class="col-sm-10">
      <input type="datetime-local" id="start-date" class="form-control hasDatepicker"  placeholder="">
    </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label">First Name<h6 class="text-danger d-inline"> *</h6> :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fname" placeholder="First Name" required>
    </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Middle Name :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="mname" placeholder="Middle Name">
    </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Last Name :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="lname" placeholder="Last Name">
    </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Email :</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="Email">
    </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Gender:</label>
        <div class="col-sm-10 my-2">
          <span class="ml-2"></span>
          <input class="form-input" type="radio" name="exampleRadios" id="genderMale" value="option1" checked>
          <label class="form-label" for="exampleRadios1">
            Male
          </label>
          <span class="ml-2"></span>
          <input class="form-input" type="radio" name="exampleRadios" id="genderFemale" value="option1" checked>
          <label class="form-label" for="exampleRadios1">
            Female
          </label>
        </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Date Of Birth<h6 class="text-danger d-inline"> *</h6> :</label>
    <div class="col-sm-10">
      <input type="datetime-local" id="dob" class="form-control hasDatepicker"  placeholder="" required>
    </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Department<h6 class="text-danger d-inline"> *</h6> :</label>
      <div class="col-sm-10">
        <select class="form-control " id="department" required>
            <option selected>Select</option>
            <option value="1">abc</option>
            <option value="2">efg</option>
            <option value="3">xyz</option>
        </select>
      </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Catagory<h6 class="text-danger d-inline"> *</h6> :</label>
        <div class="col-sm-10">
          <select class="form-control " id="catagory" required>
              <option selected>Select</option>
              <option value="1">abc</option>
              <option value="2">efg</option>
              <option value="3">xyz</option>
          </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Position<h6 class="text-danger d-inline"> *</h6> :</label>
        <div class="col-sm-10">
          <select class="form-control " id="position" required>
              <option selected>Select</option>
              <option value="1">abc</option>
              <option value="2">efg</option>
              <option value="3">xyz</option>
          </select>
        </div>
     </div>

     <div class="form-group row">
        <label class="col-sm-2 col-form-label">Grade :</label>
        <div class="col-sm-10">
          <select class="form-control " id="grade">
              <option selected>Select</option>
              <option value="1">abc</option>
              <option value="2">efg</option>
              <option value="3">xyz</option>
          </select>
        </div>
     </div>

     <div class="form-group row">
      <label class="col-sm-2 col-form-label">Job Title :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="jobTitle" placeholder="Job Title">
    </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Qualifications:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="qualification" placeholder="Qualification">
    </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Experience Info :</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="experienceInfo" rows="3"></textarea>
      </div>
    </div>

    <div class="form-group row">
            <label class="col-sm-2 col-form-label">Total Experience</label>
                <div class="col-md-5">
                  <select class="form-control d-inline "  id="totalExperienceMonth">
                      <option selected>Year</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                  </select>
                  </div>
                  <div class="col-md-5">
                  <select class="form-control  d-inline "  id="totalExperienceYear">
                      <option selected>Month</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                  </select>
                </div>
    </div>

</form>
</div>

<div class="col-md-12 my-5">
      <hr>
      <h5>Personal Details</h5>
      <hr>
</div>

<div class="col-md-12">
  <form class="form" id="personalDetailsForm">

  
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Marital Status :</label>
          <div class="col-md-10">
            <select class="form-control d-inline "  id="maritalStatus">
                <option selected>Single</option>
                <option value="1">Maried</option>
                <option value="2">Divorced</option>
                <option value="3">Widowed</option>
            </select>
           </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label">No. Of Childerns :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="noOfChildren" placeholder="No Of Childrens">
    </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Father Name :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fatherName" placeholder="Father Name">
    </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Mother Name :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="motherName" placeholder="Mother Name">
    </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Spouse Name :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="spouseName" placeholder="Spouse Name">
    </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Blood Group :</label>
        <div class="col-sm-10">
          <select class="form-control " id="bloodGroup">
              <option selected>Unknown</option>
              <option value="1">abc</option>
              <option value="2">efg</option>
              <option value="3">xyz</option>
          </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nationality :</label>
        <div class="col-sm-10">
          <select class="form-control " id="nationality">
              <option selected>Pakistan ( پاکستان)</option>
              <option value="1">abc</option>
              <option value="2">efg</option>
              <option value="3">xyz</option>
          </select>
        </div>
    </div>
    
  </form>
</div>


<div class="col-md-12 my-5">
      <hr>
      <h5>Contact Details</h5>
      <hr>
</div>


<div class="col-md-12">
  <form class="form" id="contactDetailsForm">

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Office Phone 1 :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="officeNo1" placeholder="Office No.">
      </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Office Phone 2 :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="officeNo2" placeholder="Ofiice No.">
      </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Mobile :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="mobileNo" placeholder="Mobile No.">
      </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Home Phone :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="homePhone" placeholder="Home Phone.">
      </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">FAX :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="fax" placeholder="FAX.">
      </div>
    </div>


  </form>
</div>

<div class="col-md-12 my-5">
      <hr>
      <h5>Settings</h5>
      <hr>
</div>

<div class="col-md-12">
  <form class="form" id="settingsDetails">


    <div class="form-group row">
          <label class="col-sm-2 col-form-label">Biometric ID :</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="biometricId" placeholder="00000012003">
        </div>
    </div>

    <div class="form-group row">
          <label class="col-sm-2 col-form-label">Assign Transport :</label>
        <div class="col-sm-10">
          <label class="ms-checkbox-wrap">
          <input type="checkbox" value="">
          <i class="ms-checkbox-check"></i>
        </div>
    </div>

    <div class="form-group row">
          <label class="col-sm-2 col-form-label">Candidate Picture :</label>
        <div class="col-sm-10">
          <input type="file" data-toggle="tooltip" title="Insert Image Uder 500KB Recommended Resolution Is 125x125" class="form-control-file" data-placement="right" id="userPhoto">
        </div>
    </div>

    <div class="col-lg-2 m-auto">
      <a class="btn btn-primary" type="submit" href="Administration-HumanResource_employeeManagement_employeeAdmission_step2_sub.php">Save And Proceed</a>
    </div>

  </form>
</div>
</div>



<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->