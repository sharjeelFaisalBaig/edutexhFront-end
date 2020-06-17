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
          <li class="breadcrumb-item"><a href="Academic-certificate_sub.php">ID Cards</a></li> 
          <li class="breadcrumb-item"><a href="Academic-certificate_newTemplate_sub.php">ID Card Content</a></li> 
          <li class="breadcrumb-item active" aria-current="page">Preview</li>
        </ol>
      </nav>
    </div>

    

    <div class="col-md-6 m-auto">
    
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
                <div class="col-md-4 offset-8">
                    <p><b>{{institution phone no}}</b></p>
                    <p><b>{{institution email}}</b></p>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-md-4 offset-1">
                    <h1>{{institution_name}}</h1>
                    <h2>{{institution_address}}</h2>
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