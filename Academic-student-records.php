<!-- header -->

<?php require 'header.php'; ?>

<!-- header -->
<style>
    .tablinks {
        border: none !important;
        outline: none !important;
        background-color: none !important;
        color: black !important;
    }

    .cstm_li {
        list-style-type: none;
    }
    .tab button.active {
        background-color: #ccc;
    }
</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12 m-auto">
            <div class="ms-panel-header">
                <h6 class="my-4 d-md-inline"><b>Students Info | </b><small>Remarks History</small></h6>
                <div class="float-md-right">
                    <a href="Academic-student-remarks.php" class=" mt-1 btn btn-primary">Remarks</a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="Academic-student.php">Students</a></li>
                    <li class="breadcrumb-item"><a href="Academic-studentAdmission_profile.php">Profile</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Remarks History</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="row">
            <div class="col-md-4">
                <div class="tab">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="border-top">
                                <tr>
                                    <th>Batch</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="tab"><button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">G-3-A-2012</button></td>
                                </tr>
                                <tr>
                                    <td class="tab"><button class="tablinks" onclick="openCity(event, 'Paris')">G-2-B-2020</button></td>
                                </tr>
                                <tr>
                                    <td class="tab"><button class="tablinks" onclick="openCity(event, 'Tokyo')">G-2-A-2020</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-8 border">
                <div id="London" class="tabcontent">
                    <div class="row alert alert-dark">
                        <div class="col-md-1 text-md-left">
                            <i class="fas fa-arrow-left"></i>
                        </div>
                        <div class="col-md-4 text-md-left">
                            <p class="text-muted">Batch</p>
                            <p class="bold">G3-A-2012</p>
                        </div>
                        <div class="col-md-4 text-md-right">
                            <p class="text-muted">Roll No.</p>
                            <p class="bold">-</p>
                        </div>
                        <div class="col-md-1 text-md-right offset-md-1">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                    <div class="row">
                        <h5 class="col-md-12 ml-3">Sports Records</h5>
                        <div class="col-md-12 mt-4">
                            <ol>
                                <li>
                                    <p class="bold">Type Of Sport</p>
                                </li>
                                <li class="cstm_li">
                                    <p class="ml-3">- FootBall</p>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-2">
                        <h5 class="col-md-12 ml-3">Health Information</h5>
                        <div class="col-md-12 mt-4">
                            <ol>
                                <li>
                                    <p class="bold">Checkup Date</p>
                                </li>
                                <p class="ml-3">25-02-12</p>
                                <li>
                                    <p class="bold">Hieght</p>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div id="Paris" class="tabcontent">
                    <div class="row alert alert-dark">
                        <div class="col-md-1 text-md-left">
                            <i class="fas fa-arrow-left"></i>
                        </div>
                        <div class="col-md-4 text-md-left">
                            <p class="text-muted">Batch</p>
                            <p class="bold">G-2-B-2020</p>
                        </div>
                        <div class="col-md-4 text-md-right">
                            <p class="text-muted">Roll No.</p>
                            <p class="bold">-</p>
                        </div>
                        <div class="col-md-1 text-md-right offset-md-1">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                    <div class="row">
                        <h5 class="col-md-12 ml-3">Sports Records</h5>
                        <div class="col-md-12 mt-4">
                            <ol>
                                <li>
                                    <p class="bold">Type Of Sport</p>
                                </li>
                                <li class="cstm_li">
                                    <p class="ml-3">- FootBall</p>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-2">
                        <h5 class="col-md-12 ml-3">Health Information</h5>
                        <div class="col-md-12 mt-4">
                            <ol>
                                <li>
                                    <p class="bold">Checkup Date</p>
                                </li>
                                <p class="ml-3">25-02-12</p>
                                <li>
                                    <p class="bold">Hieght</p>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div id="Tokyo" class="tabcontent">
                    <div class="row alert alert-dark">
                        <div class="col-md-1 text-md-left">
                            <i class="fas fa-arrow-left"></i>
                        </div>
                        <div class="col-md-4 text-md-left">
                            <p class="text-muted">Batch</p>
                            <p class="bold">G-9-A-2021</p>
                        </div>
                        <div class="col-md-4 text-md-right">
                            <p class="text-muted">Roll No.</p>
                            <p class="bold">-</p>
                        </div>
                        <div class="col-md-1 text-md-right offset-md-1">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                    <div class="row">
                        <h5 class="col-md-12 ml-3">Sports Records</h5>
                        <div class="col-md-12 mt-4">
                            <ol>
                                <li>
                                    <p class="bold">Type Of Sport</p>
                                </li>
                                <li class="cstm_li">
                                    <p class="ml-3">- FootBall</p>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-2">
                        <h5 class="col-md-12 ml-3">Health Information</h5>
                        <div class="col-md-12 mt-4">
                            <ol>
                                <li>
                                    <p class="bold">Checkup Date</p>
                                </li>
                                <p class="ml-3">25-02-12</p>
                                <li>
                                    <p class="bold">Hieght</p>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
<!-- footer -->

<?php require 'footer.php'; ?>

<!-- footer -->