    <?php include_once('header.php')?>
    <style type="text/css">
    .table td, .table th {
        padding: .75rem;
        border-top: 1px solid #dee2e6;
        vertical-align: middle;
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
                   <li class="breadcrumb-item"><a href="">Vehicles</a></li>
                    <li class="breadcrumb-item"><a href="">RIJ-28</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Vehicle Certificates</li>
              </ol>
          </nav>
      </div>
      <div class="col-md-12">
        <div class="ms-panel w-100">
          <div class="ms-panel-header">
            <div>

                <div class="dropdown float-right">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-1">Upload Certificate</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-md-12 text-center content-center">
    <div class="ms-panel w-100">
        <div class="ms-panel-header text-left pb-1">
         
         <p>Vehicle Certificate Description</p>
     </div>
       <div class="col-md-8 offset-4">
        <div class="ms-panel w-50">
            
            <div class="ms-panel-body">
                <div class="alert alert-warning text-center">
                    <strong>Vehicle Certificate Added Successfully</strong>
                </div>
            </div>

        </div>
    </div>
    <div class="ms-panel-body">
        <div class="">
            <table class="table table-hover thead-primary">
                <thead>
                    <tr>
                        <th scope="col" class="text-left">Certificate No</th>
                        <th scope="col" class="text-left">Date of Issue</th>
                        <th scope="col" class="text-left">Date of Expiry</th>
                        <th scope="col" class="text-left"></th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <td colspan="5" class="text-left"><b>Pollution Certificate</b></td>
                    </tr>
                    <tr>
                        <td class="text-left">123</td>
                        <td class="text-left">13-03-2020</td>
                        <td class="text-left">13-03-2020</td>
                        <td class="text-left">
                            <a href="" data-toggle="modal" data-target="#modal-2">Edit</a> 
                            <a class="ml-3" href="">Delete</a>
                            <a class="ml-3" href="">Download Certificate</a>
                        </td>
                    </tr>       
                    </tbody>
                </table>
            </div>
    </div>
   
  

    </div>
    </div>

    <div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="modal-1">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">

                      <div class="modal-header">
                        <h3 class="modal-title has-icon ms-icon-round ">Upload Vehicle Certificate</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>

                      <div class="modal-body">
                        <form class="needs-validation" novalidate>
                    <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-4"> <label for="validationCustom18"> Certificate Type</label></div>
                            <div class="col-8">
                                <div class="input-group">
                                    <select class="form-control">
                                        <option>Pollution Certificate</option>
                                    </select>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-4"> <label for="validationCustom18"> Certificate No</label></div>
                            <div class="col-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom18" placeholder="MMSC" value="MMSC" required="">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-4"> <label for="validationCustom18"> Date of Issue</label></div>
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
                            <div class="col-4"> <label for="validationCustom18"> Date of Expirey</label></div>
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
                            <div class="col-4"> <label for="validationCustom18"> Certificate</label></div>
                            <div class="col-8">
                                <div class="input-group">
                                    <input type="file" class="form-control" id="validationCustom18" placeholder="MMSC" value="MMSC" required="">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-6"> <label for="validationCustom18">
                                <a href=""><i class="fa fa-plus"></i> Show Reminder Settings</a>
                            </label></div>
                            <div class="col-8">
                                
                            </div>
                        </div>
                    </div>
                         </form>
                      </div>

                      <div class="modal-footer">
                        
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary shadow-none"><i class="fa fa-save"></i> Save</button>
                      </div>

                    </div>
                  </div>
                </div>
    <!-- footer -->
 

    <?php include_once('footer.php')?>
    <!-- EDit Modal -->
    <div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="modal-2">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">

                      <div class="modal-header">
                        <h3 class="modal-title has-icon ms-icon-round ">Upload Vehicle Certificate</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>

                      <div class="modal-body">
                        <form class="needs-validation" novalidate>
                    <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-4"> <label for="validationCustom18"> Certificate Type</label></div>
                            <div class="col-8">
                                <div class="input-group">
                                    <select class="form-control">
                                        <option>Pollution Certificate</option>
                                    </select>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-4"> <label for="validationCustom18"> Certificate No</label></div>
                            <div class="col-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom18" placeholder="MMSC" value="MMSC" required="">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-4"> <label for="validationCustom18"> Date of Issue</label></div>
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
                            <div class="col-4"> <label for="validationCustom18"> Date of Expirey</label></div>
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
                            <div class="col-4"> <label for="validationCustom18"> Certificate</label></div>
                            <div class="col-8">
                                <div class="input-group">
                                    <input type="file" class="form-control" id="validationCustom18" placeholder="MMSC" value="MMSC" required="">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-6"> <label for="validationCustom18">
                                <a href=""><i class="fa fa-plus"></i> Show Reminder Settings</a>
                            </label></div>
                            <div class="col-8">
                                
                            </div>
                        </div>
                    </div>
                         </form>
                      </div>

                    <div class="modal-footer">
                        
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary shadow-none"><i class="fa fa-save"></i> Upload Certificate</button>
                      </div>

                    </div>
                  </div>
    </div>







