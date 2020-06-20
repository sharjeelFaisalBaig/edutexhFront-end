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
                  <li class="breadcrumb-item active" aria-current="page">Vehicle Addional Details</li>
              </ol>
          </nav>
      </div>
      <div class="col-md-12">
        <div class="ms-panel w-100">
          <div class="ms-panel-header">
            <div>

                <div class="dropdown float-right">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-1">Add Details</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-md-12 text-center content-center">
    <div class="ms-panel w-100">
        <div class="ms-panel-header text-left pb-1">
         
            <p>Configure fields to capture additional data related to a vehical</p>
        </div>
       <div class="col-md-8 offset-4">
        <div class="ms-panel w-50">
            
            <div class="ms-panel-body">
                <div class="alert alert-warning text-center">
                    <strong>Vehicle Additional Details Created</strong>
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
                        <th scope="col" class="text-left">Is Mandatory</th>
                        <th scope="col" class="text-left">Input Method</th>
                        <th scope="col" class="text-left"></th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <td colspan="4" class="text-left"><b>Active Fields</b></td>
                    </tr>
                    <tr>
                        <td class="text-left">Vehicle Models</td>
                        <td class="text-left">Yes</td>
                        <td class="text-left">Text Box</td>
                        <td class="text-left"><a href="" data-toggle="modal" data-target="#modal-2">Edit</a> <a class="ml-5" href="">Delete</a>
                        <i class="fa fa-arrow-down ml-3"></i>
                        </td>
                    </tr>
                     <tr>
                        <td class="text-left">Insurance Expiry Date</td>
                        <td class="text-left">Yes</td>
                        <td class="text-left">Text Box</td>
                        <td class="text-left"><a href="" data-toggle="modal" data-target="#modal-2">Edit</a> <a class="ml-5" href="">Delete</a>
                        <i class="fa fa-arrow-up  ml-5"></i>
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
                        <h3 class="modal-title has-icon ms-icon-round ">Create New Vehicle Addional Detail</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>

                      <div class="modal-body">
                        <form class="needs-validation" novalidate>
                    <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-2"> <label for="validationCustom18"> Name</label></div>
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
                            <div class="col-2"> <label for="validationCustom18"> Status</label></div>
                            <div class="col-8">
                                <div class="modal-notice">
                                  <label class="ms-checkbox-wrap">
                                    <input type="radio" name="yes" value="">
                                    <i class="ms-checkbox-check"></i>
                                </label>
                                <span class="mr-4"> Active </span>
                                 <label class="ms-checkbox-wrap">
                                    <input type="radio" name="yes" value="">
                                    <i class="ms-checkbox-check"></i>
                                </label>
                                <span> Inactive </span>
                            </div>
                             <div class="modal-notice">
                                 
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-4"> <label for="validationCustom18"> Is mandatory</label></div>
                            <div class="col-8">
                                <div class="modal-notice">
                                  <label class="ms-checkbox-wrap">
                                    <input type="checkbox"  value="">
                                    <i class="ms-checkbox-check"></i>
                                </label>
                               
                            </div>
                             <div class="modal-notice">
                                 
                            </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-3"> <label for="validationCustom18"> Input method</label></div>
                            <div class="col-8">
                                <div class="input-group">
                                    <select class="form-control">
                                        <option>Text Box</option>
                                    </select>
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
                        <button type="button" class="btn btn-primary shadow-none"><i class="fa fa-save"></i> Save</button>
                      </div>

                    </div>
                  </div>
                </div>

    <!-- EDit Modal -->
     <div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="modal-2">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">

                      <div class="modal-header">
                        <h3 class="modal-title has-icon ms-icon-round ">Edit Vehicle Addional Detail</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>

                      <div class="modal-body">
                        <form class="needs-validation" novalidate>
                    <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-2"> <label for="validationCustom18"> Name</label></div>
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
                            <div class="col-2"> <label for="validationCustom18"> Status</label></div>
                            <div class="col-8">
                                <div class="modal-notice">
                                  <label class="ms-checkbox-wrap">
                                    <input type="radio" name="yes" value="">
                                    <i class="ms-checkbox-check"></i>
                                </label>
                                <span class="mr-4"> Active </span>
                                 <label class="ms-checkbox-wrap">
                                    <input type="radio" name="yes" value="">
                                    <i class="ms-checkbox-check"></i>
                                </label>
                                <span> Inactive </span>
                            </div>
                             <div class="modal-notice">
                                 
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-4"> <label for="validationCustom18"> Is mandatory</label></div>
                            <div class="col-8">
                                <div class="modal-notice">
                                  <label class="ms-checkbox-wrap">
                                    <input type="checkbox"  value="">
                                    <i class="ms-checkbox-check"></i>
                                </label>
                               
                            </div>
                             <div class="modal-notice">
                                 
                            </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-3"> <label for="validationCustom18"> Input method</label></div>
                            <div class="col-8">
                                <div class="input-group">
                                    <select class="form-control">
                                        <option>Text Box</option>
                                    </select>
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
    </div>
    </div>

    <!-- footer -->

    <?php include_once('footer.php')?>







