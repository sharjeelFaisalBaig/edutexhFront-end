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
                <li class="breadcrumb-item"><a href="">Transport</a></li>
                <li class="breadcrumb-item"><a href="">Transport Fee</a></li>
                <li class="breadcrumb-item"><a href="">Fee Collection</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Fee Collection date: Batch Wise</li>
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
                                        <div class="col-4"> <label for="validationCustom18">Transport Fee Name</label></div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom18" placeholder="MMSC" value="MMSC" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="validationCustom22">Fine</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <select class="form-control" id="validationCustom22" required>
                                                    <option value="">12232</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a Institution.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="financial-start">Start Date</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <input class="form-control" type="date"  id="financial-start">
                                                <div class="invalid-feedback">
                                                    Please provide an Date separator.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="financial-end">Due Date</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <input class="form-control" type="date"  id="financial-end">
                                                <div class="invalid-feedback">
                                                    Please provide an Date separator.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="validationCustom30">Tax Slab</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <select class="form-control" id="validationCustom30" required>
                                                    <option value="">Select a tax slab</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please provide Tax Slab
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="validationCustom33">Include Employee ?</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <input type="checkbox" value="" id="validationCustom33" placeholder="Rs" required>
                                                <div class="invalid-feedback">
                                                    Please provide an Currency code.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="validationCustom36"></label>
                                        </div>
                                        <div class="col-8">
                                            <table class="table">
                                                       <tr>
                                                           <th>Days</th>
                                                           <th>Fine amount</th>
                                                       </tr>
                                                       <tr>
                                                           <td>2</td>
                                                           <td>2.0%</td>
                                                       </tr>
                                                       <tr>
                                                           <td>5</td>
                                                           <td>5.0%</td>
                                                       </tr>
                                                   </table>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-12 mb-3 ">
                                    <div class="col-lg-12 pl-0 col-md-12">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="validationCustom37"></label>
                                            </div>
                                            <div class="col-8">
                                                <div class="ms-card ms-widget ms-card-fh">
                                                    <div class="ms-card-header clearfix">
                                                        <h6 class="ms-card-title">Select Batch</h6>
                                                    </div>
                                                    <div class="ms-card-body">
                                                        <ul class="ms-list ms-task-block">
                                                            <li class="ms-list-item">
                                                                <label class="ms-checkbox-wrap">
                                                                    <input type="checkbox" value="">
                                                                    <i class="ms-checkbox-check"></i>
                                                                </label>
                                                                <span> G1-A-2020 </span>

                                                            </li>
                                                            <li class="ms-list-item">
                                                                <label class="ms-checkbox-wrap">
                                                                    <input type="checkbox" value="">
                                                                    <i class="ms-checkbox-check"></i>
                                                                </label>
                                                                <span> G2-A-2020 </span>

                                                            </li>
                                                            <li class="ms-list-item">
                                                                <label class="ms-checkbox-wrap">
                                                                    <input type="checkbox" value="">
                                                                    <i class="ms-checkbox-check"></i>
                                                                </label>
                                                                <span> PG-Pink </span>

                                                            </li>
                                                            <li class="ms-list-item">
                                                                <input type="submit" class="btn btn-primary d-block w-25" name="btn25" value="Create">

                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>

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

<!-- footer -->
<?php require 'footer.php';?>
<script>
    $(document).ready(function(){
        $(document).on('click', "#fonts", function(){
            let font = $(this).val();
            $("*").css("font-family", font);
        })
    })
</script>
<script>
    $('#select_box').change(function () {
        var select=$(this).find(':selected').val();
        $(".hide").hide();
        $('#' + select).show();

    }).change();
</script>

<script>
    // date
    document.querySelector("#financial-start").valueAsDate = new Date();
    document.querySelector("#financial-end").valueAsDate = new Date();
</script>
<!-- footer -->



