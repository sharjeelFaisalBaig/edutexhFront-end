

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
		<div class="col-md-8">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Collaboration_sub.php">Collaboration</a></li>
					<li class="breadcrumb-item active" aria-current="page">Discussions</li>
				</ol>
			</nav>
		</div>
        <div class="col-md-4 text-md-right">
            <a href="discussionCreateGroup.php" class="btn btn-primary m-auto">Create Group</a>
        </div>
        <div class="col-md-8 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-body">
                    <div class="row">
                        <div class="col-md-9">
                            <button class="btn btn-primary click-group m-0">View All Posts</button>
                            <table id="" class="table w-100 mt-4 thead-primary border-1">
                                <thead>
                                    <tr>
                                        <th colspan="4">Comments</th>
                                        <th colspan="4">Activity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="4">No recent comments found</td>
                                        <td colspan="4"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="table-responsive">
                                <table id="" class="table w-100 mt-4 thead-primary border-1">
                                    <thead>
                                        <tr>
                                            <th colspan="4">Comments</th>
                                            <th colspan="2">Activity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="4">Hi<br>-<a href="discussionGorakhHills.php">Hiking of Gorakh Hills</a></td>
                                            <td colspan="2">10 minutes ago<br>Admin</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-2 offset-md-1 border-left">
                            <div class="my-group float-md-right text-center cursor-pointer">
                                <h6 class="text-primary">My Group</h6>
                                <p>Hiking Club</p>
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



