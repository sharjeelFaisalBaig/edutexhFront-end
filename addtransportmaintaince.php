<!-- header -->
<?php require 'header.php';?>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Oswald:wght@500&family=Poppins&family=Roboto&display=swap" rel="stylesheet">

<!-- header -->
<style>
    .hide {
        padding: 10px;
        background-color: #e9e9e9;
    }
    .hide p {
        margin: 0;
    }

</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
             <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="index-2.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
                  <li class="breadcrumb-item"><a href="">Transportation</a></li>
                  <li class="breadcrumb-item"><a href="">Vehicle Maintaince</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Vehicle Maintaince</li>
              </ol>
          </nav>
        </div>
        <div class="col-md-6 m-auto">
            <div class="ms-panel ms-panel-fh">
                    <div class="ms-panel-body">
                        <form class="needs-validation clearfix" novalidate>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4"> <label for="validationCustom18">Academic Year</label></div>
                                        <div class="col-8">
                                            <b>2020 - 2021</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="validationCustom19">Vehicle</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <select class="form-control">
                                                    <option>RIJ-28</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="validationCustom20">Name of maintaince</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom20" placeholder="mmsc@gmail.com" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid maintaince.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="validationCustom21">Notes</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <textarea class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="validationCustom21">Maintaince Date</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <input type="date" class="form-control" name="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="validationCustom21">Next Maintaince Date</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <input type="date" class="form-control" name="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="validationCustom21">Amount (Rs)</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div  class="col-md-12 mb-3">
                                    <div id="attachment" class="row">
                                        <div class="col-4">
                                            <label for="validationCustom21">Name of Attachment</label>
                                            <input type="text" class="form-control" name="">
                                        </div>
                                        <div class="col-8">
                                            <label for="validationCustom21">Upload Attachment</label>
                                            <input type="file" class="form-control" name="">

                                        </div>
                                    </div>
                                    <div id="copy" class="mt-2">
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <button id="add" type="button" class="btn-sm btn-success text-white mt-2"><i class="fa fa-plus"></i> Add </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="input-group">
                                                <input type="submit" value="Save" class="btn btn-primary" name="">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <input type="submit" value="Cancel" class="btn btn-primary" name="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                                </div>
                        </form>
                    </div>
                </div>
        </div>

    </div>
</div>
<!-- /Body Content Wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('#add').click(function(){
           var clone =  $('#attachment').clone();
        clone.appendTo('#copy');
        });

    });
</script>
<!-- footer -->
<?php require 'footer.php';?>

<!-- footer -->



