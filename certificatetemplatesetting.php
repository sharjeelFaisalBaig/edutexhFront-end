<!-- header -->
<?php require 'header.php';?>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Oswald:wght@500&family=Poppins&family=Roboto&display=swap" rel="stylesheet">

<!-- header -->
<style>
.hide {
    padding: 10px;
    background-color: #e9e9e9;
}
.hide p {
    margin: 0;
}
.cert-img{
    max-width: 19%;
    height: 21vh;
    padding: 10px;
}

</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="index-2.php">Home</a></li>
                <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>

                <li class="breadcrumb-item"><a href="">Transfer Certificate</a></li>
                <li class="breadcrumb-item active" aria-current="page">Certificate Template Setting</li>
            </ol>
        </nav>
    </div>
    <div class="col-md-12">
<div class="ms-panel w-100">
  <div class="ms-panel-header">
            <div>
               
                <div class="dropdown text-right">
                    <button class="btn btn-primary" onclick="window.location.href=''">Preview Certificate</button>
                </div>
            </div>
  </div>
  <div class="ms-panel-header">
        <h6>Choose and add the required fields in the transfer certificate based on  your institution board standards</h6>
  </div>
</div>
</div>
    <div class="col-md-12">
        <div class="ms-panel ms-panel-fh">

                <div class="ms-panel-body">
                    <div class="col-md-12">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>Header</h6>
              <p>The header of the certificate with institutional details can be configured</p>
             
                  <div class="dropdown text-right">
                       <button class="btn btn-primary" onclick="window.location.href='editcertificatetemplate.php'">Edit</button>
                  </div>
              
            </div>
            <div class="ms-panel-body">
              <div class="row">

                <div class="col-md-12">
                  <div class="ms-card no-margin">
                    <div class="media">
                          <img class="mr-3 cert-img" src="assets/img/costic/food-5.jpg" alt="Generic placeholder image">
                          <div class="media-body">
                            <h5 class="mt-0">MMSC</h5>
                            <p>Eidgah Road,Pano-Akil</p>
                            <span>www.mmsc.com | 0232323 | mmsc@gmail.com</span>
                          </div>
                    </div>
                    <div class="bg-white border card-footer text-center">
                        <h4>SCHOOL RELIEVING CERTIFICATE</h4>
                        <div class="ms-card-heading-title mt-5">
                            <p>Certificate Number <span class="red-text">15</span></p>
                            <p>Date of Issue: <span class="red-text">dd-mm-yyyy</span></p>
                        </div>
                    </div>
                 </div>
                

              </div>
            </div>
          </div>
        </div>
                </div>
            </div>
    </div>

</div>
</div>
<!-- /Body Content Wrapper -->

<!-- footer -->
<?php require 'footer.php';?>
<script>
$(document).ready(function(){
    $(document).on('click', "#fonts", function(){
        let font = $(this).val();
        $("*").css("font-family", font);
    })
})
</script>
<script>
$('#select_box').change(function () {
    var select=$(this).find(':selected').val();
    $(".hide").hide();
    $('#' + select).show();

}).change();
</script>

<script>
// date
document.querySelector("#financial-start").valueAsDate = new Date();
document.querySelector("#financial-end").valueAsDate = new Date();
</script>
<!-- footer -->



