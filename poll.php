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
					<li class="breadcrumb-item"><a href="Collaboration_sub.php">Collaboration</a></li>
					<li class="breadcrumb-item active" aria-current="page">Poll</li>
				</ol>
			</nav>
		</div>
        <div class="col-md-8 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-header">
                    <div>
                        <div class="d-inline-block">
                            <i class="fas fa-poll"></i>
                            <h6 class="d-inline-block">Online Poll</h6>
                            <span class="ml-2 mr-2">|</span>
                            <p class="d-inline-block">Listing All Polls</p>
                        </div>
                        <div class="dropdown float-right">
                            <button class="btn btn-primary create-task">New poll</button>
                        </div>
                    </div>
                </div>
                <div class="ms-panel-body">

                    <p>No polls are active</p>
                    <p>Closed polls are not present</p>
                    <!--Question-->
                    <div>
                        <div class="alert alert-info text-dark" role="alert">
                            Question
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="">Title :</label>
                            </div>
                            <div class="col-md-10">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="exampleFormControlTextarea1" class="">Discription :</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Answers-->
                    <div>
                        <div class="alert alert-info text-dark" role="alert">
                            Answers
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="">Answer :</label>
                            </div>
                            <div class="col-md-10">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </form>
                            </div>
                            <div class="col"><a href="#"><i class="fas fa-window-close"></i></a></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="">Answer :</label>
                            </div>
                            <div class="col-md-10">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </form>
                            </div>
                            <div class="col"><a href="#"><i class="fas fa-window-close"></i></a></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="">Answer :</label>
                            </div>
                            <div class="col-md-10">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </form>
                            </div>
                            <div class="col"><a href="#"><i class="fas fa-window-close"></i></a></div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <a href="#">+ Add another</a>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item m-0 p-1">
                                            <label class="ms-checkbox-wrap">
                                                <input type="checkbox"  checked="" name="radioExample" value="" checked=""> <i class="ms-checkbox-check"></i>
                                            </label>
                                            <span> Allow other answer </span>
                                        </li>
                                        <li class="ms-list-item  m-0  p-1">
                                            <label class="ms-checkbox-wrap">
                                                <input type="checkbox" checked="" name="radioExample" value=""> <i class="ms-checkbox-check"></i>
                                            </label>
                                            <span> Opwn for polling </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Member-->
                    <div>
                        <div class="alert alert-info text-dark" role="alert">
                            Member
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <label for="validationCustom37">Batches</label>
                            </div>
                            <div class="col-lg-10">
                                <div class="ms-card ms-widget ms-card-fh">
                                    <div class="ms-card-header clearfix">
                                        <h6 class="ms-card-title">Select All, None</h6>
                                    </div>
                                    <div class="ms-card-body">
                                        <ul class="ms-list ms-task-block">
                                            <li class="">
                                                <label class="ms-checkbox-wrap">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                                <span> PG-Blue</span>

                                            </li>
                                            <li class="">
                                                <label class="ms-checkbox-wrap">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                                <span> PG-Pink</span>

                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <label for="validationCustom37">Departments:</label>
                            </div>
                            <div class="col-lg-10">
                                <div class="ms-card ms-widget ms-card-fh">
                                    <div class="ms-card-header clearfix">
                                        <h6 class="ms-card-title">Select All, None</h6>
                                    </div>
                                    <div class="ms-card-body">
                                        <ul class="ms-list ms-task-block">
                                            <li class="">
                                                <label class="ms-checkbox-wrap">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                                <span> English</span>

                                            </li>
                                            <li class="">
                                                <label class="ms-checkbox-wrap">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                                <span> System Admin</span>

                                            </li>
                                        </ul>
                                        <button class="btn btn-primary">Post Poll</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="ms-panel w-100 d-none">
                <div class="ms-panel-header">
                    <div>
                        <div class="d-inline-block">
                            <i class="fas fa-thumbtack"></i>
                            <h6 class="d-inline-block">Task Management</h6>
                            <span class="ml-2 mr-2">|</span>
                            <p class="d-inline-block">View Tasks</p>
                        </div>
                        <div class="dropdown float-right">
                            <button class="btn btn-primary create-task">Assigned To</button>
                            <button class="btn btn-primary create-task">Edit</button>
                            <button class="btn btn-primary create-task">Delete</button>
                        </div>
                    </div>
                </div>
                <div class="ms-panel-body">
                    <div class="">
                        <table class="table table-hover table-bordered thead-primary">
                            <thead>
                            <tr>
                                <th scope="col">Si No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Emp code / Admission no.</th>
                                <th scope="col">Dept. name / Course name</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>Muhammad Saleem</td>
                                <td>S1</td>
                                <td>
                                    PG-Blue
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2
                                </td>
                                <td>Muhammad Sufiyan Shaikh</td>
                                <td>E1</td>
                                <td>
                                    English
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


	</div>
</div>

<!-- footer -->

<?php require 'footer.php';?>
<script>
    // create-assigned
    $(".create-assigned").on("click",function(){
        $(".assigned").css("display","block")
    });

    // my compeleted
    $(".create-compeleted").on("click",function(){
        $(".compeleted").css("display","block")
    });
    // my task
    $(".create-task").on("click",function(){
        $(".task").css("display","block")
    });
</script>
<!-- footer -->



