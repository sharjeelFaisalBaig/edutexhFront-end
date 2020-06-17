<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<style>
    .tr_cstm th{
        background-color:#760202;
        color:white;
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
          <li class="breadcrumb-item"><a href="Administration-User_sub.php">User</a></li>
          <li class="breadcrumb-item active" aria-current="page">E10</li>
        </ol>
      </nav>
    </div>

    <div class="col-md-12">
        <div class="ms-panel-header">
            <h6>User Profile | <small>User Information</small></h6>
        </div>
    </div>
    <div class="col-md-8 m-auto">

            <div class="col-md-12 my-4">
            
            <div class="">
                <table class="table table-bordered thead-primary">
                <tbody>
                    <tr class="tr_cstm">
                        <th>Username</th>
                        <td>E10</td> 
                    </tr>
                    <tr class="tr_cstm">
                        <th>Name</th>
                        <td>Mumtaz Asim</td>
                    </tr>
                    <tr class="tr_cstm">
                        <th>Role</th>
                        <td>Employee</td>
                    </tr>
                    <tr class="tr_cstm">
                        <th>Email</th>
                        <td></td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-8 m-auto">
            <a href="#" class="btn btn-primary">View Profile</a>
            <a href="Administration-User_profile_changePassword_sub.php" class="btn btn-primary ml-2">Change Password</a>
            <a href="Administration-User_profile_editPrivilage_sub.php" class="btn btn-primary ml-2">Edit Privilage</a>
        </div>

    </div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->
