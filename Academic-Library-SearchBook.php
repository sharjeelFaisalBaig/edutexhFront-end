<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-10">
            <h6 class="my-4">Library | <small> Search Books</small></h6>
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
                    <li class="breadcrumb-item active" aria-current="page">Search Books</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8 m-auto">
            <div class="col-md-10 offset-2 my-4">
                <div class="form-group row my-3">
                    <label class="col-sm-2 col-form-label">Search</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" id="e_number" placeholder="A3" required="">
                    </div>
                </div>
                <div class="form-group row my-3">
                    <label class="col-sm-2 col-form-label">Search By</label>
                    <div class="col-sm-6">
                    <select class="form-control " id="catagory">
                        <option selected="">Book’s Barcode</option>
                        <option value="1">Book Number</option>
                        <option value="2">Book’s Title</option>
                        <option value="3">Book’s Tag</option>
                        <option value="3">Book’s Author</option>
                    </select>
                    </div>
                </div>
                <div class="col-md-2 offset-2">
		            <button class="btn btn-primary">Search</button>
		        </div>
		    </div>
            <div class="col-md-12 my-4">
                <table class="table table-bordered thead-primary">
                    <thead>
                        <tr>
                            <th scope="col">Book Number</th>
                            <th scope="col">Book Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>A2</td> 
                            <td>Tasheel Bihsti Zewar</td>
                            <td>Hazrat Molana Ashraf Ali Thanvi R.A</td>
                            <td>Avaliable</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
   	</div>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->