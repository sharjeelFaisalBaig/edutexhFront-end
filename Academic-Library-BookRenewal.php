<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-10">
            <h6 class="my-4">Library | <small> Book Renewal</small></h6>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="Academic-Library_sub.php">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Book Renewal</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8 m-auto">
            <div class="col-md-10 offset-2 my-4">
                <div class="form-group row my-3">
                    <label class="col-sm-3 col-form-label">Book Number</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" id="e_number" placeholder="A6" required="">
                    </div>
                </div>
                <div class="form-group row my-3">
                    <label class="col-sm-3 col-form-label">Book Title</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" id="e_number" placeholder="Namaz ka Masail" required="">
                    </div>
                </div>
                <div class="form-group row my-3">
                    <label class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" id="e_number" placeholder="Muhammad Saleem" required="">
                    </div>
                </div>
                <div class="form-group row my-3">
                    <label class="col-sm-3 col-form-label">Admission no</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" id="e_number" placeholder="S41" required="">
                    </div>
                </div>
                <div class="form-group row my-3">
                    <label class="col-sm-3 col-form-label">Issue date</label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="date" class="form-control" placeholder="15 May 2020" name="">
                        </div>
                    </div>
                </div>
                <div class="form-group row my-3">
                    <label class="col-sm-3 col-form-label">Due date</label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="date" class="form-control" placeholder="15 May 2020" name="">
                        </div>
                    </div>
                </div>
                <div class="col-md-2 offset-3">
		            <button class="btn btn-primary">Renew</button>
		        </div>
		    </div>
        </div>
   	</div>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->