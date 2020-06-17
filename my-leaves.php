<?php require_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
        <div class="col-md-7">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php"> Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Leaves</a></li>
                    <li class="breadcrumb-item active" aria-current="page">My Leaves</li>
                </ol>
            </nav>
        </div>
		<div class="col-md-8 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-header">
                    <div>
                        <div class="dropdown text-right">
                            <button class="btn btn-primary">Employee leave balance</button>
                            <a href="my-leave-applications.php" class="btn btn-primary">My leave applications</a>
                        </div>
                    </div>
                </div>
                <div class="ms-panel-body">
                    <h4>My Leaves</h4>
                    <div class="row">
                        <div class="col-md-4 mt-4 mb-4">
                            <p class="text-secondary m-0">Employee name</p>
                            <p>Muhammad Karan Gohar (E28)</p>
                        </div>
                        <div class="col-md-4 mt-4 mb-4">
                            <p class="text-secondary m-0">Recent leave reset</p>
                            <p>10-05-2020</p>
                        </div>
                        <div class="col-md-4 mt-4 mb-4">
                            <p class="text-secondary m-0">Employee department</p>
                            <p>Library</p>
                        </div>
                    </div>
                    <hr>

                </div>
            </div>
        </div>
	</div>

</div>

<?php include_once('footer.php')?>
<script>
//    $("#startDate").val(new Date().getTime() / 1000 | 1);
//    $("#startDate").val(new Date().toDateString());

</script>
<script type="text/javascript">
//    start date
    var d = new Date();
    var elem = document.getElementById("startdate");
    elem.value = d.toISOString().slice(0,16);
//    end date
    var d = new Date();
    var elem = document.getElementById("enddate");
    elem.value = d.toISOString().slice(0,16);
</script>