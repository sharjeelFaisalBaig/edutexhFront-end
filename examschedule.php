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
                    <li class="breadcrumb-item active" aria-current="page">Exam Schedule </li>
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
                           <h5>Total Exam Group: <span>3</span></h5>
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
                            <th scope="col" class="text-left">Exam</th>
                            <th scope="col" class="text-left">Batch Name</th>
                            <th scope="col" class="text-left">Exam type</th>
                            <th scope="col" class="text-left">Exam Name</th>
                            <th scope="col" class="text-left">Maximum Marks</th>
                            <th scope="col" class="text-left">Minimum Marks</th>
                            <th scope="col" class="text-left">Start time</th>
                            <th scope="col" class="text-left">End time</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td class="text-left">Assesment-1</td>
                            <td class="text-left">PG-Pink</td>
                            <td class="text-left">Marks and Grades</td>
                            <td class="text-left">
                                <table class="w-100">
                                    <tr>
                                        <td class="text-left">English</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Urdu</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Math</td>
                                    </tr>

                                </table>
                            </td>
                            <td class="text-left">
                                <table class="w-100 text-center">
                                    <tr>
                                        <td colspan="3" class="text-center">100.0</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-center">100.0</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-center">100.0</td>
                                    </tr>

                                </table>
                            </td>
                            <td class="text-left">
                                <table class="w-100 text-center">
                                    <tr>
                                        <td class="text-center">40.0</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">50.0</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">40.0</td>
                                    </tr>

                                </table>
                            </td>
                             <td class="text-left">
                                <table class="table-bordered">
                                    <tr>
                                        <td class="text-left">11/20/1010</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">11/20/1010</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">11/20/1010</td>
                                    </tr>

                                </table>
                            </td>
                             <td class="text-left">
                                <table class="table-bordered">
                                    <tr>
                                        <td class="text-left">11/20/1010</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">11/20/1010</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">11/20/1010</td>
                                    </tr>

                                </table>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="text-left">Assesment-1</td>
                            <td class="text-left">PG-Pink</td>
                            <td class="text-left">Marks and Grades</td>
                            <td class="text-left">
                                <table class="table-bordered">
                                    <tr>
                                        <td class="text-left">English</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Urdu</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Math</td>
                                    </tr>

                                </table>
                            </td>
                            <td class="text-left">
                                <table class="w-100 text-center">
                                    <tr>
                                        <td colspan="3" class="text-center">100.0</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-center">100.0</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-center">100.0</td>
                                    </tr>

                                </table>
                            </td>
                            <td class="text-left">
                                <table class="w-100 text-center">
                                    <tr>
                                        <td class="text-center">40.0</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">50.0</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">40.0</td>
                                    </tr>

                                </table>
                            </td>
                             <td class="text-left">
                                <table class="table-bordered">
                                    <tr>
                                        <td class="text-left">11/20/1010</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">11/20/1010</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">11/20/1010</td>
                                    </tr>

                                </table>
                            </td>
                             <td class="text-left">
                                <table class="table-bordered">
                                    <tr>
                                        <td class="text-left">11/20/1010</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">11/20/1010</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">11/20/1010</td>
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



