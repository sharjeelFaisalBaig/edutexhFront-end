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
                  <li class="breadcrumb-item active" aria-current="page">Transport Attendance</li>
              </ol>
          </nav>
      </div>
    <div class="col-md-12 text-center content-center">
    <div class="ms-panel w-100">
    <div class="row">
    <div class="col-md-6">
      <div class="ms-panel ms-panel-fh">
        <div class="ms-panel-body">

          <div class="form-row">
          <!--  -->
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Passenger :</label></div>
              <div class="col-8">
               <div class="modal-notice">
                      <label class="ms-checkbox-wrap">
                        <input type="radio" name="yes" value="">
                        <i class="ms-checkbox-check"></i>
                    </label>
                    <span class="mr-4"> Student </span>
                     <label class="ms-checkbox-wrap">
                        <input type="radio" name="yes" value="">
                        <i class="ms-checkbox-check"></i>
                    </label>
                    <span> Employee </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Route Type :</label></div>
              <div class="col-7">
               <div class="modal-notice">
                      <label class="ms-checkbox-wrap">
                        <input type="radio" name="yes" value="">
                        <i class="ms-checkbox-check"></i>
                    </label>
                    <span class="mr-4"> Pickup </span>
                     <label class="ms-checkbox-wrap">
                        <input type="radio" name="yes" value="">
                        <i class="ms-checkbox-check"></i>
                    </label>
                    <span> Drop </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 offset-11">
            <div class="text-right">
              <input type="submit" class="btn btn-primary" value="View Passenger" name="">
            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
   <div class="col-md-6">
      <div class="ms-panel ms-panel-fh">
        <div class="ms-panel-body">

          <div class="form-row">
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Route :</label></div>
              <div class="col-8">
                <select class="form-control">
                  <option>Soan Garden</option>
                </select>
              </div>
            </div>
          </div> 
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Select Date :</label></div>
              <div class="col-8">
                <input type="date" class="form-control" name="">
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
   </div>
    </div>
    <div class="col-md-12">
      <table class="table" style="border: 0px;">
      <tr>
        <td>Vehicle</td>
        <td>Driver</td>
        <td>Total Capacity</td>
      </tr>
      <tr>
        <td>RIJ-28</td>
        <td>Sheraz Ahmed</td>
        <td>14</td>
      </tr>
    </table>
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







