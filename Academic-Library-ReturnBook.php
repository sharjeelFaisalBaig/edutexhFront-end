<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-10">
            <h6 class="my-4">Library | <small> Return Books</small></h6>
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
                    <li class="breadcrumb-item active" aria-current="page">Return Books</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8 m-auto">
            <div class="col-md-10 offset-2 my-4">
                <div class="form-group row my-3">
                    <label class="col-sm-3 col-form-label">Book Number/Barcode </label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" id="e_number" placeholder="A3" required="">
                    </div>
                </div>
                <div class="col-md-2 offset-3">
		            <button class="btn btn-primary">Search</button>
		        </div>
		    </div>
            <div class="col-md-12 my-4">
                <table class="table table-bordered thead-primary">
                    <thead>
                        <tr>
                            <th scope="col">Book Number</th>
                            <th scope="col">Barcode</th>
                            <th scope="col">Book Title</th>
                            <th scope="col">Author</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>A2</td> 
                            <td>-</td>
                            <td>Tasheel Bihsti Zewar</td>
                            <td>Hazrat Molana Ashraf Ali Thanvi R.A</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4 offset-md-4 my-4">
            <div class="row">
                <div class="col-md-6">
                    <p class="text-disabled">Book Number</p>
                </div>
                <div class="col-md-6">
                    <p class="text-primary"> 
                        <strong>:&nbsp; A9</strong>
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="text-disabled">Book Holder</p>
                </div>
                <div class="col-md-6">
                    <p class="text-primary"> 
                        <strong>:&nbsp; Muhammad Kaleem</strong>
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="text-disabled">Book issue date</p>
                </div>
                <div class="col-md-6">
                    <p class="text-primary"> 
                        <strong>:&nbsp; 26-05-2020</strong>
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="text-disabled">Book due date</p>
                </div>
                <div class="col-md-6">
                    <p class="text-primary"> 
                        <strong>:&nbsp; 26-05-2020</strong>
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="text-danger d-inline">Due date has been exceeded:</p>
                </div>
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <p class="text-disabled">Enter fine amount</p>
                </div>
                <div class="col-md-6">
                    <input type="text" name="amount" class="form-control">
                </div>
            </div>
            <div class="col-md-2 offset-6">
                <button class="btn btn-primary">Return</button>
            </div>
        </div>
   	</div>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->