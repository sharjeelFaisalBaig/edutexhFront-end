
<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
            <div class="row">
                <div class="col-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <!-- <li class="breadcrumb-item active" aria-current="page">Library</li> -->
                        </ol>
                    </nav>
                </div>
                <div class="col-6 text-right">
                    <a href="#" class="btn btn-primary m-0">Manage Dash-Lets</a>
                </div>
            </div>
		</div>
    </div>
		<!-- Recent Orders Requested -->
    <div class="row">
		<div class="col-xl-4 mb-4 col-md-12">
			<div class="ms-panel">
				<div class="ms-panel-body p-0">
                    <div class="accordion has-gap ms-accordion-chevron" id="accordionExample1">
                        <div class="card">
                            <div class="card-head"  >
                                <p class="d-inline-block text-white m-0"> Employee on leave </p>
                                 <div class="float-right" style="letter-spacing: 10px;">
                                     <img src="assets/img/refresh.png" class="table-icon" alt="">
                                     <img src="assets/img/interface.png" class="cursor-pointer table-icon"  alt="" data-toggle="collapse" role="button" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                     <img src="assets/img/close.png" class="table-icon" alt="">
                                 </div>
                            </div>

                            <div id="collapseOne" class="collapse show" data-parent="#accordionExample1">
                                <div class="card-body">
                                    <div class="text-center">
                                        <div class="date-div">
                                            <button class="next" id="prev"><i class="fas fa-chevron-left"></i></button>
                                            <input  type="text" id="datepicker" >
                                            <button class="prev" id="next"><i class="fas fa-chevron-right"></i></button>
                                            <i class="far fa-calendar-alt"></i>
                                        </div>
                                        <table class="table table-striped text-center">

                                            <tbody>
                                            <tr>
                                                <td>Employee name</td>
                                            </tr>
                                            <tr>
                                                <td>@ID No.</td>
                                            </tr>
                                            <tr>
                                                <td>Department</td>
                                            </tr>
                                            <tr>
                                                <td>Leave Type</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
				</div>
			</div>
		</div>
        <div class="col-xl-4 mb-4 col-md-12">
            <div class="ms-panel">

                <div class="ms-panel-body p-0">
                    <div class="accordion has-gap ms-accordion-chevron" id="accordionExample2">
                        <div class="card">
                            <div class="card-head"  >
                                <p class="d-inline-block text-white m-0"> Employee on leave </p>
                                <div class="float-right" style="letter-spacing: 10px;">
                                    <img src="assets/img/refresh.png" class="table-icon" alt="">
                                    <img src="assets/img/interface.png" class="cursor-pointer table-icon"  alt="" data-toggle="collapse" role="button" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    <img src="assets/img/close.png" class="table-icon" alt="">
                                </div>
                            </div>
                            <div id="collapseTwo" class="collapse show" data-parent="#accordionExample2">
                                <div class="card-body">
                                    <div class="text-center">
                                        <div class="date-div">
                                            <button class="next" id="prev2"><i class="fas fa-chevron-left"></i></button>
                                            <input  type="text" id="datepicker2" >
                                            <button class="prev" id="next2"><i class="fas fa-chevron-right"></i></button>
                                            <i class="far fa-calendar-alt"></i>
                                        </div>
                                        <table class="table table-striped">
                                            <tbody>
                                            <tr>
                                                <td>Student 1</td>
                                                <td>4-2-2020</td>
                                                <td>6-2-2020</td>

                                            </tr>
                                            <tr>
                                                <td>Student 2</td>
                                                <td>4-2-2020</td>
                                                <td>6-2-2020</td>
                                            </tr>
                                            <tr>
                                                <td>Student 3</td>
                                                <td>4-2-2020</td>
                                                <td>6-2-2020</td>
                                            </tr>
                                            <tr>
                                                <td>Student 4</td>
                                                <td>4-2-2020</td>
                                                <td>6-2-2020</td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 mb-4 col-md-12">
            <div class="ms-panel">

                <div class="ms-panel-body p-0">

                    <div class="accordion has-gap ms-accordion-chevron" id="accordionExample3">
                        <div class="card">
                            <div class="card-head"  >
                                <p class="d-inline-block text-white m-0"> Employee on leave </p>
                                <div class="float-right" style="letter-spacing: 10px;">
                                    <img src="assets/img/refresh.png" class="table-icon" alt="">
                                    <img src="assets/img/interface.png" class="cursor-pointer table-icon"  alt="" data-toggle="collapse" role="button" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <img src="assets/img/close.png" class="table-icon" alt="">
                                </div>
                            </div>

                            <div id="collapseThree" class="collapse show" data-parent="#accordionExample3">
                                <div class="card-body">
                                    <div class="text-center">
                                        <div class="date-div">
                                            <button class="next" id="prev3"><i class="fas fa-chevron-left"></i></button>
                                            <input  type="text" id="datepicker3" >
                                            <button class="prev" id="next3"><i class="fas fa-chevron-right"></i></button>
                                            <i class="far fa-calendar-alt"></i>
                                        </div>
                                    </div>

                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name of student</th>
                                            <th scope="col">Badge</th>
                                            <th scope="col">Absent Far</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">01</th>
                                            <td><u>Student name</u></td>
                                            <td>Badge</td>
                                            <td>For Noon</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">02</th>
                                            <td><u>Student name</u></td>
                                            <td>Badge</td>
                                            <td>AfterNoon</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">01</th>
                                            <td><u>Student name</u></td>
                                            <td>Badge</td>
                                            <td>Full Day</td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 mb-4 col-md-12">
            <div class="ms-panel">

                <div class="ms-panel-body p-0">

                    <div class="accordion has-gap ms-accordion-chevron" id="accordionExample4">
                        <div class="card">
                            <div class="card-head"  >
                                <p class="d-inline-block text-white m-0"> Employee on leave </p>
                                <div class="float-right" style="letter-spacing: 10px;">
                                    <img src="assets/img/refresh.png" class="table-icon" alt="">
                                    <img src="assets/img/interface.png" class="cursor-pointer table-icon"  alt="" data-toggle="collapse" role="button" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    <img src="assets/img/close.png" class="table-icon" alt="">
                                </div>
                            </div>

                            <div id="collapseFour" class="collapse show" data-parent="#accordionExample4">
                                <div class="card-body">
                                    <div class="text-center">
                                        <div class="date-div">
                                            <button class="next" id="prev4"><i class="fas fa-chevron-left"></i></button>
                                            <input  type="text" id="datepicker4" >
                                            <button class="prev" id="next4"><i class="fas fa-chevron-right"></i></button>
                                            <i class="far fa-calendar-alt"></i>
                                        </div>
                                    </div>

                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 mb-4 col-md-12">
            <div class="ms-panel">

                <div class="ms-panel-body p-0">

                    <div class="accordion has-gap ms-accordion-chevron" id="accordionExample5">
                        <div class="card">
                            <div class="card-head"  >
                                <p class="d-inline-block text-white m-0"> Employee on leave </p>
                                <div class="float-right" style="letter-spacing: 10px;">
                                    <img src="assets/img/refresh.png" class="table-icon" alt="">
                                    <img src="assets/img/interface.png" class="cursor-pointer table-icon"  alt="" data-toggle="collapse" role="button" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    <img src="assets/img/close.png" class="table-icon" alt="">
                                </div>
                            </div>

                            <div id="collapseFive" class="collapse show" data-parent="#accordionExample5">
                                <div class="card-body">
                                    <div class="text-center">
                                        <div class="date-div">
                                            <button class="next" id="prev5"><i class="fas fa-chevron-left"></i></button>
                                            <input  type="text" id="datepicker5" >
                                            <button class="prev" id="next5"><i class="fas fa-chevron-right"></i></button>
                                            <i class="far fa-calendar-alt"></i>
                                        </div>
                                    </div>

                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
	</div>
</div> <!-- /content-wrapper -->


<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->


