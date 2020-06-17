<?php include_once('header.php')?>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper container">

    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Data_&_Reports_sub.php">Data & Reports</a></li>
                    <li class="breadcrumb-item"><a href="report.php">Reports</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Former Student</li>
                </ol>
            </nav>
        </div>
    <div class="col-md-8 m-auto">
    <div class="ms-panel w-100">
        <div class="ms-panel-header">
                 <div class="row">
                    <div class="col-md-4">
                        <span>From</span>
                        <input type="date" name="" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <span>To</span>
                        <input type="date" name="" class="form-control">
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
                   <div class="row">
                    <div class="col-md-10">
                       <div class="float-left">
                           <h5>Total Students: <span>33</span></h5>
                       </div>
                       <div class="float-left ml-4">
                           <h5>Male Students: <span>313</span></h5>
                       </div>
                       <div class="float-left ml-4">
                           <h5>Female Students: <span>233</span></h5>
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
                            <th scope="col" class="text-left">Roll Number</th>
                            <th scope="col" class="text-left">Admission no</th>
                            <th scope="col" class="text-left">Admission Date</th>
                            <th scope="col" class="text-left">Leaving Date</th>
                            <th scope="col" class="text-left">Batch Name</th>
                            <th scope="col" class="text-left">Course Name</th>
                            <th scope="col" class="text-left">Gender</th>
                            <th scope="col" class="text-left">Reason for Leaving</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td class="text-left">Abdul Bari</td>
                            <td class="text-left"></td>
                            <td class="text-left">S12</td>
                            <td class="text-left">23/8/2021</td>
                            <td class="text-left">23/8/2021</td>
                            <td class="text-left">PG-Blue</td>
                            <td class="text-left">Play-Group PG</td>
                            <td class="text-left">M</td>
                            <td class="text-left"></td>
                        </tr>
                         <tr>
                            <td>2</td>
                            <td class="text-left">Abdul Shakoor</td>
                             <td class="text-left"></td>
                            <td class="text-left">S12</td>
                            <td class="text-left">23/8/2021</td>
                            <td class="text-left">23/8/2021</td>
                            <td class="text-left">PG-Blue</td>
                            <td class="text-left">Play-Group PG</td>
                            <td class="text-left">M</td>
                            <td class="text-left"></td>
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



