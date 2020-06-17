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
                    <li class="breadcrumb-item active" aria-current="page">Payroll Categories</li>
                </ol>
            </nav>
        </div>
    <div class="col-md-12">
    <div class="ms-panel w-100">
      <div class="ms-panel-header">
                <div>
                   
                    <div class="dropdown float-right">
                        <button class="btn btn-primary" onclick="window.location.href='createpayrollcategory.php'">Create Payroll Category</button>
                    </div>
                </div>
      </div>
    </div>
    </div>
    <div class="col-md-12 text-center content-center">
        <div class="ms-panel w-100">
            <div class="ms-panel-header text-left pb-1">
                <h5>Earning</h5>
                <p>List of Payroll Categories that define employee earnings</p>
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
                            <td class="text-left">Add a Payroll Category</td>
                            <td class="text-left"></td>
                            <td class="text-left"></td>
                            <td class="text-left"></td>
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
                <h5>Deductions</h5>
                <p>List of Payroll Categories that define employee deductions</p>
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
                            <td class="text-left">Add a Payroll Category</td>
                            <td class="text-left"></td>
                            <td class="text-left"></td>
                            <td class="text-left"></td>
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
                <h5>Earning</h5>
                <p>List of Payroll Categories that define employee earnings</p>
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
                            <td class="text-left"><a href="">View</a></td>
                        </tr>
                          <tr>
                            <td class="text-left">Basic Pay</td>
                            <td class="text-left">Basic</td>
                            <td class="text-left">23232</td>
                            <td class="text-left"><a href="">View</a></td>
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
                <h5>Deductions</h5>
                <p>List of Payroll Categories that define employee deductions</p>
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
                            <td class="text-left">Income Tax</td>
                            <td class="text-left">IT</td>
                            <td class="text-left">
                                <table class="">
                                    <tr>
                                        <td>Condition 1</td>
                                        <td>If Gross >=5000 Then 5%(GROSS-5000)</td>
                                    </tr>
                                    <tr>
                                        <td>Condition 1</td>
                                        <td>If Gross >=5000 Then 5%(GROSS-5000)</td>
                                    </tr>
                                    <tr>
                                        <td>Default Value</td>
                                        <td>0% Gross</td>
                                    </tr>
                                </table>
                            </td>
                            <td class="text-left"><a href="">View</a></td>
                        </tr>
                         <tr>
                            <td class="text-left">Income Tax</td>
                            <td class="text-left">IT</td>
                            <td class="text-left">
                                    10% Basic
                            </td>
                            <td class="text-left"><a href="">View</a></td>
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







