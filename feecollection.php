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
                    <li class="breadcrumb-item active" aria-current="page">Fee Collection </li>
                </ol>
            </nav>
        </div>
    <div class="col-md-8 m-auto">
    <div class="ms-panel w-100">
        <div class="ms-panel-header">
                 <div class="row">
                    <div class="col-md-4">
                        <span>Select Course</span>
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
      <hr>  
      <div class="ms-panel-header">
                <div>
                   <div class="row">
                    <div class="col-md-10">
                       <div class="float-left">
                           <h5>Total Fee Collection: <span>3</span></h5>
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
                    <table class="table table-hover thead-primary table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col" class="text-left">Fee Collection Name</th>
                            <th scope="col" class="text-left">Batch Name</th>
                            <th scope="col" class="text-left">Category Name</th>
                            <th scope="col" class="text-left">Start Date</th>
                            <th scope="col" class="text-left">Due Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td class="text-left">For the Year 2020</td>
                            <td class="text-left">PG-Pink</td>
                            <td class="text-left">Tution Fees</td>
                            <td class="text-left">09/05/2020</td>
                            <td class="text-left">09/05/2020</td>
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



