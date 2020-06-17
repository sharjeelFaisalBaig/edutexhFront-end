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
                  <li class="breadcrumb-item"><a href="">Transport Fee</a></li>
                  <li class="breadcrumb-item"><a href="">Fee Collection</a></li>
                  <li class="breadcrumb-item active" aria-current="page">View</li>
              </ol>
          </nav>
      </div>
    <div class="col-md-12 text-center content-center">
    <div class="ms-panel w-100">
    <div class="row">
    <div class="col-md-6 m-auto">
      <div class="ms-panel ms-panel-fh">
        <div class="ms-panel-body">

          <div class="form-row">
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Select a User Type :</label></div>
              <div class="col-8">
                <select class="form-control">
                  <option>Student</option>
                </select>
              </div>
            </div>
          </div> 
          <div class="col-md-12 mb-3">
            <div class="row">
              <div class="col-4"> <label for="validationCustom18">Select a batch :</label></div>
              <div class="col-8">
                <select class="form-control">
                  <option>Pg-Pink</option>
                </select>
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
                        <th scope="col" class="text-left"> Name</th>
                        <th scope="col" class="text-left">Start Date</th>
                        <th scope="col" class="text-left">Due Date</th>
                        <th scope="col" class="text-left"></th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left">Transport Fee April -2020</td>
                        <td class="text-left">01-03-2020</td>
                        <td class="text-left">07-03-2020</td>
                        <td class="text-left"><a href="" data-toggle="modal" data-target="#modal-2">Edit</a> <a class="ml-5" href="">Delete</a>
                        </td>
                    </tr>
                    
                   
                    </tbody>
                </table>
            </div>
    </div>
   
  

    </div>
    </div>
    </div>
    </div>
<div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="modal-2">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">

                      <div class="modal-header">
                        <h3 class="modal-title has-icon ms-icon-round ">Edit Vehicle</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>

                      <div class="modal-body">
                        <form class="needs-validation" novalidate>
                    <div class="form-row">
                   <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-2"> <label for="validationCustom18"> Transport Fee Name:</label></div>
                            <div class="col-8">
                               <b>Transport Fee April - 2020</b>
                            </div>
                        </div>
                    </div>
                   <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-2"> <label for="validationCustom18"> Start Date</label></div>
                            <div class="col-8">
                                <div class="input-group">
                                    <input type="date" class="form-control" id="validationCustom18" placeholder="MMSC" value="MMSC" required="">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-2"> <label for="validationCustom18"> Due Date</label></div>
                            <div class="col-8">
                                <div class="input-group">
                                    <input type="date" class="form-control" id="validationCustom18" placeholder="MMSC" value="MMSC" required="">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                        
                    </div>
                      </div>

                      <div class="modal-footer">
                        
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary shadow-none"><i class="fa fa-save"></i> Update</button>
                      </div>

                    </div>
                  </div>
                </div>  
    <!-- footer -->

    <?php include_once('footer.php')?>







