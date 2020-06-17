<!-- header -->

<?php require 'header.php';?>

<style>
.cstm_delete_btn{
  border : solid #E5E5E5 1px;
}
.cstm_border{
  -webkit-box-shadow: 2px 2px 3px 12px rgba(214,193,58,0.8);
  -moz-box-shadow: 2px 2px 3px 12px rgba(214,193,58,0.8);
  box-shadow: 2px 2px 3px 12px rgba(214,193,58,0.8);
}
.cstm_width{
  width:70%
}
</style>

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
          <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
      </nav>
    </div>

    <div class="col-md-12">
    <div class="ms-panel-header">
        <h6>Profile |<small>Details</small></h6>
    </div>
    </div>

    <div class="col-md-8 m-auto">


      <div class="row my-3">

        <div class="col-md-2">
          <select class="form-control " id="profile">
                <option selected="">Profile</option>
                <option value="1">abc</option>
          </select>
        </div>

        <div class="col-md-2">
          <select class="form-control " id="profile">
                <option selected="">Salary</option>
                <option value="1">abc</option>
          </select>
        </div>

        <div class="col-md-2">
          <select class="form-control " id="profile">
                <option selected="">Leaves</option>
                <option value="1">abc</option>
          </select>
        </div>

        <div class="col-md-2">
          <select class="form-control " id="profile">
                <option selected="">More</option>
                <option value="1">abc</option>
                <option value="1">xyz</option>
          </select>
        </div>

        <div class="col-md-2">
          <button class="btn m-auto cstm_delete_btn">Delete</button>
        </div>

      </div>
      
        <div class="col-md-12">
          <div class="alert alert-warning text-center my-4">
            <strong>Profile Created For Name</strong>
          </div>
      </div>

      <div class="row my-5">

      <div class="col-md-2"></div>
        <div class="col-md-2">
          <div class="text-center cstm_border">
            <i class="fas fa-user  fa-7x"></i>
          </div>
        </div>

        <div class="col-md-1"></div>
        <div class="col-md-2">
          <h6 class="my-3">Name</h6>
          <h6 class="my-3">Employee ID :  E27</h6>
        </div>

      </div>

  <div class="col-lg-12 my-4">
    
    <div class="">
        <table class="table table-bordered thead-primary">
        <tbody>
        
            <tr>
                <td>Joining Date</td>
                <td>3 June 2020</td>
            </tr>

            <tr>
                <td>Department</td>
                <td>Botany</td>
            </tr>

            <tr>
                <td>Catagory</td>
                <td>Teaching Staff</td>
            </tr>

            <tr>
                <td>Position</td>
                <td>Juniour Teacher</td>
            </tr>

            <tr>
                <td>Grade</td>
                <td></td>
            </tr>
        </tbody>
        </table>
      </div>
    </div>



    </div>







<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->