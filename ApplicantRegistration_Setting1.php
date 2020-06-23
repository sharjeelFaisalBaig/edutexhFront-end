<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="">
        <div class="row">
            <div class="col-md-12">
             <div class="ms-panel-header pt-0">
                <h6 class="d-md-inline"><i class="fas fa-user-alt"></i> Applicant Registration</h6> |  <small>Course Setting</small>
                <div class="float-md-right">
                    <a href="applicantReg-customize-form" class="btn btn-primary m-md-auto">Customize Form</a>
                    <a href="javascript:void(0);" class="m-0 btn btn-primary width70 m-md-auto">Print Form</a>
                    <a href="javascript:void(0);" class="m-0 btn btn-primary width70 m-md-auto">Delete</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-8 mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="ApplicantRegistration.php">Applicant Registration</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Setting - Mater Of Business Administration</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8 m-md-auto">
        <div class="row mt-2">
            <div class="col-md-12"><label class="text-bold">Settings</label></div>
        </div>
        <div class="row mt-2">
            <div class="col-md-3"><label>Course</label></div>
            <div class="col-md-6"><label>Master Of Business Administration</label></div>
        </div>
        <div class="row mt-2">
            <div class="col-md-3"><label>Display Name</label></div>
            <div class="col-md-6"><input type="text" class="form-control inputtype"></div>
        </div>
        <div class="row mt-2">
            <div class="col-md-3"><label>Printable Form Header</label></div>
            <div class="col-md-6"><input type="text" class="form-control inputtype"></div>
        </div><hr>
        <div class="row">
            <div class="col-md-12"><label>Application Registration Status</label> 
            </div>
        </div>    
        <div class="row">
            <div class="col-md-12"><input type="radio" name="1"/><label class="ml-1">Active</label><br>
                <label>Now This Course Will be able to accept application from students.</label></div>
            </div>
            <div class="row">
                <div class="col-md-12"><input type="radio" name="1"/><label class="ml-1">Inactive</label><br>
                    <label>Applicant Registration will be deactivated for this course.Still all the received applications will be accessible.</label></div>
                </div><hr>
                <div class="row">
                    <div class="col-md-12"><label>Applicant Fees(Rs.)</label></div>
                    <div class="col-md-12">Each applicant can charged a fee for applying,which can be collected through online payment or through offline.</div>
                    <div class="col-md-3 mt-4"><label>Amount</label></div>
                    <div class="col-md-6 mt-4"><input type="text" class="form-control inputtype"></div>
                </div><hr>
                <div class="row">
                    <div class="col-md-12 mt-4"><strong>Applicant Feeling Instruction for Candiates</strong></div>
                    <div class="col-md-12 mt-4"><p class="text-muted">Any Information and general guidelines that need to be given to the candiates before feeling the application form should be put here course specific instructions can be given inside specific courses,and will be shown to the applicant,once a course is selected.</p></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <textarea name="" id="editor" cols="30" rows="10" style="visibility: hidden; display: none;"></textarea>
                    </div>
                    <div class="col-md-12 mt-2"><a href="">Disable application instructor</a></div>
                </div>
                <div class="row">
                    <div class="col-md-12"><h4>Edit the amount(If needed)</h4></div>
                    <div class="col-md-12 mt-4"><h4>Enter the instruction for particular courses</h4></div>
                </div><hr>
                <div class="row mt-2">
                    <div class="col-md-12"><label>Pin based registration</label></div>
                    <div class="col-md-1 mt-1"><input type="checkbox" class="form-control inputtype"></div>
                    <div class="col-md-11"><label>Enable pin</label></div>
                    <div class="col-md-11 offset-md-1"><label>Restrict the access to applicant with a PIN number for applying this course.</label></div>
                </div><hr>
                <div class="row">
                    <div class="col-md-12"><label>Elective Subjects Selection</label></div>
                    <div class="col-md-1 mt-1"><input type="checkbox" class="form-control inputtype"></div>
                    <div class="col-md-11"><label>Enable Elective Subjects Selection</label></div>
                    <div class="col-md-11 offset-md-1"><label>Applicant can choose their electives when applying for a particular course. After evalution, the applicant can be alloted to a batch with those active electives.</label></div>
                </div>
                <div class="row">
                    <div class="col-md-3">Elective Subjects Count</div>
                    <div class="col-md-1 mt-1 offset-md-1"><label class="mt-1">Minimum</label></div>
                    <div class="col-md-2"><select class="form-control height select">
                        <option selected="">0</option>
                        <option value="1">abc</option>
                        <option value="2">Above</option>
                        <option value="3">xyz</option>
                    </select>
                </div>
                <div class="col-md-1 offset-md-1"><label class="mt-1">Maximum</label></div>
                <div class="col-md-2"><select class="form-control height select">
                    <option selected="">0</option>
                    <option value="1">abc</option>
                    <option value="2">Above</option>
                    <option value="3">xyz</option>
                </select>
            </div>
        </div>
        <div class="row">
           <div class="col-md-1 mt-1"><input type="checkbox" class="form-control inputtype"></div>
           <div class="col-md-11"><label>Enable Subjects Based Fee Collection</label></div>
           <div class="col-md-11 offset-md-1"><label>Enable or disable subject based fee collection to collect fee.</label></div>
       </div><hr>
       <div class="row">
           <div class="col-md-12"><label>Archeive Student Application</label></div>
           <div class="col-md-12"><label>After the application for an academic year are closed and all prospects are admitted, you can archeive the applications. This will help you mange applicant registration for the next academic year easily.</label></div>
           <div class="col-md-12"><label>Enable or disable subject based fee collection to collect fee.</label></div>
           <dic class="col-md-12"><a href="">Archeive all Students Application</a></dic>
       </div><hr>
       <div class="row">
           <div class="col-md-12"><a href=".php" class="m-0 btn btn-primary width70">Save settings</a>
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