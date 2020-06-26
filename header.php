
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>EduTexh - Dashboard</title>
  <!-- Iconic Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="assets/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/iconic-fonts/flat-icons/flaticon.css">
  <link rel="stylesheet" href="assets/iconic-fonts/cryptocoins/cryptocoins.css">
  <link rel="stylesheet" href="assets/iconic-fonts/cryptocoins/cryptocoins-colors.css">
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
  <!-- Page Specific CSS (Slick Slider.css) -->
  <link href="assets/css/slick.css" rel="stylesheet">
  <link href="assets/css/datatables.min.css" rel="stylesheet">
  <!-- Costic styles -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- Custom -->
  <link href="assets/css/custom.css" rel="stylesheet">
  <link href="assets/css/mohsin_custom.css" rel="stylesheet">
  <link href="assets/css/bilal_custom.css" rel="stylesheet">
  
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script> <!-- Consolidated Chart -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet"> -->

</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
  <!-- Preloader -->
  <!-- <div id="preloader-wrap">
    <div class="spinner spinner-8">
      <div class="ms-circle1 ms-child"></div>
      <div class="ms-circle2 ms-child"></div>
      <div class="ms-circle3 ms-child"></div>
      <div class="ms-circle4 ms-child"></div>
      <div class="ms-circle5 ms-child"></div>
      <div class="ms-circle6 ms-child"></div>
      <div class="ms-circle7 ms-child"></div>
      <div class="ms-circle8 ms-child"></div>
      <div class="ms-circle9 ms-child"></div>
      <div class="ms-circle10 ms-child"></div>
      <div class="ms-circle11 ms-child"></div>
      <div class="ms-circle12 ms-child"></div>
    </div>
  </div> -->


    <!-- Main Content -->
    <main class="body-content">
      <!-- Navigation Bar -->
      <nav class="navbar ms-navbar">

        <div class="row">
          <div class="col-md-3">
            <a href="#menu" class="ms-aside-toggler ms-toggler pl-0" id="toggle"> 
              <span class="ms-toggler-bar bg-primary"></span>
              <span class="ms-toggler-bar bg-primary"></span>
              <span class="ms-toggler-bar bg-primary"></span>
            </a>
            <div id="menu">
              <ul class="menu_ul">
                <li class="menu_li">
                  <a href="Academic_sub.php">Academic</a>
                  <a href="Collaboration_sub.php">Collaboration</a>
                  <a href="Data_&_Reports_sub.php">Data &amp; Reports</a>
                  <a href="Administration_sub.php">Administration</a>
                  <a href="Apps_sub.php">Apps</a>
                </li>
              </ul>
            </div> <!-- menu -->
          </div>
          <div class="col-md-9">
            <div class="logo-sn logo-sm ms-d-block mainTitle">
              <a class="navbar-brand" href="index.php">
                <!--<img src="assets/img/costic/costic-logo-84x41.png" alt="logo">-->
                <p>EduTexh</p>
              </a>
            </div>
          </div>

        </div>


        <div class="logo-sn logo-sm ms-d-block-sm">
          <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="index.php">
            <!-- <img src="assets/img/costic/costic-logo-84x41.png" alt="logo"> -->
          </a>
        </div>
        <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
          <li class="ms-nav-item ms-search-form pb-0 py-0">
            <form class="ms-form" method="post">
              <div class="ms-form-group my-0 mb-0 has-icon fs-14">
                <input type="search" class="ms-form-input" name="search" placeholder="Search here..." value=""> <!-- <i class="flaticon-search text-disabled"></i> -->
              </div>
            </form>
          </li>
          <li class="ms-nav-item dropdown"> <a href="#" class="text-white ms-has-notification" id="mailDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-mail"></i></a>
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="mailDropdown">
              <li class="dropdown-menu-header">
                <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Mail</span></h6><span class="badge badge-pill badge-success">3 New</span>
              </li>
              <li class="dropdown-divider"></li>
              <li class="ms-scrollable ms-dropdown-list">
                <a class="media p-2" href="#">
                  <div class="ms-chat-status ms-status-offline ms-chat-img mr-2 align-self-center">
                    <img src="assets/img/costic/customer-3.jpg" class="ms-img-round" alt="people">
                  </div>
                  <div class="media-body"> <span>Hey man, looking forward to your new project.</span>
                    <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>
                  </div>
                </a>
                <a class="media p-2" href="#">
                  <div class="ms-chat-status ms-status-online ms-chat-img mr-2 align-self-center">
                    <img src="assets/img/costic/customer-2.jpg" class="ms-img-round" alt="people">
                  </div>
                  <div class="media-body"> <span>Dear John, I was told you bought Costic! Send me your feedback</span>
                    <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 28 minutes ago</p>
                  </div>
                </a>
                <a class="media p-2" href="#">
                  <div class="ms-chat-status ms-status-offline ms-chat-img mr-2 align-self-center">
                    <img src="assets/img/costic/customer-1.jpg" class="ms-img-round" alt="people">
                  </div>
                  <div class="media-body"> <span>How many people are we inviting to the dashboard?</span>
                    <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 6 hours ago</p>
                  </div>
                </a>
              </li>
              <li class="dropdown-divider"></li>
              <li class="dropdown-menu-footer text-center"> <a href="pages/apps/email.php">Go to Inbox</a>
              </li>
            </ul>
          </li>
          <li class="ms-nav-item dropdown"> <a href="#" class="text-white ms-has-notification" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-bell"></i></a>
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationDropdown">
              <li class="dropdown-menu-header">
                <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Notifications</span></h6><span class="badge badge-pill badge-info">4 New</span>
              </li>
              <li class="dropdown-divider"></li>
              <li class="ms-scrollable ms-dropdown-list">
                <a class="media p-2" href="#">
                  <div class="media-body"> <span>12 ways to improve your crypto dashboard</span>
                    <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>
                  </div>
                </a>
                <a class="media p-2" href="#">
                  <div class="media-body"> <span>You have newly registered users</span>
                    <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 45 minutes ago</p>
                  </div>
                </a>
                <a class="media p-2" href="#">
                  <div class="media-body"> <span>Your account was logged in from an unauthorized IP</span>
                    <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 2 hours ago</p>
                  </div>
                </a>
                <a class="media p-2" href="#">
                  <div class="media-body"> <span>An application form has been submitted</span>
                    <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 1 day ago</p>
                  </div>
                </a>
              </li>
              <li class="dropdown-divider"></li>
              <li class="dropdown-menu-footer text-center"> <a href="#">View all Notifications</a>
              </li>
            </ul>
          </li>

          <li class="ms-nav-item ms-nav-user dropdown">
            <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="ms-user-img ms-img-round float-right" src="assets/img/costic/customer-6.jpg" alt="people">
            </a>
            <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
              <li class="dropdown-menu-header">
                <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Haris Jamil</span></h6>
              </li>
              <li class="dropdown-divider"></li>
              <li class="ms-dropdown-list">
                <a class="media fs-14 p-2" href="#"> <span class="text-muted"><i class="mr-2"></i>Switch User :</span>
                </a>
                <a class="media fs-14 p-2" href="#"> <span class="bold"><i class="flaticon-user mr-2"></i>Arsalan Khan</span>
                </a>
                <a class="media fs-14 p-2" href="#"> <span><i class="flaticon-user mr-2"></i>Sabiha Khan</span>
                </a>
                <a class="media fs-14 p-2" href="#"> <span><i class="flaticon-user mr-2"></i>Kamran Khan</span>
                </a>
                <!-- <a class="media fs-14 p-2" href="pages/prebuilt-pages/user-profile.php"> <span><i class="flaticon-user mr-2"></i> Profile</span>
                </a>
                <a class="media fs-14 p-2" href="pages/apps/email.php"> <span><i class="flaticon-mail mr-2"></i> Inbox</span> <span class="badge badge-pill badge-info">3</span>
                </a>
                <a class="media fs-14 p-2" href="pages/prebuilt-pages/user-profile.php"> <span><i class="flaticon-gear mr-2"></i> Account Settings</span>
                </a> -->
              </li>
              <li class="dropdown-divider"></li>
              <li class="dropdown-menu-footer">
                <a class="media fs-14 p-2" href="pages/prebuilt-pages/lock-screen.php"> <span><i class="flaticon-security mr-2"></i> Lock</span>
                </a>
              </li>
              <li class="dropdown-menu-footer">
                <a class="media fs-14 p-2" href="pages/prebuilt-pages/default-login.php"> <span><i class="flaticon-shut-down mr-2"></i> Logout</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options"> <span class="ms-toggler-bar bg-primary"></span>
          <span class="ms-toggler-bar bg-primary"></span>
          <span class="ms-toggler-bar bg-primary"></span>
        </div>
      </nav>