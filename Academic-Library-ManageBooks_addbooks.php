<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-10">
            <h6 class="my-4">Library | <small> Add Book</small></h6>
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
                    <li class="breadcrumb-item"><a href="Academic-Library-ManageBooks.php">Manage Books</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Book</li>
                </ol>
            </nav>
        </div>

        <div class="col-md-8 m-auto">
            <div class="row">
                <div class="col-md-3"></div>
                    <div class="col-md-9 my-5">
                        
                    </div>
                </div>


                <form class="form">


                    <div class="form-group row">
                    <div class="col-md-2"></div>
                        <label class="col-sm-2 col-form-label">Book addition mode</label>
                    <div class="col-sm-6">
                        <select class="form-control " id="catagory">
                            <option selected="">By barcode</option>
                            <option value="1">General</option>
                        </select>
                    </div>
                    </div>

                    <div class="form-group row">
                    <div class="col-md-2"></div>
                        <label class="col-sm-2 col-form-label">Barcode<span class="asterisk_color">&nbsp;*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="e_number" placeholder="3424822" required="">
                    </div>
                    </div>
                    
                    <div class="form-group row">
                    <div class="col-md-2"></div>
                        <label class="col-sm-2 col-form-label">Book Number<span class="asterisk_color">&nbsp;*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="e_number" placeholder="A1" required="">
                    </div>
                    </div>

                    <div class="form-group row">
                    <div class="col-md-2"></div>
                        <label class="col-sm-2 col-form-label">Title<span class="asterisk_color">&nbsp;*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="e_number" placeholder="Tasheel Bihsti Zewar" required="">
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-md-2"></div>
                        <label class="col-sm-2 col-form-label">Author<span class="asterisk_color">&nbsp;*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="e_number" placeholder="Hazrat Molana Ashraf Ali Thanvi R.A" required="">
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-md-2"></div>
                        <label class="col-sm-2 col-form-label">Tags</label>
                    <div class="col-sm-6">
                        <label class="ms-checkbox-wrap">
                            <input type="checkbox" value="">
                            <i class="ms-checkbox-check"></i>
                        </label>
                        <span>Reference Book</span>
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-md-2"></div>
                        <label class="col-sm-2 col-form-label">Custom Tags</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="e_number" placeholder="Istamic" required="">
                    </div>
                    </div>

                    <div class="col-md-4 m-auto">
                        <a href="Academic-Library_ManageBookAdditionalDetails.php" class="btn btn-primary">Create</a>
                    </div>
                </form>
            </div>
        </div>




<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->