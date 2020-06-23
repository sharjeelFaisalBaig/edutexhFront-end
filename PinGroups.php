<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="">
        <div class="row">
            <div class="col-md-12">
                <div class="ms-panel-header pt-0">
                    <h6 class="d-md-inline"><i class="fas fa-file-alt"></i> Pin Group</h6> |  <small>Home</small>
                    <a href="#" data-toggle="modal" data-target="#modalonclose" class="btn btn-primary float-md-right m-auto">New</a>
                    <div class="clearfix"></div>
                </div></div>
                <div class="col-md-8 mt-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb pl-0">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="ApplicantRegistration.php">Applicant Registration</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pin Group</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 m-md-auto">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="alert alert-warning text-center my-4">
                            <strong>No pin groups found</strong>
                        </div>
                    </div>      
                    <div class="col-md-2"></div> 
                </div>
                <div class="row">
                    <div class="table-responsive mt-5">
                        <table class="table table-bordered thead-primary">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Valid From</th>
                                    <th scope="col">Valid Till</th>
                                    <th scope="col">Course Names</th>
                                    <th scope="col">Pin Count</th>
                                    <th scope="col">Active</th>
                                    <th scope="col">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label class="m-0">MBA(2.5 Years Program)</label></td>
                                    <td><label class="m-0">27-05-2020</label></td>
                                    <td><label class="m-0">27-06-2020</label></td>
                                    <td><label class="m-0">Master Of Business Administration</label></td>
                                    <td><label class="m-0">100</label></td>
                                    <td><label class="m-0">Active</label></td>
                                    <td><label class="m-0"><a href="Show.php"> Show </a>|<a href=""> Edit </a>|<a href=""> Deactive</a></label></td>
                                </tr>
                            </tbody>
                        </table>                
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg" id="modalonclose" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg">
          <div class="modal-content">

             <div class="modal-header">
                <h6 class="modal-title has-icon ms-icon-round ">Add Course</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="validationCustom18" class="mt-1"><b>Course</b></label>    
                    </div>
                    <div class="col-md-4">
                        <select class="form-control height">
                            <option selected="">Master Of Business Admistration</option>
                            <option value="2">abc</option>
                            <option value="2">Above</option>
                            <option value="3">xyz</option>
                        </select>        
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="validationCustom18" class="mt-1"><b>Valid From</b></label>    
                    </div>
                    <div class="col-md-4">
                        <input type="date" class="form-control inputtype">        
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="validationCustom18" class="mt-1"><b>Valid Till</b></label>    
                    </div>
                    <div class="col-md-4">
                        <input type="date" class="form-control inputtype">        
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="validationCustom18" class="mt-1"><b>Pin Type</b></label>    
                    </div>
                    <div class="col-md-4">
                        <input type="number" class="form-control inputtype">        
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="validationCustom18" class="mt-1"><b>Name</b></label>    
                    </div>
                    <div class="col-md-4">
                        <input type="Text" class="form-control inputtype">        
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="validationCustom18" class="mt-1"><b>Is Active</b></label>    
                    </div>
                    <div class="col-md-4 offset-md-1">
                        <input type="checkbox" class="form-control inputtype mt-1">        
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="validationCustom18" class="mt-1"><b>Courses</b></label>    
                    </div>
                    <div class="col-md-4 md-0">
                        <div class="border p-2 border">
                            <label class="d-inline">SELECT: <a href="" class="d-inline">ALL</a>,<a href="" class="d-inline">None</a></label><br>
                            <label class="md-0"><input type="checkbox"/>Master of Business Administration</label>
                        </div>          
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-12 ml-0"><a href="PinGroups.php" class="m-0 float-right btn btn-primary width70">Save</a></div>
            </div>
        </div>

    </div>
</div>
</div> 


<!-- footer -->
<?php require 'footer.php';?>
<!-- footer -->