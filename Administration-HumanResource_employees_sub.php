
<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<style>
.cstm_search_label{
font-size:.4cm;
}
.heading_fonts{
white-space:pre;
display: flex;
display:inline flex;
}
</style>
<!-- Body Content Wrapper -->
</div>
<div class="ms-content-wrapper">
  <div class="row">
    
        <div class="col-md-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
                <li class="breadcrumb-item"><a href="Administration-HumanResource_sub.php">Human Resource</a></li>
                <li class="breadcrumb-item active" aria-current="page">Employees</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-2 ">
            <a href="Administration-HumanResource_employees_ViewAll_sub.php" class="btn btn-md btn-primary">View All</a>
        </div>
        <div class="col-md-2">
            <a href="Administration-HumanResource_employees_Advanced_sub.php" class="btn btn-md btn-primary">Advance</a>
        </div>
    </div>

    <div class="row">
            <div class="col-lg-12">
                <div class="ms-panel-header">
                    <h6 class="heading_fonts">Employee Search |<br><small class="heading_fonts my-1"> Employee Details</small></h6>
                </div>
            </div>
            
        </div>


 <div class="col-md-9 m-auto">
    <div class="col-lg-12 my-4">
    <div class="col-lg-12 my-4">
        <div class="row">
            <div class="col-lg-1">
                <label  class="cstm_search_label my-2">Search</label>
            </div>

            <div class="col-lg-11">
                <input type="search" class="form-control " id="search_bar">
            </div>
        </div>    

        <div class="row my-2">
            
                      <div class="row w-100">
                        <div class="col-lg-3">
                            <select class="form-control" id="inputGroupSelect05">
                                    <option selected>Select Department</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                            </select> 
                        </div>
                        <div class="col-lg-3">
                            <select class="form-control" id="inputGroupSelect05">
                                    <option selected>Select Catagory</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <select class="form-control" id="inputGroupSelect05">
                                    <option selected>Select Position</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
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
    <div class="col-lg-12 my-4">
    
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

<!-- <select class="form-control" id="inputGroupSelect05">
                            <option selected>Select Department</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select> -->