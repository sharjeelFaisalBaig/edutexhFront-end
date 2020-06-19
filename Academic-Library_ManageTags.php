<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-10">
            <h6 class="my-4">Library | <small> Manage Tags</small></h6>
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
                    <li class="breadcrumb-item active" aria-current="page">Manage Tags</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8 m-auto">
            <div class="col-md-10 my-4">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group row my-3">
                            <label class="col-sm-2 col-form-label">Search</label>
                            <div class="col-sm-8">
                                <input type="Search" class="form-control" id="e_number" placeholder="" required>
                            </div>
                        </div>
                    </div>
                </div>
		    </div>
            <div class="col-md-12 my-4">
                <table class="table table-bordered thead-primary">
                    <thead>
                        <tr>
                            <th scope="col">SI.NO.</th>
                            <th scope="col">Tags</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td> 
                            <td>Reference Book</td>
                            <td><span class="asterisk_color">x</span></td>
                        </tr>
                        <tr>
                            <td>2</td> 
                            <td>Islamic</td>
                            <td><span class="asterisk_color">x</span></td>
                        </tr>
                        <tr>
                            <td>3</td> 
                            <td>Kids</td>
                            <td><span class="asterisk_color">x</span></td>
                        </tr>
                        <tr>
                            <td>4</td> 
                            <td>History</td>
                            <td><span class="asterisk_color">x</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
   	</div>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->