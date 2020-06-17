header -->

<?php require 'header.php';?>

<!-- header -->

<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-10">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Collaboration_sub.php">Collaboration</a></li>
                    <li class="breadcrumb-item"><a href="Blog.php">Blog</a></li>
                    <li class="breadcrumb-item"><a href="My_Blog.php">My Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Science</li>
                </ol>
            </nav>
        </div>
         <div class="col-md-8 m-auto">
            <div class="ms-panel-header px-0">
                <h6 class="my-4 d-inline"><b>MY BLOG | </b><small>Science</small></h6>
                <div class="float-md-right">
                    <a href="My_Blog.php" class="btn btn-primary width70 m-auto" type="submit">My Blog</a>
                    <a href="Blog.php" class="btn btn-primary width70  m-auto" type="submit">Home</a>
                    <button class="btn btn-primary width70  m-auto" data-toggle="modal" data-target="#modal_edit" type="submit">Edit</button>      
                </div>
            </div>

            <div class="row my-3">
                <div class="col-md-7">
                    <h5 class="text-primary">Science</h5>
                    <small><i>Posted by <a href="My_Blog_profile.php">Muhammad Sufyan Shaikh</a> on 08 May 2020</i></small>
                </div>
                <div class="col-md-5 text-right">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary width70">2 Favourites</button>
                        <button type="button" class="btn btn-primary width30"><i class="fas fa-star text-warning"></i></button>
                        <button type="button" class="btn btn-primary width30"><i class="fas fa-ban"></i></button>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <span>the intellectual and practical activity encompassing the systematic studyof the structure and behaviour of the physical and natural world through observation and experiment.</span>
                </div>
            </div>
            <div class="form-row mt-5 mb-3">
                <div class="col-md-7">
                    <h6>2 Comment</h6>
                    <div class="input-group mt-3">
                        <textarea class="form-control" id="validationCustom03" rows="5" placeholder=""></textarea>
                    </div>
                    <button type="button" class="btn btn-primary width70">Submit</button>
                </div>
            </div>

            <div class="px-4 py-2 mt-4">
                <div class="row">
                    <div class="col-md-12">
                        <h5>Comments</h5>
                        <hr>
                    </div>
                    <div class="col-md-8">
                        <h6><a href=""><strong>Muhammad Saleem</strong></a></h6>
                        <p class="text-disabled">Good to read</p>
                    </div>
                    <div class="col-md-4">
                        <p class="text-disabled">Delete</p>
                        <small>08 May 2020 11:09 AM</small>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-8">
                        <h6><a href=""><strong>Muhammad Sufyan Shaikh</strong></a></h6>
                        <p class="text-disabled">Excellent post</p>
                    </div>
                    <div class="col-md-4">
                        <p class="text-disabled"></p>
                        <small>08 May 2020 11:09 AM</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade bd-example-modal-lg" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

         <div class="modal-header">
            <h6 class="modal-title has-icon ms-icon-round">Edit</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>

        <div class="modal-body">
            <form class="needs-validation mb-2" novalidate>
               <div class="form-row">
                  <div class="col-md-6">
                     <label for="validationCustom03"> Edit Title</label>
                     <div class="input-group">
                        <input type="text" class="form-control" id="validationCustom03" placeholder="" required>
                        <div class="invalid-feedback">This Field is Required</div>
                    </div>
                </div>
                <div class="col-md-9">
                 <label for="validationCustom03"> Edit Body</label>
                 <div class="input-group">
                    <textarea class="form-control" id="validationCustom03" rows="9" placeholder=""></textarea>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-primary shadow-none" type="submit">Publish</button>
    <button type="button" class="btn btn-light" data-dismiss="modal">Save as Draft</button>
</div>

</div>
</div>
</div>
</div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer