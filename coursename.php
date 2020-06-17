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
                     <li class="breadcrumb-item"><a href="course.php">All Courses</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Play Group</li>
                </ol>
            </nav>
        </div>
    <div class="col-md-8 m-auto">
    <div class="ms-panel w-100">
      <div class="ms-panel-header">
                <div>
                    <div class="dropdown float-left">
                        <h3>Play Group</h3>
                    </div>
                    <div class="dropdown float-right">
                        <button class="btn btn-primary" onclick="window.location.href=''">Export as CSV</button>
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
                            <th scope="col" class="text-left">Start Date</th>
                            <th scope="col" class="text-left">End Date</th>
                            <th scope="col" class="text-left">Tutor</th>
                            <th scope="col" class="text-left">Students</th>
                            <th scope="col" class="text-left">Male</th>
                            <th scope="col" class="text-left">Female</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <tr>

                            <td>
                               1
                            </td>
                            <td class="text-left"><a href="batchname.php">Pink</a></td>
                            <td class="text-left">28/3/2020</td>
                            <td class="text-left">23/8/2021</td>
                            <td class="text-left">-</td>
                            <td class="text-left">33</td>
                            <td class="text-left">22</td>
                            <td class="text-left">5</td>
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



