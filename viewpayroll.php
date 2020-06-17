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

</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="index-2.php">Home</a></li>
                <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
                <li class="breadcrumb-item"><a href="">Human Resources</a></li>
                <li class="breadcrumb-item"><a href="">Payroll and Pay Slip Management</a></li>
                <li class="breadcrumb-item"><a href="">Payroll Group</a></li>
                <li class="breadcrumb-item"><a href="">View Payroll Group</a></li>
                <li class="breadcrumb-item active" aria-current="page">Employees Name</li>
            </ol>
        </nav>
    </div>
    <div class="col-md-12">
<div class="ms-panel w-100">
  <div class="ms-panel-header">
            <div>
               
                <div class="dropdown float-right">
                    <button class="btn btn-primary" onclick="window.location.href=''">Calculate</button>
                     <a href="" class="">Reset all</a>
                </div>
            </div>
  </div>
</div>
</div>
    <div class="col-md-6 m-auto">
        <div class="ms-panel ms-panel-fh">

                <div class="ms-panel-body">
                    <form class="needs-validation clearfix" novalidate>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <div class="mb-3">
                                    <h4>Employee Payroll</h4>
                                </div>
                                <div class="row">
                                    <div class="col-4"> <label for="validationCustom18"> Name</label></div>
                                    <div class="col-8">
                                       <b>Faizan Javed</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="row">
                                    <div class="col-4"> <label for="validationCustom18">Department</label></div>
                                    <div class="col-8">
                                       <b>English</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="row">
                                    <div class="col-4"> <label for="validationCustom18">Position</label></div>
                                    <div class="col-8">
                                       <b>Junior</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="mb-3">
                                     <h4>Payroll Details</h4>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label class="mt-3" for="validationCustom20">Gross Pay</label>
                                    </div>
                                     <div class="col-8">
                                       <b>234234234 Rs</b>
                                       <span class="mr-2">
                                           <a href="editpayroll.php" class="btn btn-primary">Edit Payroll</a>
                                       </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="mb-3">
                                     <h4>Earnings</h4>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label for="validationCustom20">Basic Pay</label>
                                    </div>
                                    <div class="col-8">
                                       <b>234234234 Rs</b>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-4">
                                        <label for="validationCustom20">House Rent Allowance</label>
                                    </div>
                                    <div class="col-8">
                                       <b>234234234 Rs</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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



