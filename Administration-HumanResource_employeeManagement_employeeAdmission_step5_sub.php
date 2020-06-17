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
          <li class="breadcrumb-item active" aria-current="page">Step 5</li>
        </ol>
      </nav>
    </div>

<div class="col-md-12">
  <div class="ms-panel-header">
    <h6>Employee Admission |<small> Step 5</small></h6>
  </div>
</div>




<div class="col-md-8 m-auto">



    <div class="row my-5">
        <div class="col-md-4">
        <h6 class="my-2 ml-3">Selected  Manager  :</h6>
        </div>
        <div class="col-md-4"> 
            <h6 class="my-2 ml-3">Name</h6>
        </div>
        <div class="col-md-4">
        <a class="btn btn-primary my-2" type="submit" href="Administration-HumanResource_employeeManagement_employeeAdmission_addPayrollInitial_sub.php">Save & Proceed </a>     
        </div>
    </div>
    <hr>



    <div class="col-md-12 my-4">
    <div class="col-md-12 my-4">
        <div class="row">
            <div class="col-md-4">
                <label  class="cstm_search_label my-2">Search By Name   :</label>
            </div>

            <div class="col-md-4">
                <input type="search" class="form-control " id="search_bar">
            </div>
        </div>    

        <div class="row my-4">
            
                      <div class="row w-100">
                        <div class="col-md-3">
                            <select class="form-control" id="inputGroupSelect05">
                                    <option selected>Select Department</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                            </select> 
                        </div>
                        <div class="col-md-3">
                            <select class="form-control" id="inputGroupSelect05">
                                    <option selected>Select Catagory</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control" id="inputGroupSelect05">
                                    <option selected>Select Position</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control" id="inputGroupSelect05">
                                    <option selected>Select Grade</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                            </select>
                        </div>  

                      </div>

            </div>

        </div>
    </div>
    <div class="col-md-12 my-5">
    
                <div class="">
                    <table class="table table-bordered table-hover thead-primary">
                    <thead>
                        <tr>
                            <th scope="col">SI No</th>
                            <th scope="col">Employee Name</th>
                            <th scope="col">Emp ID</th>
                            <th scope="col">Employee Department</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Muhammad Karan Gohar</td>
                            <td>E28</td>
                            <td>Library</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
</div>


<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->

