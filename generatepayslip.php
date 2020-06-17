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
                <li class="breadcrumb-item"><a href="payslipforpayrollgroup.php">Payslips for Payroll Group</a></li>
                <li class="breadcrumb-item active" aria-current="page">Generate Slip</li>
            </ol>
        </nav>
    </div>
   <!--  <div class="col-md-12">
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
</div> -->
    <div class="col-md-6 m-auto">
        <div class="ms-panel ms-panel-fh">

                <div class="ms-panel-body">
                    <form class="needs-validation clearfix" novalidate>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                
                                <div class="mb-3">
                                    <h4>Generate Payslips</h4>
                                </div>
                                <div class="row">
                                    <div class="col-4"> <label for="validationCustom18">Payroll group:</label></div>
                                    <div class="col-8">
                                       <b>BPS-17</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="row">
                                    <div class="col-4"> <label for="validationCustom18">Payment Frequency:</label></div>
                                    <div class="col-8">
                                       <b>Salaried-Monthly</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="row">
                                    <div class="col-4"> <label for="validationCustom18">Pay period:</label></div>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <input type="date" class="form-control" required>
                                            <div class="invalid-feedback">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12 mb-3">
                                <div class="row">
                                    <div class="col-8 offset-4">
                                        <div class="input-group">
                                            <input type="submit" value="Procced" class="btn btn-primary" required>
                                            <div class="invalid-feedback">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                
                                <div class="mb-3">
                                    <h4>Generate Payslips</h4>
                                </div>
                                <div class="row">
                                    <div class="col-4"> <label for="validationCustom18">Payroll group:</label></div>
                                    <div class="col-8">
                                       <b>BPS-17</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="row">
                                    <div class="col-4"> <label for="validationCustom18">Payment Frequency:</label></div>
                                    <div class="col-8">
                                       <b>Salaried-Monthly</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                 <div class="row">
                                    <div class="col-4"> <label for="validationCustom18">Pay Period:</label></div>
                                    <div class="col-8">
                                       <b>20 May</b>
                                       <a class="ml-3" href="" >Change Date</a>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    </form>
                </div>
            </div>
    </div>

    <!-- Results -->
 <div class="col-md-12 text-center content-center">
        <div class="ms-panel w-100">
            <div class="ms-panel-header text-left pb-1">
                <h5>Employee in this payroll group: 4</h5>
                <p>Total Net Pay : Rs 2323124134</p>
            </div>
            <div class="ms-panel-header text-left pb-1">
                <h6>Summary</h6>
            </div>
            <div class="ms-panel-body">
                <div class="">
                    <table class="table table-hover thead-primary">
                        <thead>
                        <tr>
                            <th scope="col" class="text-left">Payslip Status</th>
                            <th scope="col" class="text-left">No of Employees</th>
                            <th scope="col" class="text-left"></th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-left">Payslip not generated</td>
                            <td class="text-left">6</td>
                            <td class="text-left">
                                <a href="generatepayslip.php">View Employee</a>
                                <a href="" class="ml-5">Generate Payslips for all</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Results -->
<!-- Generate Payslip -->
 <div class="col-md-12 text-center content-center">
        <div class="ms-panel w-100">
            <div class="ms-panel-header text-left pb-1">
                <h5>6 of 6 Employees Selected <span><a href="" class="ml-5">Clear all</a></span> </h5>
                <p>Total Net Pay : Rs 2323124134</p>
            </div>
            <div class="ms-panel-body">
                <div class="">
                    <table class="table table-hover thead-primary">
                        <thead>
                        <tr>
                            <th scope="col" class="text-left"><input type="checkbox" name="" /></th>
                            <th scope="col" class="text-left">Employee Name</th>
                            <th scope="col" class="text-left">Department</th>
                            <th scope="col" class="text-left">Basic Pay</th>
                            <th scope="col" class="text-left">House Rent Allowance</th>
                            <th scope="col" class="text-left">Relief Allowance 2019-20</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-left"><input type="checkbox" name="" /></td>
                            <td class="text-left">Faizan Javed </td>
                            <td class="text-left">English</td>
                            <td class="text-left">650000</td>
                            <td class="text-left">650000</td>
                            <td class="text-left">650000</td>
                        </tr>
                         <tr>
                            <td class="text-left"><input type="checkbox" name="" /></td>
                            <td class="text-left">Faizan Javed </td>
                            <td class="text-left">English</td>
                            <td class="text-left">650000</td>
                            <td class="text-left">650000</td>
                            <td class="text-left">650000</td>
                        </tr>
                         <tr>
                            <td class="text-left"><input type="checkbox" name="" /></td>
                            <td class="text-left">Faizan Javed </td>
                            <td class="text-left">English</td>
                            <td class="text-left">650000</td>
                            <td class="text-left">650000</td>
                            <td class="text-left">650000</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Generate Payslip -->

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



