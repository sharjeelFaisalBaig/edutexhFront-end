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
                  <li class="breadcrumb-item"><a href="">Route Details</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Route Name</li>
              </ol>
          </nav>
      </div>
      <div class="col-md-12">
        <div class="ms-panel w-100">
          <div class="ms-panel-header">
            <div>

                <div class="dropdown float-right">
                    <button class="btn btn-primary">Edit</button>
                </div>
                 <div class="dropdown float-right">
                    <button class="btn btn-primary mr-3" data-toggle="modal" data-target="#modal-1" >Reorder Stops</button>
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
                    <strong>Route Added Successfully</strong>
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
              <div class="col-4"> <label for="validationCustom18">Name :</label></div>
              <div class="col-8">
                <p><b>Soan Garden</b></p>
              </div>
            </div>
          </div> 
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Vehicle</label></div>
              <div class="col-8">
               <p><b>RIJ-29</b></p>
              </div>
            </div>
          </div>  
           <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Attendant</label></div>
              <div class="col-8">
               <p><b>Tanveer Ahmed</b></p>
              </div>
            </div>
          </div> 
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Nearest Police Station During</label></div>
              <div class="col-8">
               <p><b>Soan Garden Police Station</b></p>
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
              <div class="col-4"> <label for="validationCustom18">Fare:</label></div>
              <div class="col-8">
                <p><b>2700.00</b></p>
              </div>
            </div>
          </div> 
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Driver:</label></div>
              <div class="col-8">
               <p><b>Sheeraz Ahmed</b></p>
              </div>
            </div>
          </div>  
           <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Nearest Hospital During</label></div>
              <div class="col-8">
               <p><b>Agha Khan Hospital</b></p>
              </div>
            </div>
          </div> 
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Fare Updating Status</label></div>
              <div class="col-8">
               <p><b>-</b></p>
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
                        <th scope="col" class="text-left"> Stop</th>
                        <th scope="col" class="text-left">Landmark</th>
                        <th scope="col" class="text-left">Pickup Time</th>
                        <th scope="col" class="text-left">Drop Time</th>
                        <th scope="col" class="text-left">Distance (Kms)</th>
                        <th scope="col" class="text-left">Fare</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left">Committe Chowk</td>
                        <td class="text-left">Metro Stop</td>
                        <td class="text-left">08:00 AM</td>
                        <td class="text-left">15:00 AM</td>
                        <td class="text-left">35.0</td>
                        <td class="text-left">2000.00</td>
                      
                    </tr>
                    
                   
                    </tbody>
                </table>
            </div>
    </div>
   
  

    </div>
    </div>
    </div>
    </div>
<div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="modal-1">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">

                      <div class="modal-header">
                        <h3 class="modal-title has-icon ms-icon-round ">Reorder Stops</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>

                      <div class="modal-body">
                        <p>Reorder the stops as it is required in route</p>
                        <form class="needs-validation" novalidate>
                         <ul class="ms-list ms-sortable">
                <li class="ms-list-item bordered media ms-draggable">
                  <div class="media-body">
                    
                  
                      <table class="table">
                        <tr>
                          <td>Committe Chowk</td>
                          <td>Metro Stop</td>
                        </tr>
                      </table>
                    
                  </div>
                </li>
                <li class="ms-list-item bordered media ms-draggable">
                  <div class="media-body">
                    
                  
                      <table class="table">
                        <tr>
                          <td>Soan Garden</td>
                          <td>Tower Stop</td>
                        </tr>
                      </table>
                    
                  </div>
                </li>
              </ul>
                      </div>

                      <div class="modal-footer">
                        
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary shadow-none"><i class="fa fa-save"></i> Save Order</button>
                      </div>

                    </div>
                  </div>
                </div>
    <!-- footer -->

    <?php include_once('footer.php')?>







