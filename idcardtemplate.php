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
                  <li class="breadcrumb-item"><a href="Administration_sub.php">Academic</a></li>
                  <li class="breadcrumb-item"><a href="">ID Cards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">ID Card Template</li>
              </ol>
          </nav>
      </div>
      <div class="col-md-12">
        <div class="ms-panel w-100">
          <div class="ms-panel-header">
            <div>

                <div class="dropdown text-right">
                  <button class="btn btn-primary" onclick="window.location.href='idnewtemplate.php'">New Template</button>
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
                    <strong>No ID Card Template present</strong>
                </div>
            </div>

        </div>
    </div>
     <div class="col-md-4 ml-auto">
        <div class="ms-panel w-100">
          <div class="">
            <div>

                <div class="dropdown text-right">
                   <select class="form-control">
                       <option>Select Academic Year</option>
                   </select>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="ms-panel-body">
        <div class="text-left">
            <div>

            <h4>Individual ID Cards</h4>
            <p>List of all ID Cards generated for individual users</p>
            </div>
        </div>
        <div class="">
            <table class="table table-hover thead-primary">
                <thead>
                    <tr>
                        <th scope="col" class="text-left"> SI No</th>
                        <th scope="col" class="text-left"> Student Name</th>
                        <th scope="col" class="text-left">Admission no</th>
                        <th scope="col" class="text-left">Date</th>
                        <th scope="col" class="text-left"></th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left">1</td>
                        <td class="text-left">Khan Ways</td>
                        <td class="text-left">2323</td>
                        <td class="text-left">23-12-2020</td>
                        <td class="text-left"><a href="" data-toggle="modal" data-target="#modal-2">A4 Canvas</a> <a class="ml-5" href="">Single Card Size</a>
                        <a class="ml-5" href="">Delete</a>
                        </td>
                    </tr>
                    
                   
                    </tbody>
                </table>
            </div>
    </div>
   
  <div class="ms-panel-body">
        <div class="text-left">
            <div>

            <h4>Bulk Generated ID Cards</h4>
            <p>List of all ID Cards generated for many users</p>
            </div>
        </div>
        <div class="">
            <table class="table table-hover thead-primary">
                <thead>
                    <tr>
                        <th scope="col" class="text-left"> SI No</th>
                        <th scope="col" class="text-left">Date</th>
                        <th scope="col" class="text-left"></th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="2">No Bulk Generated ID Cards Present</td>
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
                        <h3 class="modal-title has-icon ms-icon-round ">Create New Vehicle</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>

                      <div class="modal-body">
                        <form class="needs-validation" novalidate>
                    <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-4"> <label for="validationCustom18"> Academic year</label></div>
                            <div class="col-8">
                                <p><b>2020 - 2021</b></p>
                            </div>
                        </div>
                    </div>
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
                            <div class="col-2"> <label for="validationCustom18"> Landmark</label></div>
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
                            <div class="col-2"> <label for="validationCustom18"> Lattitude</label></div>
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
                            <div class="col-2"> <label for="validationCustom18">Longitude</label></div>
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

                      </div>

                      <div class="modal-footer">
                        
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary shadow-none"><i class="fa fa-save"></i> Save</button>
                      </div>

                    </div>
                  </div>
                </div>

  
    </div>

     <div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="modal-2">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">

                      <div class="modal-header">
                        <h3 class="modal-title has-icon ms-icon-round ">ID Card Preview</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>

                      <div class="modal-body">
                         <div class="border border_cstm">
        
            <div class="row">
                <div class="col-md-4 offset-7">
                    <p><b>{{institution phone no}}</b></p>
                    <p><b>{{institution email}}</b></p>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-md-4 offset-2">
                    <h1>{{institution_name}}</h1>
                    <h1>{{institution_address}}</h1>
                </div>
            </div>
            <div class="row my-3">
                
            </div>
            <div class="col-md-6 offset-4">
                <p>{{full_name}}</p>
            </div>
            <div class="col-md-6 offset-4">
                <p>{{admission_no}}</p>
            </div>
            <div class="col-md-6 offset-4">
                <p>{{batch_full_name}}</p>
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

  
    </div>
    </div>

    <!-- footer -->

    <?php include_once('footer.php')?>







