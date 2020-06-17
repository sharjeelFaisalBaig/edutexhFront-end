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
    .container.bg-gray {
    background: lightgray;
    padding: 23px;
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
                <li class="breadcrumb-item active" aria-current="page">Employee Pay Slip Report</li>
            </ol>
        </nav>
    </div>
    <div class="col-md-12">
        <div class="ms-panel w-100">
            <div class="ms-panel-header">
               <div class="row">
                   <div class="col-md-2">
                    <div>
                      <span for="validationCustom18"> Pay Period</span>
                  </div>
                  <div>
                    <select class="form-control">
                        <option></option>
                        <option> Select All </option>

                    </select>
                </div>

            </div>
            <div class="col-md-4">
                <span>Start Date</span>
                <input type="date" name="" class="form-control">
            </div>
            <div class="col-md-4">
                <span>End Date</span>
                <input type="date" name="" class="form-control">
            </div>
            <div class="col-md-2">

                <button type="submit" class="btn btn-success mt-3">
                    <i class="fa fa-eye"></i> View Report
                </button>
            </div>
        </div>
    </div>
    <div class="ms-panel-header">
        <div class="container bg-gray">
            <div class="row">
                <div class="col-4 offset-2">
                    <table class="">
                <tr>
                    <td colspan="2">Employee name:</td>
                    <td  class="ml-1 text-left">Faizan Javed</td>
                </tr>
                <tr>
                    <td colspan="2">Joining Date</td>
                    <td>09-05-2020</td>
                </tr>
                <tr>
                    <td colspan="2">Payroll Group:</td>
                    <td>BPS-18</td>
                </tr>
            </table>
                </div>
                <div class="col-4 offset-2">
                    <table class="">
                <tr>
                    <td>Department:</td>
                    <td class="ml-1 text-left">English</td>
                </tr>
                <tr>
                    <td>Position:</td>
                    <td>Junior Teacher</td>
                </tr>
                <tr>
                    <td>Grade:</td>
                    <td></td>
                </tr>
            </table>
                </div>
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
                            <th scope="col" class="text-left">Date range</th>
                            <th scope="col" class="text-left">Total earnings</th>
                            <th scope="col" class="text-left">Total Deduction</th>
                            <th scope="col" class="text-left">Basic Pay</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-left">1</td>
                            <td class="text-left">May 2020 </td>
                            <td class="text-left">23232</td>
                            <td class="text-left">23232</td>
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
            <div class="row">
                <div class="col-12">
                    <div class="container mt-3">
                        <h4>Payslip Details</h4>
                        <p>Select the Payslip details to be shown in the report. You can select from two options.Detailed report or Salary Summary</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                             <div class="modal-notice">
                  <label class="ms-checkbox-wrap">
                    <input type="radio" value="">
                    <i class="ms-checkbox-check"></i>
                </label>
                <span> Detailed Report </span>
            </div>
            <p>All Payroll Categories will be individual coloumn  in the report You can select the categories you want to see in the report</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                             <div class="modal-notice">
                  <label class="ms-checkbox-wrap">
                    <input type="radio" value="">
                    <i class="ms-checkbox-check"></i>
                </label>
                <span> Salary Summary </span>
            </div>
            <p>All Payroll Category values will be summed up and shown under a single coloumn  in the report</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                
                <table class="table">
                    <thead>
                        <tr>
                        <th><input type="checkbox" name=""></th>
                        <th>Coloumns</th>
                        <th></th> 
                        </tr>
                    </thead>
                    <tr>
                        <td><input type="checkbox" name=""></td>
                        <td>Date range</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name=""></td>
                        <td>Basic Pay</td>
                        <td>
                          <div class="modal-notice">
                              <label class="ms-checkbox-wrap">
                                <input type="radio" value="">
                                <i class="ms-checkbox-check"></i>
                            </label>
                            <span> Show Total </span>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name=""></td>
                        <td>House Rent Allowance</td>
                        <td>
                          <div class="modal-notice">
                              <label class="ms-checkbox-wrap">
                                <input type="radio" value="">
                                <i class="ms-checkbox-check"></i>
                            </label>
                            <span> Show Total </span>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name=""></td>
                        <td>House Rent Allowance</td>
                        <td>
                          <div class="modal-notice">
                              <label class="ms-checkbox-wrap">
                                <input type="radio" value="">
                                <i class="ms-checkbox-check"></i>
                            </label>
                            <span> Show Total </span>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name=""></td>
                        <td>Relief Allowance 2019-20</td>
                        <td>
                          <div class="modal-notice">
                              <label class="ms-checkbox-wrap">
                                <input type="radio" value="">
                                <i class="ms-checkbox-check"></i>
                            </label>
                            <span> Show Total </span>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name=""></td>
                        <td>Relief Allowance 2020-21</td>
                        <td>
                          <div class="modal-notice">
                              <label class="ms-checkbox-wrap">
                                <input type="radio" value="">
                                <i class="ms-checkbox-check"></i>
                            </label>
                            <span> Show Total </span>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name=""></td>
                        <td>Other Earning</td>
                        <td>
                         
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name=""></td>
                        <td>Total earnings</td>
                        <td>
                          <div class="modal-notice">
                              <label class="ms-checkbox-wrap">
                                <input type="radio" value="">
                                <i class="ms-checkbox-check"></i>
                            </label>
                            <span> Show Total </span>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name=""></td>
                        <td>Income Tax</td>
                        <td>
                          <div class="modal-notice">
                              <label class="ms-checkbox-wrap">
                                <input type="radio" value="">
                                <i class="ms-checkbox-check"></i>
                            </label>
                            <span> Show Total </span>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name=""></td>
                        <td>Provident fund</td>
                        <td>
                          <div class="modal-notice">
                              <label class="ms-checkbox-wrap">
                                <input type="radio" value="">
                                <i class="ms-checkbox-check"></i>
                            </label>
                            <span> Show Total </span>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name=""></td>
                        <td>Welfare Fund</td>
                        <td>
                          <div class="modal-notice">
                              <label class="ms-checkbox-wrap">
                                <input type="radio" value="">
                                <i class="ms-checkbox-check"></i>
                            </label>
                            <span> Show Total </span>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name=""></td>
                        <td>Loss of Pay</td>
                        <td>
                          <div class="modal-notice">
                              <label class="ms-checkbox-wrap">
                                <input type="radio" value="">
                                <i class="ms-checkbox-check"></i>
                            </label>
                            <span> Show Total </span>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name=""></td>
                        <td>Other Deduction</td>
                        <td>
                         
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name=""></td>
                        <td>Total Deduction</td>
                        <td>
                          <div class="modal-notice">
                              <label class="ms-checkbox-wrap">
                                <input type="radio" value="">
                                <i class="ms-checkbox-check"></i>
                            </label>
                            <span> Show Total </span>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name=""></td>
                        <td>Net Pay</td>
                        <td>
                          <div class="modal-notice">
                              <label class="ms-checkbox-wrap">
                                <input type="radio" value="">
                                <i class="ms-checkbox-check"></i>
                            </label>
                            <span> Show Total </span>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name=""></td>
                        <td>Number of LOPs </td>
                        <td>
                          <div class="modal-notice">
                              <label class="ms-checkbox-wrap">
                                <input type="radio" value="">
                                <i class="ms-checkbox-check"></i>
                            </label>
                            <span> Show Total </span>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name=""></td>
                        <td>Working Days</td>
                        <td>
                          <div class="modal-notice">
                              <label class="ms-checkbox-wrap">
                                <input type="radio" value="">
                                <i class="ms-checkbox-check"></i>
                            </label>
                            <span> Show Total </span>
                        </div>
                        </td>
                    </tr>

                </table>

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



