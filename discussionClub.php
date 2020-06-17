

<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">

	<div class="row">
		<div class="col-md-8">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Collaboration_sub.php">Collaboration</a></li>
                    <li class="breadcrumb-item"><a href="discussion.php">Discussions</a></li>
					<li class="breadcrumb-item active" aria-current="page">Hiking Club</li>
				</ol>
			</nav>
		</div>

        <div class="col-md-8 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-body">
                    <div class="row">
                        <div class="col-md-9">
                            <h6 class="text-primary mb-4">Share</h6>
                            <form>
                                <div class="form-group">
                                    <label for="exampleEmail">Title <span class="text-primary">*</span></label>
                                    <input type="email" class="form-control" id="exampleEmail" placeholder="Hiking of Gorakh Hill Station">
                                </div>

                                <div class="form-group">
                                    <label for="exampleTextarea">Discription <span class="text-primary">*</span></label>
                                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <label for="exampleTextarea">Upload image or a document (5MB max)</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="validatedCustomFile">
                                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn btn-primary mt30">Post</button>
                                    </div>
                                </div>
                            </form>
                            <ul class="mt-4">
                                <li><h6 class="text-primary">All discussions</h6></li>
                                <li><a href="discussionGorakhHills.php">Hiking of Gorakh Hills</a></li>
                                <li>
                                    <small>Posted by <a href="" class="text-dark">Admin</a> on June 08 2020 04:34 Pm</small>
                                    <a href="" class="text-success float-md-right">0 Comments</a>
                                </li>
                                <div class="clearfix"></div>
                                <hr>
                            </ul>
                        </div>
                        <div class="col-md-3 border-left">
                            <div>
                                <h6 class="text-primary">Members</h6>
                                <p class="m-0 cursor-pointer">Muhammad</p>
                                <p class="m-0 cursor-pointer">Muhammad Sufiyan</p>
                                <p class="m-0 cursor-pointer">Admin</p>
                                <a href="#">See all members</a>
                            </div>
                            <div class="mt-3">
                                <h6 class="text-primary">My Group</h6>
                                <p class="m-0 cursor-pointer">Hiking Club</p>
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

<!-- footer -->



