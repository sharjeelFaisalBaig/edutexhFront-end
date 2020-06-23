<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<style>
  .cstm-dropdown{
    height:36.3px;
  }
</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
  <div class="row">
    <div class="col-md-6">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb pl-0">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Details</li>
        </ol>
      </nav>
    </div>
    <div class="col-md-6 text-md-right">
      <select class="btn btn-primary cstm-dropdown">
        <option selected>Profile</option>
        <option value="1">abx</option>
        <option value="2">abc</option>
        <option value="3">abf</option>
      </select>
      <select class="btn btn-primary cstm-dropdown">
        <option selected>Salary</option>
        <option value="1">abx</option>
        <option value="2">abc</option>
        <option value="3">abf</option>
      </select>
      <select class="btn btn-primary cstm-dropdown">
        <option selected>Leaves</option>
        <option value="1">abx</option>
        <option value="2">abc</option>
        <option value="3">abf</option>
      </select>
      <a href="teachertimetable.php" class="btn btn-primary">Timetable</a>
      <select class="btn btn-primary cstm-dropdown">
        <option selected>More</option>
        <option value="1">abx</option>
        <option value="2">abc</option>
        <option value="3">abf</option>
      </select>
    </div>
    <div class="col-md-8 m-auto">
      <div class="row my-5">
        <div class="col-md-2 offset-md-3">
          <div class="text-center cstm_border">
            <i class="fas fa-user  fa-10x"></i>
          </div>
        </div>
        <div class="col-md-6 ml-3 my-2">
          <h6 class="">Abdul Basit</h6>
          <p class="text-success">Employedd ID: E16</p>
        </div>
      </div>  
      <hr>
    </div>
</div>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->