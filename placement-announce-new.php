

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
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="placement.php">Placements</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Announce New Placement</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-body">
                    <form class="need-validation w-50 m-auto" novalidate="">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="">Title</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleName" placeholder="Research Assistant">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="">Date</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="date" class="form-control" id="exampleName" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="">Company</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleName" placeholder="SIBA University">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="">Deparment</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Research Assistant is required for Mathematics" rows="4"></textarea>
                                </div>
                                <div class="btn btn-primary width70">Create Placement Event</div>
                            </div>
                        </div>                    
                    </form>
                    
                </div>
            </div>
        </div>

    </div>
</div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



