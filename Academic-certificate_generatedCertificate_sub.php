<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
  <div class="row">
    <div class="col-md-6">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb pl-0">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
          <li class="breadcrumb-item"><a href="Academic-certificate_sub.php">Certificates</a></li> 
          <li class="breadcrumb-item active" aria-current="page">Created Certificates</li>
        </ol>
      </nav>
    </div>
    <div class="col-md-6 text-md-right">
        <a href="Academic-certificate_individualCertificate_sub.php" class="btn btn-primary">Generate Certificate</a>
        <a href="Academic-certificate_bulkCertificate_sub.php" class="btn btn-primary">Export Bulk</a>
    </div>
    <div class="col-md-8 m-auto">
        <div class="col-md-12 my-5">
            <div class="table-responsive">
                <table class="table thead-primary">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">Employee Templates</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="table-bordered ">
                    <tr>
                        <th scope="row">Character Certificate</th> 
                        <td class="border-0"></td>
                        <td class="border-0"></td>
                        <td class="border-0"></td>
                        <td><a href="Academic-certificate_viewCertificate_sub.php">View Certificates</a></td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->     