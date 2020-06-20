<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-10">
            <h6 class="my-4">Library | <small> Issue Books</small></h6>
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
                    <li class="breadcrumb-item active" aria-current="page">Issue Books</li>
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
        <div class="col-md-8 m-auto">
            <div class="row">
                <div class="col-md-6 right_border">
                    <div class="row rowMargin">
                        <div class="col-md-4">
                            <p class="text-disabled">Book Number</p>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="" placeholder="A3" required="">
                        </div>
                    </div>
                    <div class="row rowMargin">
                        <div class="col-md-4">
                            <p class="text-disabled">Book Title</p>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="" placeholder="Tafseez Quran" required="">
                        </div>
                    </div>
                    <div class="row rowMargin">
                        <div class="col-md-4">
                            <p class="text-disabled">Name</p>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="" placeholder="Muhammad Saleem" required="">
                        </div>
                    </div>
                    <div class="row rowMargin">
                        <div class="col-md-4">
                            <p class="text-disabled">Admission no</p>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="" placeholder="S41" required="">
                        </div>
                    </div>
                    <div class="row rowMargin">
                        <div class="col-md-4">
                            <p class="text-disabled">No, of books that can be taken</p>
                        </div>
                        <div class="col-md-8">
                            <p class="text-primary"> 
                                <strong>:&nbsp;3</strong>
                            </p>
                        </div>
                    </div>
                    <div class="row rowMargin">
                        <div class="col-md-4">
                            <p class="text-disabled">Books taken</p>
                        </div>
                        <div class="col-md-8">
                            <p class="text-primary"> 
                                <strong>:&nbsp;3</strong>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <p class="text-danger d-inline">This user has reached the maximum limit of availing books!</p>
                    </div>
                    <div class="row">
                        <div class="col-md-12 my-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="text-disabled">Book Title</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-primary"> 
                                        <strong>:&nbsp;Namaz ke Masail</strong>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-disabled">Book Number</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-primary"> 
                                        <strong>:&nbsp;A5</strong>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-disabled">Issue date</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-primary"> 
                                        <strong>:&nbsp;27-05-2020</strong>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-disabled">Due date</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-primary"> 
                                        <strong>:&nbsp;26-06-2020</strong>
                                    </p>
                                </div>
                            </div>
                            <div class="spacing"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="text-disabled">Book Title</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-primary"> 
                                        <strong>:&nbsp;Namaz ke Masail</strong>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-disabled">Book Number</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-primary"> 
                                        <strong>:&nbsp;A5</strong>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-disabled">Issue date</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-primary"> 
                                        <strong>:&nbsp;27-05-2020</strong>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-disabled">Due date</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-primary"> 
                                        <strong>:&nbsp;26-06-2020</strong>
                                    </p>
                                </div>
                            </div>
                            <div class="spacing"></div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="text-disabled">Issue date</p>
                                </div>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <input type="date" class="form-control" placeholder="15 May 2020" name="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <p class="text-disabled">Due date</p>
                                </div>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <input type="date" class="form-control" placeholder="15 May 2020" name="">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-primary">Issue</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="text-disabled">Search</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row my-3">
                                <div class="col-md-12">
                                    <span class=""></span>
                                    <input class="form-input" type="radio" name="exampleRadios" id="searchAll" value="option1" checked="">
                                    <label class="form-label" for="exampleRadios1">
                                        Student
                                    </label>
                                    <span class=""></span>
                                    <input class="form-input" type="radio" name="exampleRadios" id="searchBlocked" value="option1" checked="">
                                    <label class="form-label" for="exampleRadios1">
                                        Employee
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control marginTop" id="" placeholder="S41" required="">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary">Search</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 my-4">
                            <div class="row">
                                <div class="col-md-2">
                                    <p class="text-disabled">S41-</p>
                                </div>
                                <div class="col-md-5">
                                    <p class="text-primary"> 
                                        <strong>muhammad saleem</strong>
                                    </p>
                                </div>
                                <div class="col-md-5">
                                    <p class="text-disabled">MBA- Semester II-A-2020</p>
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

<!-- footer -->