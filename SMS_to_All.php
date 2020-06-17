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
                    <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
                    <li class="breadcrumb-item"><a href="Administration-Settings_sub.php">Settings</a></li>
                    <li class="breadcrumb-item"><a href="Administration-Settings_SMS_sub.php">SMS Module</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Send SMS to All</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8 m-auto">
            <div class="ms-panel ms-panel-fh">

                <div class="ms-panel-body">
                    <form class="needs-validation clearfix" novalidate>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <form class="needs-validation mb-5" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-8 offset-md-2">
                                            <div class="input-group">
                                                <textarea class="form-control" id="validationCustom03" rows="6" placeholder="Hi, this is testing message"></textarea>
                                                <div class="valid-feedback">Looks Good!</div>
                                                <div class="invalid-feedback">Minimum 28 characters required.</div>
                                            </div>
                                            <small>0 characters</small>
                                            <input type="submit" class="btn btn-primary d-block w-25" name="btn25" value="Send SMS" style="margin: 10px auto;">
                                        </div>
                                    </div>
                                </form>                                

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




