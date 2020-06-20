<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-10">
            <h6 class="my-4">Library | <small> Library Fines Receipt</small></h6>
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
                    <li class="breadcrumb-item active" aria-current="page">Library Fines Receipt</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-10 m-auto">
            <div class="col-md-12 my-4">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group row my-3">
                            <label class="col-sm-4 col-form-label">Payer</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="e_number" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group row my-3">
                            <label class="col-sm-4 col-form-label">Start date</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <input class="form-control" type="date" id="financial-start">
                                    <div class="invalid-feedback">
                                        Please provide an Date separator.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group row my-3">
                            <label class="col-sm-4 col-form-label">End date</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <input class="form-control" type="date" id="financial-start">
                                    <div class="invalid-feedback">
                                        Please provide an Date separator.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		    </div>
            <div class="col-md-12 my-4">
                <table class="table table-bordered thead-primary">
                    <thead>
                        <tr>
                            <th scope="col">SI No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Admission no</th>
                            <th scope="col">Roll number</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Payment date</th>
                            <th scope="col" class="border-0"></th>
                            <th scope="col" class="border-0"></th>
                            <th scope="col" class="border-0"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td> 
                            <td>Muhammad Kaleem(A9)</td>
                            <td>S31</td>
                            <td>-</td>
                            <td>100.00</td>
                            <td>27-05-2020</td>
                            <td class="border-0"><a href="#"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                            <td class="border-0"><a href="#"><i class="fa fa-print" aria-hidden="true"></i></a></td>
                            <td class="border-0"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
   	</div>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->