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
                <li class="breadcrumb-item active" aria-current="page">Overall Estimate Report</li>
            </ol>
        </nav>
    </div>
    <div class="col-md-12">
        <div class="ms-panel w-100">
            <div class="ms-panel-header  offset-2">
               <div class="row">
                   <div class="col-md-4">
                    <div>
                      <span for="validationCustom18"> Report Type</span>
                  </div>
                  <div>
                    <select class="form-control">
                        <option></option>
                        <option> Select All </option>

                    </select>
                </div>

            </div>
            <div class="col-md-4">
                    <div>
                      <span for="validationCustom18"> Range</span>
                  </div>
                  <div>
                    <select class="form-control">
                        <option></option>
                        <option> Select All </option>

                    </select>
                </div>

            </div>
            <div class="col-md-4">

                <button type="submit" class="btn btn-success mt-3">
                    <i class="fa fa-eye"></i> View Report
                </button>
            </div>
        </div>
    </div>
    <div class="ms-panel-header">
        <div>

            <div class="dropdown float-right">
                <a href="" class="btn btn-primary mr-3">Download CSV</a>
                <a href="">Apply Filter</a>
                <a class="ml-3" href="" data-toggle="modal" data-target="#modal-5">Customize Coloums</a>
            </div>
           </div>
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
                            <th scope="col" class="text-left">SI No.</th>
                            <th scope="col" class="text-left">Employee Name</th>
                            <th scope="col" class="text-left">Employee Number</th>
                            <th scope="col" class="text-left">Department</th>
                            <th scope="col" class="text-left">Employee category</th>
                             <th scope="col" class="text-left">Gross Pay</th>
                            <th scope="col" class="text-left">Net Pay</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="8" class="text-left">Employee Department : English (Total cost : 232323.0)</td>
                        </tr>
                        <tr>
                            <td class="text-left">1</td>
                            <td class="text-left">Faizan Javed </td>
                            <td class="text-left">E650</td>
                            <td class="text-left">English</td>
                            <td class="text-left">Teaching Staff</td>
                            <td class="text-left">12121</td>
                            <td class="text-left">12121</td>
                        </tr>
                         <tr>
                            <td colspan="8" class="text-left">Employee Department : Finance (Total cost : 232323.0)</td>
                        </tr>
                        <tr>
                            <td class="text-left">1</td>
                            <td class="text-left">Faizan Javed </td>
                            <td class="text-left">E650</td>
                            <td class="text-left">English</td>
                            <td class="text-left">Teaching Staff</td>
                            <td class="text-left">12121</td>
                            <td class="text-left">12121</td>
                        </tr>
                        
                    </tbody>
                   
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Table Payslip -->
<!-- Generate Payslip -->
<!-- <div class="col-md-12 text-center content-center">
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
</div> -->

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

<div class="modal fade" id="modal-5" tabindex="-1" role="dialog" aria-labelledby="modal-5">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header bg-primary">
        <h3 class="modal-title has-icon text-dark">Customize Coloumns</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>

    <div class="modal-body">
        <div class="card">
            <div class="card-body">
            <div class="row">
                <div class="col-6">
                         <div class="modal-notice">
                  <label class="ms-checkbox-wrap">
                    <input type="checkbox" value="">
                    <i class="ms-checkbox-check"></i>
                </label>
                <span> Employee Name </span>
            </div>
             <div class="modal-notice">
                  <label class="ms-checkbox-wrap">
                    <input type="checkbox" value="">
                    <i class="ms-checkbox-check"></i>
                </label>
                <span> Employee Number </span>
            </div>
            <div class="modal-notice">
                  <label class="ms-checkbox-wrap">
                    <input type="checkbox" value="">
                    <i class="ms-checkbox-check"></i>
                </label>
                <span> Employee Department </span>
            </div>
             <div class="modal-notice">
                  <label class="ms-checkbox-wrap">
                    <input type="checkbox" value="">
                    <i class="ms-checkbox-check"></i>
                </label>
                <span> Employee category</span>
            </div>
             <div class="modal-notice">
                  <label class="ms-checkbox-wrap">
                    <input type="checkbox" value="">
                    <i class="ms-checkbox-check"></i>
                </label>
                <span> Employee Position</span>
            </div>
             <div class="modal-notice">
                  <label class="ms-checkbox-wrap">
                    <input type="checkbox" value="">
                    <i class="ms-checkbox-check"></i>
                </label>
                <span> Employee grade </span>
            </div>
            
             <div class="modal-notice">
                  <label class="ms-checkbox-wrap">
                    <input type="checkbox" value="">
                    <i class="ms-checkbox-check"></i>
                </label>
                <span> CNIC </span>
            </div>
             <div class="modal-notice">
                  <label class="ms-checkbox-wrap">
                    <input type="checkbox" value="">
                    <i class="ms-checkbox-check"></i>
                </label>
                <span> Height </span>
            </div>
             <div class="modal-notice">
                  <label class="ms-checkbox-wrap">
                    <input type="checkbox" value="">
                    <i class="ms-checkbox-check"></i>
                </label>
                <span> Weight </span>
            </div>

                </div>
            <div class="col-6">
                 <div class="modal-notice">
                  <label class="ms-checkbox-wrap">
                    <input type="checkbox" value="">
                    <i class="ms-checkbox-check"></i>
                </label>
                <span> Account Number </span>
            </div>
             <div class="modal-notice">
                  <label class="ms-checkbox-wrap">
                    <input type="checkbox" value="">
                    <i class="ms-checkbox-check"></i>
                </label>
                <span> Branch Name</span>
            </div>
            <div class="modal-notice">
                  <label class="ms-checkbox-wrap">
                    <input type="checkbox" value="">
                    <i class="ms-checkbox-check"></i>
                </label>
                <span> Bank Address</span>
            </div>
            </div>
            </div>
            

        </div>
    </div>
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary shadow-none" data-dismiss="modal">Save Coloumns</button>
</div>

</div>
</div>
</div>
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



