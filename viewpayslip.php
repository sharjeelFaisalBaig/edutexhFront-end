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
                <li class="breadcrumb-item active" aria-current="page">View Pay Slip</li>
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
                                    <h4>Payroll Group - BPS-17</h4>
                                </div>
                                <div class="row">
                                    <div class="col-4"> <label for="validationCustom18"> Pay Period</label></div>
                                    <div class="col-8">
                                       <b>May 2020</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="row">
                                    <div class="col-4"> <label for="validationCustom18">Payment Frequency</label></div>
                                    <div class="col-8">
                                       <b>Salaried - Monthly</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="row">
                                    <div class="col-4"> <label for="validationCustom18">Payslip generated</label></div>
                                    <div class="col-8">
                                       <b>6 of 6 Employess</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="row">
                                    <div class="col-4">
                                        <label for="validationCustom20">Employess</label>
                                    </div>
                                    <div class="col-4">
                                       <select class="form-control">
                                           <option></option>
                                       </select>
                                    </div>
                                </div>
                                 <div class="row mt-2">
                                    <div class="col-4">
                                        <label for="validationCustom20">Payslip Status</label>
                                    </div>
                                    <div class="col-4">
                                       <select class="form-control">
                                           <option></option>
                                       </select>
                                    </div>
                                </div>
                                 <div class="row mt-2">
                                    <div class="col-4 offset-4">
                                       <input type="submit" class="btn btn-primary" value="View all payslips" name="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    <!-- table Payslip -->
    <div class="col-md-12 text-center content-center">
        <div class="ms-panel w-100">
            <div class="ms-panel-body">
                <div class="">
                    <table class="table table-hover thead-primary">
                        <thead>
                        <tr>
                            
                            <th scope="col" class="text-left">Employee Name</th>
                            <th scope="col" class="text-left">Employee Number</th>
                            <th scope="col" class="text-left">Department</th>
                            <th scope="col" class="text-left">Net Salary</th>
                            <th scope="col" class="text-left">Payslip Status</th>
                            <th scope="col" class="text-left"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            
                            <td class="text-left">Faizan Javed </td>
                            <td class="text-left">650</td>
                            <td class="text-left">English</td>
                            <td class="text-left">650000</td>
                            <td class="text-left">Pending</td>
                            <td class="text-left">
                                <a href="">View Payslip</a>
                                <a href="" class="ml-5">Delete Payslip</a>
                                <a href="" class="ml-5">PDF report</a>
                            </td>
                        </tr>
                         <tr>
                            
                            <td class="text-left">Faizan Javed </td>
                            <td class="text-left">650</td>
                            <td class="text-left">English</td>
                            <td class="text-left">650000</td>
                            <td class="text-left">Pending</td>
                            <td class="text-left">
                                <a href="">View Payslip</a>
                                <a href="" class="ml-5">Delete Payslip</a>
                                <a href="" class="ml-5">PDF report</a>
                            </td>
                        </tr>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Table Payslip -->
 <!-- Generate Payslip -->
    <div class="col-md-12 text-center content-center">
        <div class="ms-panel w-100">
            <div class="ms-panel-body">
                <div class="">
                    <table class="table table-hover thead-primary">
                        <thead>
                        <tr>
                            <th scope="col" class="text-left">Status</th>
                            <th scope="col" class="text-left">Employee Name</th>
                            <th scope="col" class="text-left">End</th>
                            <th scope="col" class="text-left">Others</th>
                            <th scope="col" class="text-left">Total Deduction</th>
                            <th scope="col" class="text-left">Net Salary</th>
                            <th scope="col" class="text-left"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-left">
                                <i class="fa fa-check text-success"></i>
                            </td>
                            <td class="text-left">Faizan Javed </td>
                            <td class="text-left">650432</td>
                            <td class="text-left">0.00</td>
                            <td class="text-left">650000</td>
                            <td class="text-left">2323</td>
                            <td class="text-left">
                                <a href="">View Payslip</a>
                                <a href="#" class="ml-5" data-toggle="modal" data-target="#modal-6">Revert Payslip</a>
                                <a href="" class="ml-5">PDF report</a>
                            </td>
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

<div class="modal fade" id="modal-6" tabindex="-1" role="dialog" aria-labelledby="modal-6">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">

                      <div class="modal-header bg-primary">
                        <h3 class="modal-title has-icon text-dark"> Revert Payslips</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>

                      <div class="modal-body">
                        <p>All Approved Employee payslips of payroll group BPS-17 for pay period May 2020 will be reverted</p>
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary shadow-none" data-dismiss="modal">Revert payslips</button>
                      </div>

                    </div>
                  </div>
                </div>
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



