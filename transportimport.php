    <?php include_once('header.php')?>
    <style type="text/css">
    .table td, .table th {
        padding: .75rem;
        border-top: 1px solid #dee2e6;
        vertical-align: middle;
    }
    .lft{
        text-align: left;
    }
    </style>
    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper container">

    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="index-2.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
                  <li class="breadcrumb-item"><a href="">Transportation</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Transport Import</li>
              </ol>
          </nav>
      </div>
    <div class="col-md-12 text-center content-center">
    <div class="ms-panel w-100">
    <div class="row">
      <div class="col-md-12">
        <div class="ms-panel w-100">
          <div class="ms-panel-header">
            <div>

                <div class="dropdown float-right">
                    <button class="btn btn-primary" onclick="window.location.href='transportlog.php'">Add Transport Import Log</button>
                </div>
            </div>
        </div>
    </div>
    </div>
   <div class="col-md-6 m-auto text-left">
      <div class="ms-panel ms-panel-fh">
        <div class="ms-panel-body">

          <div class="form-row">
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-6"> <label for="validationCustom18">Import from Academic Year :</label></div>
              <div class="col-6">
                <select class="form-control">
                  <option>2020 - 2021</option>
                </select>
              </div>
            </div>
          </div> 
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-6"> <label for="validationCustom18">Import to Academic Year :</label></div>
              <div class="col-6">
                <select class="form-control">
                  <option>2020 - 2021</option>
                </select>
              </div>
            </div>
          </div>
           <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-6"> 
                <label for="validationCustom18">Import Stops :</label> </div>
              <div class="col-6">
                <input type="checkbox" name="">
              </div>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-6"> 
                <label for="validationCustom18">Import Vehicles :</label> </div>
              <div class="col-6">
                <input type="checkbox" name="">
              </div>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-6"> 
                <label for="validationCustom18">Import Routes :</label> </div>
              <div class="col-6">
                <input type="checkbox" name="">
              </div>
            </div>
          </div>
           <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-12 text-right">
                <input type="submit" value="Import" class="btn btn-primary" name="">
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
   </div>
    </div>
    <div class="ms-panel-body">
        <div class="">
            <table class="table table-hover thead-primary">
                <thead>
                    <tr>
                        <th scope="col" class="text-left"> No.</th>
                        <th scope="col" class="text-left">Student Name</th>
                        <th scope="col" class="text-left">Batch</th>
                        <th scope="col" class="text-left">Stop</th>
                        <th scope="col" class="text-left">Mark Absent</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left">1</td>
                        <td class="text-left">Abdul Basit</td>
                        <td class="text-left">PG-Pink</td>
                        <td class="text-left">Saddar</td>
                        <td class="text-left">
                          <i class="fa fa-times-circle text-danger" style="font-size: 35px"></i>
                        </td>
                    </tr>
                    
                   
                    </tbody>
                </table>
            </div>
    </div>

   <div class="row">
     <div class="col-md-6">
     <small>Absent 1</small>
   </div>
   <div class="col-md-6">
     <small>Note: Attendance cannot be marked for passengers having holidays</small>
   </div>
   </div>
  <div class="row">
     <div class="col-md-6">
            <div class="text-right">
              <input type="submit" class="btn btn-primary" value="Save Attendance" name="">
            </div>
          </div>
  </div>

    </div>
    </div>
    </div>
    </div>  
    <!-- footer -->

    <?php include_once('footer.php')?>







