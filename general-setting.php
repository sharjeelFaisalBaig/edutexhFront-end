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
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
                    <li class="breadcrumb-item"><a href="Administration-Settings_sub.php">Settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">General Settings</li>
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
                                        <div class="col-4"> <label for="validationCustom18">School/Collage Name</label></div>
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
                                            <label for="validationCustom19">School/Collage Address</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom19" placeholder="Eidgah Road, Pano-Akil" value="Eidgah" required>
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
                                            <label for="validationCustom20">School/Collage Email</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <input type="email" class="form-control" id="validationCustom20" placeholder="mmsc@gmail.com" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid email.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="validationCustom21">School/Collage Phone</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom21" placeholder="Phone Number" required>
                                                <div class="invalid-feedback">
                                                    Please provide a number.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="validationCustom27">School/Collage Website</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom21" placeholder="www.mmsc.com" required>
                                                <div class="invalid-feedback">
                                                    Please provide a website.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="validationCustom22">Institution Type</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <select class="form-control" id="validationCustom22" required>
                                                    <option value="">K-12</option>
                                                    <option value="">01</option>
                                                    <option value="">02</option>
                                                    <option value="">03</option>
                                                    <option value="">04</option>
                                                    <option value="">05</option>
                                                    <option value="">06</option>
                                                    <option value="">07</option>
                                                    <option value="">08</option>
                                                    <option value="">09</option>
                                                    <option value="">10</option>
                                                    <option value="">11</option>
                                                    <option value="">12</option>
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
                                            <label for="validationCustom23">Student Attendance Type</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <select class="form-control" id="validationCustom23" required>
                                                    <option value="">Daily</option>
                                                    <option value="">Week</option>
                                                    <option value="">Month</option>

                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a Attendance
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="validationCustom24">Start Day of the Week</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <select class="form-control" id="validationCustom24" required>
                                                    <option value="">Monday</option>
                                                    <option value="">Tuesday</option>
                                                    <option value="">Wednesday</option>
                                                    <option value="">Thursday</option>
                                                    <option value="">Friday</option>
                                                    <option value="">Saturday</option>
                                                    <option value="">Sunday</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please provide a day.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="validationCustom25">Date</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <select class="form-control" id="validationCustom25" required>
                                                    <option value="">DMY</option>
                                                    <option value="">MDY</option>
                                                    <option value="">YMD</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please provide a DMY.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="validationCustom26">Date Separator</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <select class="form-control" id="validationCustom25" required>
                                                    <option value="">/</option>
                                                    <option value="">-</option>

                                                </select>
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
                                            <label for="financial-start">Financial Year Start Date</label>
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
                                            <label for="financial-end">Financial Year End Date</label>
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
                                            <label for="validationCustom30">Language</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <select class="form-control" id="validationCustom30" required>
                                                    <option value="">English</option>
                                                    <option value="">Urdu</option>
                                                    <option value="">Hindi</option>
                                                    <option value="">Usa</option>
                                                    <option value="">British</option>

                                                </select>
                                                <div class="invalid-feedback">
                                                    Please provide a Language.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="validationCustom31">Time Zone</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <select class="form-control" id="validationCustom31" required>
                                                    <option value="">Pakistan Lahore Time(PLT)</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please provide a Time Zone.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="validationCustom32">Country</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <select class="form-control" id="validationCustom32" required>
                                                    <option value="">Pakistan (پاکستان)</option>
                                                    <option value="">Albania (Shqipëria)</option>
                                                    <option value="">Algeria (Dzayer)</option>
                                                    <option value="">Andorra (Andorra)</option>
                                                    <option value="">Angola (Angola)</option>
                                                    <option value="">Antigua and Barbuda (Antigua and Barbuda)</option>
                                                    <option value="">Argentina (Argentina)</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please provide a Country.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="validationCustom33">Currency Code</label>

                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <select class="form-control" id="select_box" required>
                                                    <option value="a">PKR (Rupees)</option>
                                                    <option value="b">AFN (Afghan Afghani )</option>
                                                    <option value="c">ALL (Albanian Lek )</option>
                                                    <option value="d">DZD (Algerian Dinar )</option>
                                                    <option value="e">EUR (Euro )</option>
                                                    <option value="f">AOA (Angolan Kwanza )</option>
                                                    <option value="g">AOA (Eastern Caribbean Dollar )</option>
                                                    <option value="h">XCD (Argentine Peso )</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please provide a Currency code.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div id="a" class="hide">
                                                <p>Unit: Rupees Subunit: Paisa</p>
                                            </div>
                                            <div id="b" class="hide">
                                                <p>Unit: Afghan Afghani Subunit: Pul</p>
                                            </div>
                                            <div id="c" class="hide">
                                                <p>Unit: Albanian Lek Subunit: Qindarkë</p>
                                            </div>
                                            <div id="d" class="hide">
                                                <p>Unit: Algerian Dinar Subunit: Santeem</p>
                                            </div>
                                            <div id="e" class="hide">
                                                <p>Unit: Euro
                                                    Subunit: Cent</p>
                                            </div>
                                            <div id="f" class="hide">
                                                <p>Unit: Angolan Kwanza
                                                    Subunit: Cêntimo
                                                </p>
                                            </div>
                                            <div id="g" class="hide">
                                                <p>Unit: Eastern Caribbean Dollar
                                                    Subunit: Cent
                                                </p>
                                            </div>
                                            <div id="h" class="hide">
                                                <p>Unit: Argentine Peso
                                                    Subunit: Centavo
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="validationCustom33">Currency Symbols</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control" value="" id="validationCustom33" placeholder="Rs" required>
                                                <div class="invalid-feedback">
                                                    Please provide an Currency code.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="validationCustom34">Precision Count</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control" value="" id="validationCustom34" placeholder="" required>
                                                <div class="invalid-feedback">
                                                    Please provide an Precision Count.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="validatedCustomFile">Uplad Logo (500KB max, 150x110)</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="validatedCustomFile">
                                                    <label class="custom-file-label" for="validatedCustomFile">No file Selected...</label>
                                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="validationCustom36">Include Grading Systems</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="ms-card ms-widget ms-card-fh">
                                                <div class="ms-card-header clearfix">
                                                    <h6 class="ms-card-title">Select</h6>
                                                </div>
                                                <div class="ms-card-body">
                                                    <ul class="ms-list ms-task-block">
                                                        <li class="ms-list-item">
                                                            <label class="ms-checkbox-wrap">
                                                                <input type="checkbox" value="" checked>
                                                                <i class="ms-checkbox-check"></i>
                                                            </label>
                                                            <span> GPA </span>

                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="validationCustom36">Moodle URL (eg: http://dmain.com/moodle)</label>

                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control" value="" id="validationCustom36" placeholder="" required>
                                                <div class="invalid-feedback">
                                                    Please provide an Precision Count.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="validationCustom36">Select Theme</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <input type="color" class="form-control" value="" id="validationCustom36" placeholder="" required >
                                                <div class="invalid-feedback">
                                                    Please provide an Select Theme.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="fonts">Select Fonts</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <select class="form-control" id="fonts" required>
                                                    <option>Arial</option>
                                                    <option>Montserrat, sans-serif</option>
                                                    <option>Oswald, sans-serif</option>
                                                    <option>Poppins, sans-serif</option>
                                                    <option>Roboto, sans-serif</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please provide a Fonts.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3 ">
                                    <div class="pl-0 col-12">
                                        <ul class="ms-list ms-task-block">
                                            <li class="ms-list-item row">
                                                <div class="col-8">
                                                    <span> Enable Auto Increament of Student Admission No. </span>
                                                </div>
                                                <div class="col-4">
                                                    <label class="ms-checkbox-wrap col-4">
                                                        <input type="checkbox" value="" checked>
                                                        <i class="ms-checkbox-check"></i>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="ms-list-item row">
                                                <div class="col-8">
                                                    <span> Enable Auto Increament of Employee No. </span>
                                                </div>
                                                <div class="col-4">
                                                    <label class="ms-checkbox-wrap col-4">
                                                        <input type="checkbox" value="" checked>
                                                        <i class="ms-checkbox-check"></i>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="ms-list-item row">
                                                <div class="col-8">
                                                    <span> Enable News Nomment Moderation</span>
                                                </div>
                                                <div class="col-4">
                                                    <label class="ms-checkbox-wrap col-4">
                                                        <input type="checkbox" value="" checked>
                                                        <i class="ms-checkbox-check"></i>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="ms-list-item row">
                                                <div class="col-8">
                                                    <span> Enable Sibling </span>
                                                </div>
                                                <div class="col-4">
                                                    <label class="ms-checkbox-wrap col-4">
                                                        <input type="checkbox" value="" checked>
                                                        <i class="ms-checkbox-check"></i>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="ms-list-item row">
                                                <div class="col-8">
                                                    <span> Enable Password Change At First Time Login </span>
                                                </div>
                                                <div class="col-4">
                                                    <label class="ms-checkbox-wrap col-4">
                                                        <input type="checkbox" value="" checked>
                                                        <i class="ms-checkbox-check"></i>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="ms-list-item row">
                                                <div class="col-8">
                                                    <span> Enable Roll Number For Students </span>
                                                </div>
                                                <div class="col-4">
                                                    <label class="ms-checkbox-wrap col-4">
                                                        <input type="checkbox" value="" checked>
                                                        <i class="ms-checkbox-check"></i>
                                                    </label>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3 ">
                                    <div class="col-lg-12 pl-0 col-md-12">

                                        <div class="row">
                                            <div class="col-4">
                                                <label for="validationCustom37">Logout After</label>
                                            </div>
                                            <div class="col-8">
                                                <div class="input-group">
                                                    <select class="form-control" id="validationCustom37" required>
                                                        <option value="">5 Minutes</option>
                                                        <option value="">10 Minutes</option>
                                                        <option value="">15 Minutes</option>
                                                        <option value="">20 Minutes</option>
                                                        <option value="">30 Minutes</option>
                                                        <option value="">1 Hour</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="validationCustom37">Applicable For</label>
                                            </div>
                                            <div class="col-8">
                                                <div class="ms-card ms-widget ms-card-fh">
                                                    <div class="ms-card-header clearfix">
                                                        <h6 class="ms-card-title">Select</h6>
                                                    </div>
                                                    <div class="ms-card-body">
                                                        <ul class="ms-list ms-task-block">
                                                            <li class="ms-list-item">
                                                                <label class="ms-checkbox-wrap">
                                                                    <input type="checkbox" value="">
                                                                    <i class="ms-checkbox-check"></i>
                                                                </label>
                                                                <span> Admin </span>

                                                            </li>
                                                            <li class="ms-list-item">
                                                                <label class="ms-checkbox-wrap">
                                                                    <input type="checkbox" value="">
                                                                    <i class="ms-checkbox-check"></i>
                                                                </label>
                                                                <span> Employee </span>

                                                            </li>
                                                            <li class="ms-list-item">
                                                                <label class="ms-checkbox-wrap">
                                                                    <input type="checkbox" value="">
                                                                    <i class="ms-checkbox-check"></i>
                                                                </label>
                                                                <span> Parent </span>

                                                            </li>
                                                            <li class="ms-list-item">
                                                                <label class="ms-checkbox-wrap">
                                                                    <input type="checkbox" value="" checked>
                                                                    <i class="ms-checkbox-check"></i>
                                                                </label>
                                                                <span> Student </span>

                                                            </li>
                                                            <li class="ms-list-item">
                                                                <input type="submit" class="btn btn-primary d-block w-25" name="btn25" value="Update">

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



