<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<style>
  .cstm-dropdown{
    height:36.3px;
  }
</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
  <div class="row">
    <div class="col-md-6">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb pl-0">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="Academic-studentAdmission_profile.php">Profile</a></li> 
          <li class="breadcrumb-item active" aria-current="page">Report Center</li>
        </ol>
      </nav>
    </div>
    <div class="col-md-6 text-md-right">
      <a href="Academic-studentAdmission_profile.php" class="btn btn-primary">Profile</a>
    </div>
    <div class="col-md-8 m-auto">
      <div class="row my-5">
        <div class="col-md-2">
          <div class="text-center cstm_border">
            <i class="fas fa-user  fa-5x"></i>
          </div>
        </div>
        <div class="col-md-4 ml-3 my-2">
            <h6 class="d-inline">Name : <p class="text-muted d-inline">Abdul Basit</p></h6>
            <br>
            <h6 class="d-inline">Class : <p class="text-muted d-inline">Play Group</p></h6>
        </div>
        <div class="col-md-4 ml-3 my-2">
            <h6 class="d-inline">Admin No : <p class="text-muted d-inline">S50</p></h6>
            <br>
            <h6 class="d-inline">Roll No : <p class="text-muted d-inline">PG025</p></h6>
        </div>
      </div>  
      <hr>
      <div class="row">
        <div class="col-md-4">
            <h5>Academic Reports</h5>
            <p class="text-muted my-3">Subject-Wise Report</p>
            <select id="subject" class="form-control my-3">
                <option value="english">English</option>
                <option value="math">Mathamatics</option>
            </select>
        </div>
        <div class="col-md-4 offset-md-4 border-left">
            <h5>Attendance Reports</h5>
            <p class="text-muted my-3">Current Batch Report</p>
            <input type="text" class="form-control" value="PG-pink" readonly data-toggle="modal" data-target="#modal-batchReport">
        </div>
      </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" id="modal_batchReport_view" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title has-icon ms-icon-round">Attendance Report</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <h5 class="col-md-12">Attendence Report</h5>
        <div class="col-md-12 my-5">
          <div class="table-responsive">
            <table class="table table-bordered thead-primary">
              <tbody>
                <tr>
                  <th>Total No. Of Working Days</th>
                  <td>14</td> 
                </tr>
                <tr>
                  <th>No. Of Applicable Days</th>
                  <td>5</td>
                </tr>
                <tr>
                  <th>Total Present</th>
                  <td>4</td>
                </tr>
                <tr>
                  <th>Percentage</th>
                  <td>80 %</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <hr>
        <h5 class="col-md-12 my-2">Leave Details</h5>
        <div class="col-md-12 my-5">
          <div class="table-responsive">
            <table class="table table-bordered thead-primary">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Reason</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>14-05-2020</td> 
                  <td>Full-Day</td> 
                  <td>Fever</td> 
                </tr>
              </tbody>
            </table>
          </div>
        </div>           
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal_batchReport_view"class="btn btn-primary">OK</button>
        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
      </div>
		</div>
	</div>
</div>
<div class="modal fade" tabindex="-1" id="modal-batchReport" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title has-icon ms-icon-round">Current Attendance Report</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <label class="col-md-4 offset-md-2 my-2">Student Name</label>
          <div class="col-md-4">
            <input type="text" class="form-control" value="Abdul Basit">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-4 offset-md-2 my-2">Admission No.</label>
          <div class="col-md-4">
            <input type="text" class="form-control" value="S50">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-4 offset-md-2 my-2">Roll No.</label>
          <div class="col-md-4">
            <input type="text" class="form-control" value="PG025">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-4 offset-md-2 my-2">Mode</label>
          <div class="col-md-4">
            <select class="form-control">
              <option selected>Monthly</option>
              <option value="monthly">Monthly</option>
              <option value="over all">Over All</option>
            </select>
          </div>
        </div>            
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal_batchReport_view"class="btn btn-primary">OK</button>
        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
      </div>
		</div>
	</div>
</div>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->