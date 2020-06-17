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
                    <li class="breadcrumb-item"><a href="studentwisereport.php">Student Wise Report</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Student Name Here </li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-header">
                 <div>
                   <div class="dropdown float-right">
                    <button class="btn btn-primary" onclick="window.location.href=''">PDF Report</button>
                </div>
            </div>
            <div>
               <div class="dropdown float-right mr-2">
                <button class="btn btn-primary" onclick="window.location.href=''">CSV Report</button>
            </div>
        </div>
    </div>
    <div class="ms-panel-header">
        <div>
           <div class="row">
            <div class="col-md-5">
               <div class="float-left">
                   <h5>Student Name: <span>Mr XYZ</span></h5>
               </div>
           </div>
           <div class="col-md-5">
               <div class="float-left">
                   <h5>Batch Name: <span><b>Play Group</b></span></h5>
               </div>
           </div>
       </div>
        <div class="row">
            <div class="col-md-5">
               <div class="float-left">
                   <h5>Total Paid: <span>2323</span></h5>
               </div>
           </div>
           <div class="col-md-5">
               <div class="float-left">
                   <h5>Total Balance: <span><b>232323</b></span></h5>
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
                            <th scope="col" class="text-left" colspan="3">Play Group-Pink</th>
                            <th scope="col">2 Unpaid Fees </th>
                        </tr>
                        <tr>
                            <th scope="col" class="text-left">Fees Name</th>
                            <th scope="col" class="text-left">Status</th>
                            <th scope="col" class="text-left">Amount</th>
                            <th scope="col" class="text-left">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="4" class="text-left" ><b>General Fees</b></td>
                        </tr>
                        <tr>
                            <td class="text-left">For the Year 2020</td>
                            <td class="text-left"><span class="text-danger">Unpaid</span></td>
                            <td class="text-left">
                                433232/232323
                            </td>
                            <td class="text-left">
                                Due on 09/04/2020
                            </td>
                        </tr>
                         <tr>
                            <td class="text-left">For the Year 2020</td>
                            <td class="text-left"><span class="text-danger">Unpaid</span></td>
                            <td class="text-left">
                                433232/232323
                            </td>
                            <td class="text-left">
                                Due on 09/04/2020
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



