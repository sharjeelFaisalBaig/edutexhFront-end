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
                  <li class="breadcrumb-item"><a href="">Transport</a></li>
                  <li class="breadcrumb-item"><a href="">Settings</a></li>
                  <li class="breadcrumb-item"><a href="">Vehicle</a></li>
                  <li class="breadcrumb-item active" aria-current="page">RIJ-27</li>
              </ol>
          </nav>
      </div>
      <div class="col-md-12">
        <div class="ms-panel w-100">
          <div class="ms-panel-header">
            <div>

                <div class="dropdown float-right">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-2">Edit</button>
                </div>
                 <div class="dropdown float-right">
                    <button class="btn btn-primary mr-3" onclick="window.location.href='uploadvehiclecertificate.php'">Vehicle Certificate</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-md-12 text-center content-center">
    <div class="ms-panel w-100">
       <div class="col-md-8 offset-4">
        <div class="ms-panel w-50">
            
            <div class="ms-panel-body">
                <div class="alert alert-warning text-center">
                    <strong>Vehicle Added Successfully</strong>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
    <div class="col-md-6 lft">
      <div class="ms-panel ms-panel-fh">
        <div class="ms-panel-body">

          <div class="form-row">
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Vehicle :</label></div>
              <div class="col-8">
                <p><b>RIJ-27</b></p>
              </div>
            </div>
          </div> 
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Status</label></div>
              <div class="col-8">
               <p><b>Active</b></p>
              </div>
            </div>
          </div>  
           <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Vehicle Model</label></div>
              <div class="col-8">
               <p><b>2018</b></p>
              </div>
            </div>
          </div> 
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Vehicle Type</label></div>
              <div class="col-8">
               <p><b>Hiroof</b></p>
              </div>
            </div>
          </div>   
          <hr class="div-seperator">
        </div>

      </div>
    </div>
  </div>
  <div class="col-md-6 lft">
      <div class="ms-panel ms-panel-fh">
        <div class="ms-panel-body">

          <div class="form-row">
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">No. of Seats :</label></div>
              <div class="col-8">
                <p><b>27</b></p>
              </div>
            </div>
          </div> 
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Vehicle Type:</label></div>
              <div class="col-8">
               <p><b>Own</b></p>
              </div>
            </div>
          </div>  
           <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">GPS Number</label></div>
              <div class="col-8">
               <p><b></b></p>
              </div>
            </div>
          </div> 
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Insurance Expirey Date</label></div>
              <div class="col-8">
               <p><b>15.04.2020</b></p>
              </div>
            </div>
          </div>   
          <hr class="div-seperator">
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
                        <th scope="col" class="text-left"> Route</th>
                        <th scope="col" class="text-left">No. of Stops</th>
                        <th scope="col" class="text-left">Driver</th>
                        <th scope="col" class="text-left">Attendant</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5" class="text-left">No Route Added Yet</td>
                       <!--  <td class="text-left"></td>
                        <td class="text-left"></td>
                        <td class="text-left"></td>
                        <td class="text-left"></td> -->
                        <!-- <td class="text-left"><a href="" data-toggle="modal" data-target="#modal-2">Edit</a> <a class="ml-5" href="">Delete</a>
                        <i class="fa fa-arrow-down ml-3"></i>
                        </td> -->
                    </tr>
                    
                   
                    </tbody>
                </table>
            </div>
    </div>
   
  

    </div>
    </div>
    </div>
    </div>

    <!-- footer -->

    <?php include_once('footer.php')?>







