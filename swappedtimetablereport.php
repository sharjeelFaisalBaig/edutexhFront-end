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

    div#accordionExample3 .card
    {
    border: 0px !important;
    }

</style>

<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
       <div class="col-md-12">
            <div class="ms-panel-header pt-0">
                <h6 class="d-md-inline"><i class="fas fa-clock"></i> Time Table</h6> |  <small>Swapped Timetable Report</small>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic-TimeTable_sub.php">Timetable</a></li>
                     <li class="breadcrumb-item"><a href="Academic-TimeTable_timetableTrack_sub.php">Timetable Tracker</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Swappped Timetable Report</li>
                </ol>
            </nav>
        </div>
    <div class="col-md-8 m-auto">
        <div class=" w-100">
            <div id="stddiv" class="ms-panel-header">
               <div class="row">
                   <div class="col-md-4">
                    <div>
                      <span for="validationCustom18"> From</span>
                  </div>
                  <div>
                    <input type="date" class="form-control" name="">
                </div>

            </div>
            <div class="col-md-4">
                    <div>
                      <span for="validationCustom18"> To</span>
                  </div>
                  <div>
                    <input type="date" class="form-control" name="">
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
   
    <div class="col-md-8 m-auto">
        <div class="float-right">
            
            
               <button class="btn btn-primary">Export As CSV</button>
            

        </div>
    </div>
<!-- table  -->
<div class="col-md-10 m-auto text-center content-center">
    <div class="ms-panel w-100">
        <div class="ms-panel-body">
            <div class="">
                <table id="editableTable" class="table  thead-primary">
                    <thead>
                        <tr>
                            
                            <th scope="col" class="text-left">Employee</th>
                            <th scope="col" class="text-left">Department</th>
                            <th scope="col" class="text-left">Status</th>
                            <th scope="col" class="text-left"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-left">
                             Assadullah Shah - E16
                            </td>
                            <td class="text-left">
                               English
                            </td>
                            <td class="text-left">
                               1 -
                            </td>
                            <td class="text-left">
                               <div class="accordion" id="accordionExample3">
                                  <div class="card">
                                    <div class="card-header collapsed" data-toggle="collapse" role="button" data-target="#collapseSeven1" aria-expanded="false" aria-controls="collapseSeven1">
                                      <span class="has-icon">View Details</span>
                                    </div>

                                    <div id="collapseSeven1" class="collapse" data-parent="#accordionExample3" style="">
                                      <div class="card-body">
                                        <table class="table">
                                            <tr>
                                                <td colspan="2">
                                                    <p class="text-success">1+</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>01-03-2020</td>
                                                <td>Assadullah Shah (English - G1 - A -2020)</td>
                                            </tr>
                                            <tr>
                                                <td>01-03-2020 - 02-02-2020 AM</td>
                                                <td>Replaced by Nisar Ahmed Siddqui (English - G1-A)</td>
                                            </tr>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                             Nisar Ahmed Siddiqui - E11
                            </td>
                            <td class="text-left">
                               English
                            </td>
                            <td class="text-left">
                               1 -
                            </td>
                            <td class="text-left">
                               <div class="accordion" id="accordionExample3">
                                  <div class="card">
                                    <div class="card-header collapsed" data-toggle="collapse" role="button" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                      <span class="has-icon">View Details</span>
                                    </div>

                                    <div id="collapseSeven" class="collapse" data-parent="#accordionExample3" style="">
                                      <div class="card-body">
                                        <table class="table">
                                            <tr>
                                                <td colspan="2">
                                                    <p class="text-success">1+</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>01-03-2020</td>
                                                <td>Assadullah Shah (English - G1 - A -2020)</td>
                                            </tr>
                                            <tr>
                                                <td>01-03-2020 - 02-02-2020 AM</td>
                                                <td>Replaced by Nisar Ahmed Siddqui (English - G1-A)</td>
                                            </tr>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
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



