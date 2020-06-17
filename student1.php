<!-- header -->
<?php require 'header.php';?>
<!-- header -->

<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                <li class="breadcrumb-item"><a href="#">Student</a></li>
                <li class="breadcrumb-item active" aria-current="page">Abdul bari</li>
            </ol>
        </nav>
    </div>
    <div class="ms-profile-overview">
        <div class="ms-profile-cover">
            <img class="ms-profile-img" src="assets/img/costic/customer-5.jpg" alt="people">
            <div class="ms-profile-user-info">
                <h4 class="ms-profile-username text-white">Abdul bari</h4>
                <h2 class="ms-profile-role">Course : Play</h2>
                <h2 class="ms-profile-role">Batch : Pink</h2>
                <h2 class="ms-profile-role">Admin No : S51</h2>
                <h2 class="ms-profile-role">Roll number :-</h2>
            </div>
            <div class="ms-profile-user-buttons">
                <a href="#" class="btn btn-primary"> Report</a>
                <a href="#" class="btn btn-primary"> Guardians</a>
                <a href="#" class="btn btn-primary"> Delete</a>
                <div class="dropdown d-inline-block">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
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
<!-- footer -->



