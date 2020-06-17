<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<style>
    .cstm-datePicker{
        outline:none;
        border:none;
        width: 70px;
    }
    .cstm-datePicker:focus{
        outline: none !important;
        border: none !important;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0);
    }
</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
  <div class="row">
    <div class="col-md-12">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb pl-0">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
          <li class="breadcrumb-item"><a href="Academic-attendance_sub.php">Attendance</a></li>
          <li class="breadcrumb-item active" aria-current="page">Day Wise Report</li>
        </ol>
      </nav>
    </div>
    <div class="col-md-12">
        <div class="d-none">
            <h6>Attendance | <small>Day Wise Report</small></h6>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="row">
            <div class="col-md-6 my-5">
                <h5 class="d-inline">Date : &nbsp;&nbsp;<h6 class="d-inline text-muted">Today : 15 May 2020</h6></h5>
            </div>
            <div class="col-md-3 my-5">
                <a href="#" class="d-inline text-success" onclick="show_section()">Change Date</a>
                <input type="datetime-local" id="start-date" class="d-inline form-control cstm-datePicker hasDatepicker ou" placeholder="">
            </div>
            <div class="col-md-3 my-5">
                <p class="text-muted my-2">Over All Strength 51/52</p>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2 my-2">Select A Class</label>
            <div class="col-md-4">
                <select class="form-control" id="">
                    <option selected>Select</option>
                    <option value="1">Grade I</option>
                </select>
            </div>
        </div>
        <div class="col-md-12 my-5">
            <div class="table-responsive">
                <table class="table thead-primary">
                <thead>
                    <tr>
                        <th scope="col">SI No.</th>
                        <th scope="col">Classes</th>
                        <th scope="col">Batches</th>
                        <th scope="col">Absents</th>
                    </tr>
                </thead>
                <tbody class="table-bordered ">
                    <tr>
                        <th scope="row">1</th>
                        <td>PlayGroup</td>
                        <td><a href="#">Pink</a></td>
                        <td scope="row">1</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>  
        <div class="col-md-4 m-auto">
            <a href="#" class="btn btn-primary">CSV Report</a>
        </div>      
        <br>
        <br>
        <hr>
        <div class="" id="to_show"></div>
        <div class="row">
            <label class="col-md-2">Batch</label>
            <div class="col-md-4">
                <input type="text" readonly value="pink-A" class="form-control">
            </div>
        </div>
        <div class="row my-2">
            <label class="col-md-2">Date</label>
            <div class="col-md-4">
                <input type="text" readonly value="12-02-2019" class="form-control">
            </div>
            <div class="col-md-4">
                <a href="#" class="d-inline text-success">Change Date</a>
                <input type="datetime-local" id="start-date" class="d-inline form-control cstm-datePicker hasDatepicker" placeholder="">
            </div>
            <span class="col-md-2"></span>
        </div>
        <div class="row">
            <label class="col-md-2">No. Of Absents</label>
            <div class="col-md-4">
                <input type="text" readonly value="1" class="form-control">
            </div>
        </div>
        <div class="col-md-12 my-5">
            <div class="table-responsive">
                <table class="table thead-primary">
                <thead>
                    <tr>
                        <th scope="col">SI No.</th>
                        <th scope="col">Absents</th>
                    </tr>
                </thead>
                <tbody class="table-bordered ">
                    <tr>
                        <th scope="row">1</th>
                        <td>Abdul Gafoor</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>  
    </div>
</div>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->     