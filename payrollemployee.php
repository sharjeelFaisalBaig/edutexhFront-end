<?php include_once('header.php')?>
<!-- Body Content Wrapper -->
<style type="text/css">
    .table td, .table th {
    padding: .75rem;
    vertical-align: middle;
    border-top: 1px solid #dee2e6;
}
</style>
<div class="ms-content-wrapper container">

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
                    <li class="breadcrumb-item active" aria-current="page">Employees</li>
                </ol>
            </nav>
        </div>
    <div class="col-md-12">
    <div class="ms-panel w-100">
        <div class="ms-panel-header">
                 <div class="row">
                    <div class="col-md-4">
                        <span>Select Department</span>
                        <select class="form-control">
                          <option></option>
                        </select>
                    </div>
                    <div class="col-md-2">

                        <button type="submit" class="btn btn-success mt-3">
                            <i class="fa fa-search"></i> Search
                        </button>
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
                            <th scope="col" class="text-left">Employee Name</th>
                            <th scope="col" class="text-left">Department</th>
                            <th scope="col" class="text-left">Employee Category</th>
                            <th scope="col" class="text-left">Recent Payslip</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            
                            <td class="text-left"><a href="">Faizan Javed</a></td>
                            <td class="text-left">English</td>
                            <td class="text-left">Monthly Payroll</td>
                            <td class="text-left">
                                <a href="addtogroup.php">Add to this group</a>
                            </td>
                            
                        </tr>
                       
                        </tbody>
                    </table>
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
                            <th scope="col" class="text-left">Employee Name</th>
                            <th scope="col" class="text-left">Department</th>
                            <th scope="col" class="text-left">Employee Category</th>
                            <th scope="col" class="text-left">Recent Payslip</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            
                            <td class="text-left"><a href="">Faizan Javed</a></td>
                            <td class="text-left">English</td>
                            <td class="text-left">Monthly Payroll</td>
                            <td class="text-left">
                                <a href="viewpayroll.php"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> View Payroll</a>
                                <a class="ml-5" href="addtogroup.php">Remove From Group</a>
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



