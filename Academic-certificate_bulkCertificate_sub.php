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
          <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
          <li class="breadcrumb-item"><a href="Academic-certificate_sub.php">Certificates</a></li> 
          <li class="breadcrumb-item active" aria-current="page">Create Bulk Certificate</li>
        </ol>
      </nav>
    </div>
    <div class="col-md-12">
        <div class="d-none">
            <h6>Certificates | <small>Create Bulk Certificates</small></h6>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <label class="col-md-12 my-3">Select User</label>
        <div class="form-group row">
            <div class="col-md-6">
                <select class="form-control" id="">
                    <option selected>Student</option>
                    <option value="1">Employee</option>
                </select>
            </div>     
            <span class="col-md-6"></span>
        </div>
        <label class="col-md-12 my-3">Certificate Template</label>
        <div class="form-group row">
            <div class="col-md-6">
                <select class="form-control" id="">
                    <option selected>Character Certificate</option>
                    <option value="1">Transfer Certificate</option>
                    <option value="2">abc</option>
                </select>
            </div>     
            <span class="col-md-6"></span>
        </div>
        <label class="col-md-12 my-3">Department</label>
        <div class="form-group row">
            <div class="col-md-6">
                <select class="form-control" id="">
                    <option selected>Finance</option>
                    <option value="1">Library</option>
                    <option value="2">abc</option>
                </select>
            </div>     
            <span class="col-md-6"></span>
        </div>
        <div class="col-md-12 my-3"> 
            <div class="table-responsive">
                <table class="table table-bordered thead-primary">
                <thead>
                    <tr>
                        <th scope="col">All None</th>
                        <th scope="col">Employee Name</th>
                        <th scope="col">Employee No.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                        <label class="ms-checkbox-wrap">
                            <input type="checkbox" value="">
                            <i class="ms-checkbox-check"></i>
                        </label>
                        </th>
                        <td>Muhammad Karan Gohar</td>
                        <td>E28</td>
                    </tr>
                    <tr>
                        <th scope="row">
                        <label class="ms-checkbox-wrap">
                            <input type="checkbox" value="">
                            <i class="ms-checkbox-check"></i>
                        </label>
                        </th>
                        <td>Muhammad Abdul Rauf</td>
                        <td>E20</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
        <label class="col-md-12 my-3">Certificate Template</label>
        <div class="form-group row">
            <div class="col-md-6">
                <select class="form-control" id="">
                    <option selected>Provisional Certificate</option>
                    <option value="1">xyz Certificate</option>
                    <option value="2">abc</option>
                </select>
            </div>     
            <span class="col-md-6"></span>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                <label>Select Class</label>
                <select class="form-control" id="">
                    <option selected>Grade I</option>
                    <option value="1">Grade II</option>
                    <option value="2">Grade III</option>
                </select>    
            </div>
            <div class="col-md-6">
                <label>Select Batch</label>
                <select class="form-control" id="">
                    <option selected>G1-B-2020</option>
                    <option value="1">G4-A-2019</option>
                </select>    
            </div>
        </div>
        <div class="col-md-12 my-3"> 
            <div class="table-responsive">
                <table class="table table-bordered thead-primary">
                <thead>
                    <tr>
                        <th scope="col">All None</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Student Admission No.</th>
                        <th scope="col">Roll No.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                        <label class="ms-checkbox-wrap">
                            <input type="checkbox" value="">
                            <i class="ms-checkbox-check"></i>
                        </label>
                        </th>
                        <td>Muhammad Karan Gohar</td>
                        <td>S122</td>
                        <td>A42</td>
                    </tr>
                    <tr>
                        <th scope="row">
                        <label class="ms-checkbox-wrap">
                            <input type="checkbox" value="">
                            <i class="ms-checkbox-check"></i>
                        </label>
                        </th>
                        <td>Muhammad Abdul Rauf</td>
                        <td>S123</td>
                        <td>A48</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4 m-auto">
            <a href="#" class="btn btn-primary">Generate Certiicate</a>
        </div>
    </div>
</div>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->     