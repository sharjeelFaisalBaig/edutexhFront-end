<!-- header -->

<?php require 'header.php';?>

<!-- header -->

<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
  <div class="row">
    <div class="col-md-12">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb pl-0">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
          <li class="breadcrumb-item"><a href="Administration-User_sub.php">User</a></li>
          <li class="breadcrumb-item active" aria-current="page">Name</li>
        </ol>
      </nav>
    </div>


    <div class="col-md-12">
        <div class="ms-panel-header">
            <h6>User Profile | <small>User Information</small></h6>
        </div>
    </div>

    <div class="col-md-8 m-auto">

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="alert alert-warning text-center my-4">
                    <strong>User Account Created</strong>
                </div>
            </div>
            <div class="col-md-2"></div> 
        </div>

        <div class="col-md-12 my-4">
            <div class="">
                <table class="table table-bordered thead-primary">
                <tbody>
                    <tr>
                        <th>Username</th>
                        <td>admin2</td> 
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>Muhammad Adnan</td>
                    </tr>
                    <tr>
                        <th>Role</th>
                        <td>Admin</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>admin@gmail.com</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>

            <div class="col-md-6 m-auto">
                <a href="Administration-User_profile_changePassword_sub.php" class="btn btn-primary">Change Password</a>
                <a href="#" class="btn btn-primary ml-2">Delete</a>
            </div>


    </div>



<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->    