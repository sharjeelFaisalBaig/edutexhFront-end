<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<style>
.cstm_heading{
font-size:.6cm;
opacity:.8;
}
</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
  <div class="row">
    <div class="col-md-12">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb pl-0">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
          <li class="breadcrumb-item"><a href="Administration-HumanResource_sub.php">Human Resource</a></li>
          <li class="breadcrumb-item"><a href="Administration-HumanResource_employees_sub.php">Employees</a></li>
          <li class="breadcrumb-item active" aria-current="page">View All</li>
        </ol>
      </nav>
    </div>

    <div class="container my-3">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-3">
                <div class="ms-panel-header">
                    <h6>Employee Search :</h6>
                </div>
            </div>
            <div class="col-lg-4">
            <select class="form-control my-3" id="inputGroupSelect01">
                <option selected>English</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>

    <div class="col-md-9 m-auto">
        <div class="ms-panel-body">
            <div class="">
                <table class="table table-bordered table-hover thead-primary">
                <thead>
                    <tr>
                        <th scope="col"> Employee Name</th>
                        <th scope="col"> Employee Number</th>
                        <th scope="col"> Employee Department</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Faizan Jawed</th>
                        <td>E8 </td>
                        <td>English</td>
                    </tr>
                    <tr>
                        <th scope="row">Muhammad Arif</th>
                        <td>E4 </td>
                        <td>English</td>
                    </tr>
                    <tr>
                        <th scope="row">Ali Haider</th>
                        <td>E5 </td>
                        <td>English</td>
                    </tr>
                    <tr>
                        <th scope="row">Abdul Hamid</th>
                        <td>E6</td>
                        <td>English</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>


<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->