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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

<script>
    $(function () {
        $("#empdiv").hide();
        $("#std").click(function () {
            if ($(this).is(":checked")) {
                $("#stddiv").show();
                $("#empdiv").hide();
            } else {
                $("#stddiv").hide();
                $("#empdiv").show();
            }
        });
        $("#emp").click(function () {
            if ($(this).is(":checked")) {
                $("#empdiv").show();
                $("#stddiv").hide();
            } else {
                $("#empdiv").hide();
                $("#stddiv").show();
            }
        });
    });


     
</script>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
         <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="index-2.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
                  <li class="breadcrumb-item"><a href="">Transport</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Assign Transport</li>
              </ol>
          </nav>
    </div>
    <div class="col-md-12">
        <div class="ms-panel w-100">
          <div class="ms-panel-header">
            <div>

                <div class="dropdown float-right">
                     <button class="btn btn-primary" data-toggle="modal" data-target="#modal-1"> Assign Transport </button>
                      <div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="modal-1">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">

                      <div class="modal-header">
                        <h3 class="modal-title has-icon ms-icon-round ">Assign Transport</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>

                      <div class="modal-body">
                        <form class="needs-validation" novalidate>
                    <div class="form-row">
                     <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-3"> <label for="validationCustom18"> Transport Mode</label></div>
                            <div class="col-8">
                                <div class="input-group">
                                    <select class="form-control">
                                        <option>Two Way Transport</option>
                                    </select>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-3"> <label for="validationCustom18"> Pickup Route</label></div>
                            <div class="col-8">
                                <div class="input-group">
                                    <select class="form-control">
                                        <option>Soan Garden</option>
                                    </select>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-3"> <label for="validationCustom18"> Drop Route</label></div>
                            <div class="col-8">
                                <div class="input-group">
                                    <select class="form-control">
                                        <option>Saddar</option>
                                    </select>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-3"> <label for="validationCustom18"> Pickup Stop</label></div>
                            <div class="col-8">
                                <div class="input-group">
                                    <select class="form-control">
                                        <option>Saddar</option>
                                    </select>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-3"> <label for="validationCustom18"> Drop Stop</label></div>
                            <div class="col-8">
                                <div class="input-group">
                                    <select class="form-control">
                                        <option>Saddar</option>
                                    </select>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-3"> <label for="validationCustom18"> Fare Rs</label></div>
                            <div class="col-8">
                                <div class="input-group">
                                   <input type="text" class="form-control" name="">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-4"> <label for="validationCustom18"> Auto Update Fare</label></div>
                            <div class="col-8">
                                <div class="modal-notice">
                                  <label class="ms-checkbox-wrap">
                                    <input type="checkbox"  value="">
                                    <i class="ms-checkbox-check"></i>
                                </label>
                               
                            </div>
                            </div>
                        </div>
                    </div>
                   
                    
                        
                    </div>
                      </div>

                      <div class="modal-footer">
                        
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary shadow-none"><i class="fa fa-save"></i> Assign</button>
                      </div>

                    </div>
                  </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-md-12">
        <div class="ms-panel w-100">
            <div class="ms-panel-header">
            <div class="row">
                <div class="col-2">
                    <label>Passengers</label>
                </div>
                <div class="col-8">
                                <div class="modal-notice">
                                  <label class="ms-checkbox-wrap">
                                    <input id="std" type="checkbox" value="">
                                    <i class="ms-checkbox-check"></i>
                                </label>
                                <span class="mr-4"> Student </span>
                                 <label class="ms-checkbox-wrap">
                                    <input id="emp" type="checkbox"  value="">
                                    <i class="ms-checkbox-check"></i>
                                </label>
                                <span> Employee </span>
                            </div>
                             <div class="modal-notice">
                                 
                            </div>
                </div>
            </div>
            </div>
            <div id="stddiv" class="ms-panel-header">
               <div class="row">
                   <div class="col-md-4">
                    <div>
                      <span for="validationCustom18"> Class</span>
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
                      <span for="validationCustom18"> Batch</span>
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
                    <i class="fa fa-search"></i> Search
                </button>
            </div>
        </div>
    </div>
    <div id="empdiv" class="ms-panel-header">
               <div class="row">
                   <div class="col-md-4">
                    <div>
                      <span for="validationCustom18"> Department</span>
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
                      <span for="validationCustom18"> Employee Number</span>
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
                    <i class="fa fa-search"></i> Search
                </button>
            </div>
        </div>
    </div>
    <div class="ms-panel-header">
        <div>

            <div class="dropdown float-right">
                <a class="ml-3" href="" data-toggle="modal" data-target="#modal-5">Advance Search</a>
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
                <table id="editableTable" class="table table-hover thead-primary">
                    <thead>
                        <tr>
                            
                            <th scope="col" class="text-left"> Student Name</th>
                            <th scope="col" class="text-left">Route - Stop Details</th>
                            <th scope="col" class="text-left">Fare (RS)</th>
                            <th scope="col" class="text-left"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-left">Abdul Basit</td>
                            <td class="text-left">
                                <ul>
                                    <li>Pick up : Soan Garden , Committie Chowk</li>
                                    <li>Drop : Soan Garden , Committie Chowk</li>
                                </ul>
                            </td>
                            <td class="text-left">4000.00</td>
                            <td class="text-left">
                                Remove
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


<?php include_once('footer.php')?>
<!-- footer -->



