<?php include_once('header.php')?>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">

    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Data_&_Reports_sub.php">Data & Reports</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Student Wise Transaction Report</li>
                </ol>
            </nav>
        </div>
    <div class="col-md-8 m-auto">
    <div class="ms-panel w-100">
       <div class="ms-panel-header">
               <div class="dropdown float-right">
                        <button class="btn btn-primary" onclick="window.location.href=''">Export as CSV</button>
                    </div>
      </div>
        <div class="ms-panel-header">
                 <div class="row">
                    <div class="col-md-4">
                        <span>Start Date</span>
                        <input type="date" name="" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <span>End Date</span>
                        <input type="date" name="" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <span>Batch Type</span>
                        <select class="form-control">
                          <option>Active</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                         <span>Select Batch</span>
                        <select class="form-control">
                          <option>Active</option>
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
                    <table class="table table-hover thead-primary">
                        <thead>
                         <tr>
                            <th scope="col">No.</th>
                            <th scope="col" class="text-left">Name</th>
                            <th scope="col" class="text-left">Admission no</th>
                            <th scope="col" class="text-left">Batch Name</th>
                            <th scope="col" class="text-left">Total Fee</th>
                            <th scope="col" class="text-left">Total Discount</th>
                            <th scope="col" class="text-left">Fee Paid</th>
                            <th scope="col" class="text-left">Fee Due</th>
                            <th scope="col" class="text-left">Expected Fine</th>
                            <th scope="col" class="text-left">Total Fine</th>
                            
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



