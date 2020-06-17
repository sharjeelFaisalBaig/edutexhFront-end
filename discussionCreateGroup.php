

<!-- header -->

<?php require 'header.php';?>
<style>
    .nav-tabs li a.active {
        color: #ffffff;
        background-color: rgb(144, 3, 2);
         border: 0;
         border-bottom: none;
         border-top-left-radius: 0;
         border-top-right-radius: 0;
    }
    .nav-tabs li a {
        display: block;
        padding: 10px;
        text-align: center;
        background: #a00302;
        color: #ffffff;
        border-bottom-left-radius: 0;
        border: 0;
        border-top: none;
        border-left: none;
        border-right: none;
    }
</style>
<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">

	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Collaboration_sub.php">Collaboration</a></li>
                    <li class="breadcrumb-item"><a href="discussion.php">Discussion</a></li>
					<li class="breadcrumb-item active" aria-current="page">Create New Group</li>
				</ol>
			</nav>
		</div>
        <div class="col-md-8 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-body">
                    <hr>
                    <div class="create-group">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-2">
                                        <label class="">Group Name :</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleName" placeholder="Hiking Club">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-2">
                                        <label class="">Department :</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>English</option>
                                                <option>English</option>
                                                <option>English</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-2">
                                        <label for="validationCustom37">Select Member</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="ms-card ms-widget ms-card-fh">
                                            <div class="ms-card-header clearfix">
                                                <h6 class="ms-card-title">Select All</h6>
                                            </div>
                                            <div class="ms-card-body">
                                                <ul class="ms-list ms-task-block">
                                                    <li class="">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="">
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Muhammad Saleem</span>

                                                    </li>
                                                    <li class="">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="">
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Muhammad Sufiyan sh...</span>

                                                    </li>
                                                </ul>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-2">
                                        <label class="">Course :</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>Pg-Blue</option>

                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-2">
                                        <label for="validationCustom37">Select Member</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="ms-card ms-widget ms-card-fh">
                                            <div class="ms-card-header clearfix">
                                                <h6 class="ms-card-title">Select All</h6>
                                            </div>
                                            <div class="ms-card-body">
                                                <ul class="ms-list ms-task-block">
                                                    <li class="">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="">
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Muhammad Saleem</span>

                                                    </li>
                                                </ul>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <a href="discussionClub.php" class="btn btn-primary width70">Save</a>
                            </div>
                            <div class="col-lg-6">
                                <div class="pl-4 border-left ">
                                    <label for="validationCustom37">Member</label>
                                    <div class="ms-card ms-widget ms-card-fh">
                                        <div class="ms-card-header clearfix">
                                            <h6 class="ms-card-title">Select All</h6>
                                        </div>
                                        <div class="ms-card-body">
                                            <ul class="ms-list ms-task-block">
                                                <li class="">
                                                    <label class="ms-checkbox-wrap">
                                                        <i class="fas fa-window-close text-primary"></i>
                                                    </label>
                                                    <span> Muhammad Saleem</span>

                                                </li>
                                                <li class="">
                                                    <label class="ms-checkbox-wrap">
                                                        <i class="fas fa-window-close text-primary"></i>
                                                    </label>
                                                    <span> Muhammad Sufiyan sh...</span>

                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
	</div>
</div>

<!-- footer -->

<?php require 'footer.php';?>
<script>
    // create group
    $(".click-group").on("click",function(){
        $(".create-group").css("display","block")
    });

    // my group
    $(".my-group").on("click",function(){
        $(".my-comments").css("display","block")
    });
</script>
<!-- footer -->



