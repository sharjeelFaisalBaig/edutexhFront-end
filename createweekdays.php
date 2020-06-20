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
    .mt-30 {
    margin-top: -14px;
    }

</style>

<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
       <div class="col-md-12">
            <div class="ms-panel-header pt-0">
                <h6 class="d-md-inline"><i class="fas fa-calendar"></i> Class Week Days Sets</h6> |  <small>Manage Class Timing Sets</small>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic-TimeTable_sub.php">Timetable</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Set Class Days</li>
                </ol>
            </nav>
        </div>
    <div class="col-md-8 m-auto">
        <div class=" w-100">
            <div id="stddiv" class="ms-panel-header">
               <div class="row">
                   <div class="col-md-4">
                    <div>
                      <span for="validationCustom18"> Course</span>
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
        </div>
    </div>
    <div class="col-md-8 offset-4">
        <div class="ms-panel w-50">
            
            <div class="ms-panel-body">
                <div class="alert alert-warning text-center">
                    <strong>Changes saved.The changes apply to only newly created timetables , and not the existing timetables</strong>
                </div>
            </div>

        </div>
    </div>
<!-- table  -->
<div class="col-md-8 m-auto text-center content-center">
    <div class="ms-panel w-100">
        <div class="ms-panel-body">
            <div class="">
                <table id="editableTable" class="table table-hover thead-primary">
                    <thead>
                        <tr>
                            
                            <th scope="col" class="text-left">Weekday</th>
                            <th scope="col" class="text-left">Class timing set</th>
                            <th scope="col" class="text-left"></th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td class="text-left">
                            <div class="col-8">
                                <div class="modal-notice">
                                  <label class="ms-checkbox-wrap">
                                    <input id="std" type="checkbox" value="">
                                    <i class="ms-checkbox-check"></i>
                                </label>
                                <span class="mr-4"> Monday </span>
                            </div>
                            </div>
                            </td>
                            <td class="text-left">
                                <select class="form-control">
                                    <option>Select Here</option>
                                </select>
                            </td>
                            <td class="text-left">
                                <a href="">Cancel</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                            <div class="col-8">
                                <div class="modal-notice">
                                  <label class="ms-checkbox-wrap">
                                    <input id="std" type="checkbox" value="">
                                    <i class="ms-checkbox-check"></i>
                                </label>
                                <span class="mr-4"> Monday </span>
                            </div>
                            </div>
                            </td>
                            <td class="text-left">
                               School Time Table
                            </td>
                            <td class="text-left">
                                <a href="">Change</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                            <div class="col-8">
                                <div class="modal-notice">
                                  <label class="ms-checkbox-wrap">
                                    <input id="std" type="checkbox" value="">
                                    <i class="ms-checkbox-check"></i>
                                </label>
                                <span class="mr-4"> Tuesday </span>
                            </div>
                            </div>
                            </td>
                            <td class="text-left">
                               School Time Table
                            </td>
                            <td class="text-left">
                                <a href="">Change</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                            <div class="col-8">
                                <div class="modal-notice">
                                  <label class="ms-checkbox-wrap">
                                    <input id="std" type="checkbox" value="">
                                    <i class="ms-checkbox-check"></i>
                                </label>
                                <span class="mr-4"> Wednesday </span>
                            </div>
                            </div>
                            </td>
                            <td class="text-left">
                               School Time Table
                            </td>
                            <td class="text-left">
                                <a href="">Change</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                            <div class="col-8">
                                <div class="modal-notice">
                                  <label class="ms-checkbox-wrap">
                                    <input id="std" type="checkbox" value="">
                                    <i class="ms-checkbox-check"></i>
                                </label>
                                <span class="mr-4"> Thursday </span>
                            </div>
                            </div>
                            </td>
                            <td class="text-left">
                               School Time Table
                            </td>
                            <td class="text-left">
                                <a href="">Change</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                            <div class="col-8">
                                <div class="modal-notice">
                                  <label class="ms-checkbox-wrap">
                                    <input id="std" type="checkbox" value="">
                                    <i class="ms-checkbox-check"></i>
                                </label>
                                <span class="mr-4"> Friday </span>
                            </div>
                            </div>
                            </td>
                            <td class="text-left">
                               School Time Table
                            </td>
                            <td class="text-left">
                                <a href="">Change</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                            <div class="col-8">
                                <div class="modal-notice">
                                  <label class="ms-checkbox-wrap">
                                    <input id="std" type="checkbox" value="">
                                    <i class="ms-checkbox-check"></i>
                                </label>
                                <span class="mr-4"> Saturday </span>
                            </div>
                            </div>
                            </td>
                            <td class="text-left">
                              -
                            </td>
                            <td class="text-left">
                              -
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                            <div class="col-8">
                                <div class="modal-notice">
                                  <label class="ms-checkbox-wrap">
                                    <input id="std" type="checkbox" value="">
                                    <i class="ms-checkbox-check"></i>
                                </label>
                                <span class="mr-4"> Sunday </span>
                            </div>
                            </div>
                            </td>
                            <td class="text-left">
                               -
                            </td>
                            <td class="text-left">
                                -
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="col-md-8 m-auto text-center content-center">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-2">
                      <span for="validationCustom18"> Course</span>
                </div>
                <div class="col-6">
                        <input type="date" class="form-control" name="">
                </div>
                <div class="col-4 mt-30">
                     <button type="submit" class="btn btn-success">
                        <i class="fa fa-save"></i> Save
                    </button>
                </div>
            </div>  
            <div class="row">
                <div class="col-6 m-auto">
                   
                </div>
            </div>            
        </div>
    </div>
</div>
<!-- Table  -->
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



