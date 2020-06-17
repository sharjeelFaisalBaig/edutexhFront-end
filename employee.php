<?php include_once('header.php')?>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">

    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Data_&_Reports_sub.php">Data & Reports</a></li>
                    <li class="breadcrumb-item"><a href="report.php">Reports</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All Employee</li>
                </ol>
            </nav>
        </div>
    <div class="col-md-8 m-auto">
    <div class="ms-panel w-100">
      <div class="ms-panel-header">
                <div>
                    <div class="dropdown float-left">
                        <h3>Employee</h3>
                    </div>
                    <div class="dropdown float-right">
                        <button class="btn btn-primary" onclick="window.location.href=''">Export as CSV</button>
                    </div>
                </div>
      </div>
       <div class="ms-panel-header">
                 <div>
                    <div class="float-left">
                        <h5>Total Employee :  <span>33</span></h5>
                        <h5>Department :  <span>33</span></h5>
                        <h5>Male Employee :  <span>33</span></h5>
                        <h5>female Employee :  <span>13</span></h5>
                    </div>
                </div>
      </div>
    </div>
    </div>
    
    <div class="col-md-12 text-center content-center">
        <div class="ms-panel w-100">
            <div class="ms-panel-body">
                <div class="">
                    <table class="table table-hover thead-primary">
                        <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col" class="text-left">Name</th>
                            <th scope="col" class="text-left">Employee ID</th>
                            <th scope="col" class="text-left">Joining Date</th>
                            <th scope="col" class="text-left">Department</th>
                            <th scope="col" class="text-left">Position</th>
                            <th scope="col" class="text-left">Manager</th>
                            <th scope="col" class="text-left">Gender</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td class="text-left">Abdul Bari</td>
                            <td class="text-left">admin</td>
                            <td class="text-left">23/8/2021</td>
                            <td class="text-left">System Admin</td>
                            <td class="text-left">Admin</td>
                            <td class="text-left"></td>
                            <td class="text-left">M</td>
                        </tr>
                         <tr>
                            <td>2</td>
                            <td class="text-left">Abdul Shakoor</td>
                           <td class="text-left">teacher</td>
                            <td class="text-left">23/8/2021</td>
                            <td class="text-left">System Faculty</td>
                            <td class="text-left">Faculty</td>
                            <td class="text-left"></td>
                            <td class="text-left">M</td>
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



