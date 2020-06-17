<?php include_once('header.php')?>
<style type="text/css">
  .ms-panel.has-border {
    border: 3px solid rgb(153, 3, 2);
    height: 16vh;
  }
  .text-primary {
    color: #810302!important;
  }
</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">

	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Data_&_Reports_sub.php">Data & Reports</a></li>
					<li class="breadcrumb-item active" aria-current="page"> Reports </li>
				</ol>
			</nav>
		</div>
    <div class="col-md-8 m-auto">
      <div class="row">
        <div class="col-xl-3 col-md-6">
          <a href="course.php">
            <div class="ms-panel ms-panel-hoverable has-border ms-widget ms-has-new-msg ms-notification-widget">
              <div class="ms-panel-body media">
                <i class="flaticon-sticky-note text-dark"></i>
                <div class="media-body">
                  <h6>Course</h6>
                  <span>1</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xl-3 col-md-6">
          <a href="batchc.php">
            <div class="ms-panel ms-panel-hoverable has-border ms-widget ms-has-new-msg ms-notification-widget">
              <div class="ms-panel-body media">
                <i class="material-icons text-dark">assignment</i>
                <div class="media-body">
                  <h6>Batch</h6>
                  <span>1</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xl-3 col-md-6">
          <a href="student.php">
            <div class="ms-panel ms-panel-hoverable has-border ms-widget ms-has-new-msg ms-notification-widget">
              <div class="ms-panel-body media">
                <i class="flaticon-network text-dark"></i>
                <div class="media-body">
                  <h6>Student</h6>
                  <span>33</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xl-3 col-md-6">
          <a href="employee.php">
            <div class="ms-panel ms-panel-hoverable has-border ms-widget ms-has-new-msg ms-notification-widget">
              <div class="ms-panel-body media">
                <i class="flaticon-user text-dark"></i>
                <div class="media-body">
                  <h6>Employee</h6>
                  <span>28</span>
                </div>
              </div>
            </div>
          </a>
        </div>     
      </div>
      <div class="row">
        <div class="col-xl-3 col-md-6">
          <div class="ms-card text-center height100">
            <div class="ms-card-body">
              <a class="text-primary" href="">
                <h6>Courses/Batch Details</h6>
                <p>Generates Course/Batch Details</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="ms-card text-center height100">
            <div class="ms-card-body">
             <a class="text-primary" href="formerstudent.php">
              <h6>Former Students Details</h6>
              <p>Generates Former Students Details</p>
            </a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="ms-card text-center height100">
          <div class="ms-card-body">
           <a class="text-primary" href="formeremployee.php">
            <h6>Former Employees Details</h6>
            <p>Generates Former Employees Details</p>
          </a>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="ms-card text-center height100">
        <div class="ms-card-body">
         <a class="text-primary" href="./subjectdetail.php">
          <h6>Subject Details</h6>
          <p>Generates Subject Details</p>
        </a>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>

<!-- footer -->

<?php include_once('footer.php')?>



