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
                    <li class="breadcrumb-item active" aria-current="page">Employee Association</li>
                </ol>
            </nav>
        </div>
    <div class="col-md-8 m-auto">
    <div class="ms-panel w-100">
      <div class="ms-panel-header">
                <div>
                   <div class="row">
                    <div class="col-md-10">
                       <div class="float-left">
                           <h5>Total Employee: <span>3</span></h5>
                       </div>
                   </div>
                   <div class="col-md-2">
                       <div class="dropdown float-right">
                        <button class="btn btn-primary" onclick="window.location.href=''">Export as CSV</button>
                    </div>
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
                    <table class="table table-hover thead-primary">
                        <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col" class="text-left">Name</th>
                            <th scope="col" class="text-left">Employee ID</th>
                            <th scope="col" class="text-left">Department</th>
                            <th scope="col" class="text-left">Subject {Batch Name}</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td class="text-left">Faizan Javed</td>
                            <td class="text-left">E7</td>
                            <td class="text-left">English</td>
                            <td class="text-left">English(PG-Pink)</td>
                           
                        </tr>
                         <tr>
                            <td>2</td>
                            <td class="text-left">Javed Sheikh</td>
                            <td class="text-left">E7</td>
                            <td class="text-left">English</td>
                            <td class="text-left">English(PG-Pink)</td>
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



