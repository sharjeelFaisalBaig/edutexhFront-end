    <?php include_once('header.php')?>
    <style type="text/css">
    .table td, .table th {
        padding: .75rem;
        border-top: 1px solid #dee2e6;
        vertical-align: middle;
    }
    .lft{
        text-align: left;
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
                  <li class="breadcrumb-item"><a href="">Transportation</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Vehicle Maintaince</li>
              </ol>
          </nav>
      </div>
      <div class="col-md-12">
        <div class="ms-panel w-100">
          <div class="ms-panel-header">
            <div>

                <div class="dropdown float-right">
                    <button class="btn btn-primary" onclick="window.location.href='addtransportmaintaince.php'">Add Details</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-md-12 text-center content-center">
    <div class="ms-panel w-100">
      <div class="text-left">
          <p>Record details of maintaince work done on vehicles like amount spent,next maintaenance date , receipts of work etc</p>
      </div>
    <div class="ms-panel-body">
        <div class="">
            <table class="table table-hover thead-primary">
                <thead>
                    <tr>
                        <th scope="col" class="text-left">Name</th>
                        <th scope="col" class="text-left"> Maintaince Date  </th>
                        <th scope="col" class="text-left">Next Maintaince Date</th>
                        <th scope="col" class="text-left">Amount (Rs)</th>
                        <th scope="col" class="text-left"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left"><a href="maintaincedetail.php">Tunning</a></td>
                        <td class="text-left">12 May 2020</td>
                        <td class="text-left">12 May 2021</td>
                        <td class="text-left">
                          12121
                        </td>
                        <td class="text-center">
                          <a href="edittranportmaintaince.php" class="btn-sm btn-success">
                              <i class="fa fa-edit"></i>
                          </a>
                          <a href="" class="btn-sm ml-2 btn-danger">
                              <i class="fa fa-trash"></i>
                          </a>
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







