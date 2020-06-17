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
                  <li class="breadcrumb-item"><a href="">Vehicle Maintaince</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tunning</li>
              </ol>
          </nav>
      </div>
      <div class="col-md-12">
        <div class="ms-panel w-100">
          <div class="ms-panel-header">
            <div>

                <div class="dropdown float-right">
                    <button class="btn btn-primary" onclick="window.location.href='edittranportmaintaince.php'">Edit</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-md-12 text-center content-center">
    <div class="ms-panel w-100">
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
              <div class="col-4"> <label for="validationCustom18">Note:</label></div>
              <div class="col-8">
               <p><b></b></p>
              </div>
            </div>
          </div>  
           <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Next Maintaince Date</label></div>
              <div class="col-8">
               <p><b>22-March-2020</b></p>
              </div>
            </div>
          </div> 
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
              <div class="col-4"> <label for="validationCustom18">Name of Maintenance :</label></div>
              <div class="col-8">
                <p><b>Tunning</b></p>
              </div>
            </div>
          </div> 
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Maintenance Date:</label></div>
              <div class="col-8">
               <p><b>22-March-2010</b></p>
              </div>
            </div>
          </div>  
           <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Amount</label></div>
              <div class="col-8">
               <p><b>200.00</b></p>
              </div>
            </div>
          </div> 
        </div>

      </div>
    </div>
  </div>
    </div>
    
    <div class="ms-panel-body w-50">
        <div class="">
          <p class="text-left"><b>Attachment</b></p>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-left"> Receipt of Bill</th>
                        <th scope="col" class="text-left"><a class="" href="">Download Attachment</a></th>
                    </tr>
                </thead>
                </table>
            </div>
    </div>
   
  

    </div>
    </div>
    </div>
    </div>

    <!-- footer -->

    <?php include_once('footer.php')?>







