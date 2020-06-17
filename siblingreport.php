<?php include_once('header.php')?>
<!-- Body Content Wrapper -->
<style type="text/css">
    .table td, .table th {
    padding: .75rem;
    vertical-align: middle;
    border-top: 1px solid #dee2e6;
}
</style>
<div class="ms-content-wrapper">

    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Data_&_Reports_sub.php">Data & Reports</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sibling Report </li>
                </ol>
            </nav>
        </div>
    <div class="col-md-8 m-auto">
    <div class="ms-panel w-100">
        <div class="ms-panel-header">
                 <div class="row">
                    <div class="col-md-4">
                        <span>Select Type of Report</span>
                        <select class="form-control">
                          <option>School Wise</option>
                          <option>Course Wise</option>
                        </select>
                    </div>
                    <div class="col-md-2">

                        <button type="submit" class="btn btn-success mt-3">
                            <i class="fa fa-search"></i> Search
                        </button>
                    </div>
                </div>
      </div>
      <hr>  
      <div class="ms-panel-header">
                <div>
                       <div class="dropdown float-right">
                        <button class="btn btn-primary" onclick="window.location.href=''">Export as CSV</button>
                    </div>
                   </div>
                </div>
      </div>
    </div>
    </div>
    
    <div class="col-md-12 text-center content-center">
        <div class="ms-panel w-100">
            <div class="ms-panel-body">
                <div class="">
                    <table class="table table-hover thead-primary table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col" class="text-left">Name</th>
                            <th scope="col" class="text-left">Admission No</th>
                            <th scope="col" class="text-left">Batch</th>
                            <th scope="col" class="text-left">Sibling Name</th>
                            <th scope="col" class="text-left">Sibling Admission No</th>
                           
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td class="text-left">Ashiq</td>
                            <td class="text-left">E191</td>
                            <td class="text-left">English</td>
                            <td class="text-left">Monthly Payroll</td>
                             <td class="text-left"></td>
                            
                        </tr>
                         <tr>
                            <td>2</td>
                            <td class="text-left">Firdous</td>
                             <td class="text-left">E191</td>
                            <td class="text-left">English</td>
                            <td class="text-left">Monthly Payroll</td>
                            <td class="text-left">
                                <table class="table">
                                    <tr>
                                        <td class="text-left">Gross Pay</td>
                                        <td class="text-right">212121.1</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><b>Earning</b></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Basic Pay</td>
                                        <td class="text-right">212121.1</td>
                                    </tr>
                                     <tr>
                                        <td class="text-left">Travelling Allowance</td>
                                        <td class="text-right">212121.1</td>
                                    </tr>
                                     <tr>
                                        <td class="text-left">House Rent Allowance</td>
                                        <td class="text-right">212121.1</td>
                                    </tr>
                                     <tr>
                                        <td class="text-left">Total Earning</td>
                                        <td class="text-right">212121.1</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><b>Deductions</b></td>
                                    </tr>
                                     <tr>
                                        <td class="text-left">Tax</td>
                                        <td class="text-right">212121.1</td>
                                    </tr>
                                     <tr>
                                        <td class="text-left">Provident Fund</td>
                                        <td class="text-right">212121.1</td>
                                    </tr>
                                     <tr>
                                        <td class="text-left"><b>Total Deductions</b></td>
                                        <td class="text-right">212121.1</td>
                                    </tr>
                                     <tr>
                                        <td class="text-left"><b>Net Pay</b></td>
                                        <td class="text-right">212121.1</td>
                                    </tr>

                                </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </div>
</div>

<!-- footer -->

<?php include_once('footer.php')?>



