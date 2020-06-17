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
                    <li class="breadcrumb-item active" aria-current="page">Student Wise Report </li>
                </ol>
            </nav>
        </div>
    <div class="col-md-8 m-auto">
    <div class="ms-panel w-100">
        <div class="ms-panel-header">
                 <div class="row">
                    <div class="col-md-5">
                        <span>Search :</span>
                        <input type="text" placeholder="Search Here" class="form-control" name="">
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
                            <th scope="col">No.</th>
                            <th scope="col" class="text-left">First Name</th>
                            <th scope="col" class="text-left">Batch</th>
                            <th scope="col" class="text-left">Admn No</th>
                            <th scope="col" class="text-left">Roll Number</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td class="text-left"><a href="studentwisereportbyname.php">Ashiq</a></td>
                            <td class="text-left">PG-Pink</td>
                            <td class="text-left">
                                S232
                            </td>
                            <td class="text-left">
                                
                            </td>
                        </tr>
                         <tr>
                            <td>2</td>
                            <td class="text-left">Ashiq</td>
                            <td class="text-left">PG-Pink</td>
                            <td class="text-left">
                                S232
                            </td>
                            <td class="text-left">
                                
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



