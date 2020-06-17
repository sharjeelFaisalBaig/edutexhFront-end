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

.table td, .table th {
    padding: 15px 5.75rem 24px;
    vertical-align: top;
    border-top: none;
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
                <li class="breadcrumb-item active" aria-current="page">Student Details</li>
            </ol>
        </nav>
    </div>
    <div class="col-md-12">
<div class="ms-panel w-100">
  <div class="ms-panel-header">
            <div>
               
                <div class="dropdown text-right">
                    <button class="btn btn-primary" onclick="window.location.href='editstudentcertificatedetail.php'">Edit</button>
                </div>
            </div>
  </div>
  <div class="ms-panel-header">
        <h6>Student Details</h6>
        <p>Various student details required in the certificate can be configured.There are few students details that can be used from the system and few custom fields that are to be specified while issuing</p>
  </div>
</div>
</div>
    <div class="col-md-12">
        <div class="ms-panel ms-panel-fh">

                <div class="ms-panel-body">
                    <div class="col-md-12">
          <div class="ms-panel">
            <div class="ms-panel-body">
              <div class="row">

                <div class="col-md-12">
                  <div class="ms-card no-margin">
                    <table class="table">
                      <tr>
                        <td>Name Of Student</td>
                        
                        <td>__________________________________________________________</td>
                      </tr>
                      <tr>
                        <td>Mother's Name</td>
                       
                        <td>__________________________________________________________</td>
                      </tr>
                      <tr>
                        <td>Father's/Guardian's Name</td>
                        
                        <td>__________________________________________________________</td>
                      </tr>
                      <tr>
                        <td>Nationality</td>
                        
                        <td>__________________________________________________________</td>
                      </tr>
                    </table>
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



