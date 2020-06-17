<!-- header -->
<?php require 'header.php';?>
<!-- header -->

<!-- Body Content Wrapper -->
<div class="ms-content-wrapper container">

	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index-2.php">Home</a></li>
          <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
          <li class="breadcrumb-item"><a href="Academic-Remarks_sub.php">Remarks</a></li>
          <li class="breadcrumb-item active" aria-current="page">Add Custom Remarks</li>
        </ol>
      </nav>
    </div>

    <div class="ms-panel w-100">
      <div class="ms-panel-body">

        <div class="container">
          <div class="row">
            <div class='col-sm-4'>
              <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                  <input type='text' class="form-control" />
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </div>
              </div>
            </div>
            <div class='col-sm-4'>
              <div class="form-group">
                <div class='input-group date' id='datetimepicker2'>
                  <input type='text' class="form-control" />
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </div>
              </div>
            </div>
            <div class='col-sm-4'>
              <div class="form-group">
                <div class='input-group date' id='datetimepicker3'>
                  <input type='text' class="form-control" />
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</div>






<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
<script src="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>


<script>
  $(function () {
    $('#datetimepicker1').datetimepicker({
      format: 'DD-MM-YYYY LT'
    });
    $('#datetimepicker2').datetimepicker({
      format: 'DD-MM-YYYY'
    });
    $('#datetimepicker3').datetimepicker({
      format: 'LT'
    });
    $('#datetimepicker3').datetimepicker({
      format: 'LT'
    });
  });
</script>



<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



