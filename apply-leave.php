<?php require_once('header.php')?>

<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-7">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php"> Home</a></li>
					<li class="breadcrumb-item"><a href="Academic_sub.php">Academics</a></li>
					<li class="breadcrumb-item"><a href="Administration-HR-Leave_sub.php">Leaves</a></li>
					<li class="breadcrumb-item active" aria-current="page">Apply leave</li>
				</ol>
			</nav>
		</div>

		<div class="col-md-8 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-header">
                    <div>
                        <div class="dropdown text-right">
                            <button class="btn btn-primary">Profile</button>
                            <button class="btn btn-primary">My Leave</button>
                        </div>
                    </div>
                </div>
                <div class="ms-panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="">Leave duration</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <ul class="ms-list d-flex">
                                    <li class="ms-list-item m-0 p-1 col-4">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample" value="" checked=""> <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span> Single </span>
                                    </li>
                                    <li class="ms-list-item  m-0  p-1 col-4">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample" value=""> <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span> Multiple days </span>
                                    </li>
                                    <li class="ms-list-item  m-0  p-1 col-4">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample" value=""> <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span> Half day </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <label for="datepickerstart">Date</label>
                        </div>
                        <div class="col-4">
                            <div class="input-group">
                                <input class="form-control" type="datetime-local" id="startdate">
                                <div class="invalid-feedback">
                                    Please provide an Date separator.
                                </div>
                            </div>
                        </div>
                        <div class="col-1 text-center">
                            <label>To</label>
                        </div>
                        <div class="col-4">
                            <div class="input-group">
                                <input type="datetime-local" id="enddate"  class="form-control">
                                <div class="invalid-feedback">
                                    Please provide an Date separator.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <label class="">Select Department :</label>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>English</option>
                                    <option>English</option>
                                    <option>English</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <label class="">Select Department :</label>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </div>
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