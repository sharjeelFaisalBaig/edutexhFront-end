<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="">
        <div class="row">
            <div class="col-md-12">
                <div class="ms-panel-header pt-0">
                    <h6 class="d-md-inline"><i class="fas fa-file-alt"></i> Applicant Registration</h6> |  <small>Settings</small>
                    <a href="applicantReg-customize-form.php" class="btn btn-primary float-md-right m-auto">Customize Form</a>
                    <div class="clearfix"></div>
                </div></div>
                <div class="col-md-8 mt-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb pl-0">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="ApplicantRegistration.php">Applicant Registration</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Applicant Registration</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-md-8 m-md-auto">
            <div class="row">
                <div class="col-md-12 mt-4"><strong>Applicant Registration Setting</strong></div>
                <div class="col-md-12 mt-4"><strong>Applicant Feeling Instruction for Candiates</strong></div>
                <div class="col-md-12 mt-4"><p class="text-muted">Any Information and general guidelines that need to be given to the candiates before feeling the application form should be put here course specific instructions can be given inside specific courses,and will be shown to the applicant,once a course is selected.</p></div>
                <div class="col-md-12">
                    <textarea name="" id="editor" cols="30" rows="10" style="visibility: hidden; display: none;"></textarea>
                </div>
                <div class="col-md-12">
                    <a href="" class="btn btn-primary">Save Application Instruction</a>
                    <a href="" class="ml-2">Disable Application Instructions</a><hr>
                </div>

                <div class="col-md-12"><a href="#" data-toggle="modal" data-target="#modalonclose" class="m-0 float-md-right btn btn-primary">Create Status</a></div>
                <div class="table-responsive mt-5">
                    <table class="table table-bordered thead-primary">
                        <thead>
                            <tr>
                                <th scope="col">Status</th>
                                <th scope="col">Description</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"colspan="3">Active Status(3)</th>
                            </tr>
                            <tr>
                                <td><label class="m-0">Pending</label></td>
                                <td><label class="m-0">The application is being processed</label></td>
                                <td><a href=""><b>Edit</b></td>
                                </tr>
                                <tr>
                                    <td><label class="m-0">Alloted</label></td>
                                    <td><label class="m-0">The application has been alloted to a batch</label></td>
                                    <td><a href=""><b>Edit</b></td>
                                    </tr>
                                    <tr>
                                        <td><label class="m-0">Discarded</label></td>
                                        <td><label class="m-0">The application has been discarded</label></td>
                                        <td><a href=""><b>Edit</b></td>
                                        </tr>
                                        <tr>
                                           <th scope="row"colspan="3">Inactive Status(0)</th>
                                       </tr>
                                       <tr>
                                        <td colspan="3"><strong>No Satus Found</strong></td>

                                    </tr>
                                </tbody>
                            </table>



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
                                    <label for="validationCustom18" class="mt-1"><b>Name</b></label>    
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control inputtype">        
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="validationCustom18" class="mt-1"><b>Description</b></label>    
                                </div>
                                <div class="col-md-4">

                                    <textarea name="" id="input" class="form-control input type" rows="3"></textarea>        
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-7">
                                    <input type="checkbox" class="form-control inputtype mt-1 float-left">        
                                    <label for="validationCustom18""><b class="ml-2">Active</b></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="checkbox" class="form-control inputtype mt-1 float-left">        
                                    <label for="validationCustom18""><b class="ml-2">Notify the applicant with Email and SMS when the application is updated with this status.</b></label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="col-md-12 ml-0"><a href="Discipline Module_New.php" class="m-0 float-right btn btn-primary width70">Create Status</a></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
        <script>
           CKEDITOR.replace('editor', {
              skin: 'moono',
              enterMode: CKEDITOR.ENTER_BR,
              shiftEnterMode:CKEDITOR.ENTER_P,
              toolbar: [{ name: 'basicstyles', groups: [ 'basicstyles' ], items: [ 'Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor' ] },
              { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
              { name: 'scripts', items: [ 'Subscript', 'Superscript' ] },
              { name: 'justify', groups: [ 'blocks', 'align' ], items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
              { name: 'paragraph', groups: [ 'list', 'indent' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
              { name: 'links', items: [ 'Link', 'Unlink' ] },
              { name: 'insert', items: [ 'Image'] },
              { name: 'spell', items: [ 'jQuerySpellChecker' ] },
              { name: 'table', items: [ 'Table' ] }
              ],
          });

      </script>
      <!-- footer -->

      <?php require 'footer.php';?>

<!-- footer -->