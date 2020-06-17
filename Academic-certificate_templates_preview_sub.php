<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<style>
.hieght_cstm{
    height: 30%;
    overflow-y: scroll;
}
.border_cstm{
    border:2px dashed black;
}
.heading_preview_cstm{
    color:rgb(66, 206, 245);
}
</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
  <div class="row">
    <div class="col-md-12">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb pl-0">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
          <li class="breadcrumb-item"><a href="Academic-certificate_sub.php">Certificates</a></li> 
          <li class="breadcrumb-item"><a href="Academic-certificate_newTemplate_sub.php">New Templates</a></li> 
          <li class="breadcrumb-item active" aria-current="page">Preview</li>
        </ol>
      </nav>
    </div>

    <div class="col-md-12">
        <div class="d-none">
            <h6>Template | <small>Preview</small></h6>
        </div>
    </div>

    <div class="col-md-8 m-auto">
    
        <form class="needs-validation mb-2" novalidate>
            <div class="form-row">
                <div class="col-md-8 my-4">
                    <textarea name="" id="editor" cols="30" rows="10"></textarea>
                </div>
                <div class="col-md-4">
                        <ul>
                            <li class="border-1 p-2 mt-4">
								<h6 class="text-center border-bottom">Field Codes</h6>
                                <p>To Auto Populate The Certificate With Values About The User Field Use The Appropriate Code In The Form</p>
							</li>
                        </ul>
						<ul class="hieght_cstm">
							<li class="border-1 p-2">
							    Address<br>
                                <a href="#">{{Address}}</a>
							</li>
                            <li class="border-1 p-2">
							    Admission Date<br>
                                <a href="#">{{Admission_date}}</a>
							</li>
                            <li class="border-1 p-2">
                                Admission No.<br>
                                <a href="#">{{Admission_number}}</a>
							</li>
                            <li class="border-1 p-2">
                                Barcode<br>
                                <a href="#">{{Barcode}}</a>
							</li>
                            <li class="border-1 p-2">
                                Batch<br>
                                <a href="#">{{Batch}}</a>
							</li>
                            <li class="border-1 p-2">
                                Batch Full Name<br>
                                <a href="#">{{Batch_full_name}}</a>
							</li>
                            <li class="border-1 p-2">
                                Biometric Id<br>
                                <a href="#">{{Biometric_id}}</a>
							</li>
						</ul>
					</div>

            </div>
        </form>

        <div class="border border_cstm">
        
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h4 class="heading_preview_cstm"><i>Mehran Modal School And College Pano-Akil</i></h4>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <h4 class="heading_preview_cstm"><i>Character Certificate</i></h4>
                </div>
                <div class="col-md-4"></div>
            </div>

            <div class="row my-3">
                <div class="col-md-4"><p>{{Full_Name}}</p><p>{{Father_Name}}</p></div>
                <div class="col-md-2"></div>
                <div class="col-md-4"><p>{{Gender}}</p><p>{{Admission_No.}}</p></div>
                <div class="col-md-2"></div>
            </div>
            <div class="row my-3">
                <div class="col-md-5"></div>
                <div class="col-md-3"><h5>AFFIDAVIT</h5></div>                
                <div class="col-md-4"></div>
            </div>
            <div class="col-md-12">
                <p>I, S/O {{Father_Name} Resident Of {{Address}} Do Here BY Solemny Affirms And Declare As Under :-</p>
            </div>
            <div class="col-md-12">
                <p>1. That The Deponent Is Fully Conversant With The Contents Of Affidavit </p>
            </div>
            <div class="col-md-12">
                <p>2. That____________S/O____________NIC No._____________Is My Real______________And Was Resided At</p>
            </div>
            <div class="col-md-12">
                <p>________________From______________To____________And He/She Is Alive And Presently Residing Abroad</p>
            </div>
            <div class="col-md-12">
                <p>3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde sit architecto praesentium veniam ratione illo, corrupti doloribus quidem temporibus necessitatibus.</p>
            </div>
            <div class="col-md-12">
                <p>4. Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde sit architecto praesentium veniam ratione illo, corrupti doloribus quidem temporibus necessitatibus.</p>
            </div>
            <div class="col-md-12">
                <p>5. Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde sit architecto praesentium veniam ratione illo, corrupti doloribus quidem temporibus necessitatibus.</p>
            </div>
            <div class="col-md-12">
                <p>6. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, nostrum velit a nisi enim laboriosam blanditiis dicta. Deleniti error similique laudantium ratione, et, ipsum, tempora iusto voluptatem adipisci placeat id?</p>
            </div>
            <div class="col-md-12">
                <p>Deponent________________Mr______________S/O____________NIC</p>
            </div>
            <div class="col-md-12">
                <p>Number Of________________Passport______________(Copy Attached)</p>
            </div>
            <div class="col-md-12">
                <p>Witness # 01 :-______________________Witness # 02 :-_____________________</p>
            </div>
            <div class="col-md-12">
                <p>NIC No._____________________NIC No._____________________(Copy Attached) (Copy Attached)</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <a href="Academic-certificate_templates_sub.php" class="btn btn-primary">Create Template</a>
            </div>
            <span class="col-md-2"></span>
            <div class="col-md-2">
                <a href="Academic-certificate_templates_newTemplate_sub.php" class="btn btn-primary">Cancel</a>
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