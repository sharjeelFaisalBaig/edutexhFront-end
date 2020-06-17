<?php include_once('header.php')?>
<style type="text/css">
    .table td, .table th {
    padding: .75rem;
    border-top: 1px solid #dee2e6;
    vertical-align: middle;
}
</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper container">

    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index-2.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
                    <li class="breadcrumb-item"><a href="">Human Resources</a></li>
                    <li class="breadcrumb-item"><a href="">Payroll and Pay Slip Management</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Payslips for Payroll Group</li>
                </ol>
            </nav>
        </div>
    <div class="col-md-12">
    <div class="ms-panel w-100">
      <div class="ms-panel-header">
                <div>
                   
                    <div class="dropdown float-right">
                        <button class="btn btn-primary" onclick="window.location.href='createpayrollgroup.php'">Rejected Payslips</button>
                    </div>
                </div>
      </div>
    </div>
    </div>
    <div class="col-md-12 text-center content-center">
        <div class="ms-panel w-100">
            <div class="ms-panel-header text-left pb-1">
                <h5>Payslips for Payroll Group</h5>
                <p>Generate and manage payslips for employees of a payroll group for specific pay periods</p>
            </div>
            <div class="ms-panel-header text-left pb-1">
                <h6>Salary Waged Payroll</h6>
            </div>
            <div class="ms-panel-body">
                <div class="">
                    <table class="table table-hover thead-primary">
                        <thead>
                        <tr>
                            <th scope="col" class="text-left">Payroll Group Name</th>
                            <th scope="col" class="text-left">Recent Payslip</th>
                            <th scope="col" class="text-left">Employees</th>
                            <th scope="col" class="text-left"></th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-left bold" colspan="4">Monthly</td>
                        </tr>
                        <tr>
                            <td class="text-left">BPS-17</td>
                            <td class="text-left"></td>
                            <td class="text-left">6</td>
                            <td class="text-left">
                                <a href="generatepayslip.php">Generate payslip</a>
                                <a href="" class="ml-5">View Payslips</a>
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
            <div class="ms-panel-header text-left pb-1">
               <h5>Payroll Groups</h5>
                <p>Create payroll groups employment who have a common payroll structure such as payment frequency payroll categories and LOP calculation methods</p>
            </div>
            <div class="ms-panel-body">
                <div class="">
                    <table class="table table-hover thead-primary">
                        <thead>
                        <tr>
                            <th scope="col" class="text-left">Category Name</th>
                            <th scope="col" class="text-left">Category Code</th>
                            <th scope="col" class="text-left">Value</th>
                            <th scope="col" class="text-left"></th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-left">Basic Pay</td>
                            <td class="text-left">Basic</td>
                            <td class="text-left">23232</td>
                            <td class="text-left"><a href="viewpayrollgroup.php">View</a> <a class="ml-5" href="">Employees</a></td>
                        </tr>
                          <tr>
                            <td class="text-left">Basic Pay</td>
                            <td class="text-left">Basic</td>
                            <td class="text-left">23232</td>
                            <td class="text-left"><a href="viewpayrollgroup.php">View</a>
                                    <a class="ml-5" href="">Employees</a></td>
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







