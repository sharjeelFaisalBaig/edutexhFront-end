<!-- header -->
<?php require 'header.php';?>
<!-- header -->

<!-- Body Content Wrapper -->
<div class="ms-content-wrapper container">

	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index-2.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                    <li class="breadcrumb-item"><a href="Academic-Remarks_sub.php">Remarks</a></li>
					<li class="breadcrumb-item active" aria-current="page">Add Custom Remarks</li>
				</ol>
			</nav>
		</div>

		<div class="ms-panel w-100">
			<div class="ms-panel-body">

                <div class="row">
                    <div class="col-md-5">
                       <div class="row">
                           <div class="col-md-2">
                               <label class="mt-2">Class:</label>
                           </div>
                           <div class="col-md-7">
                               <div class="form-group">
                                    <select class="form-control">
                                        <option>Grade 2</option>
                                    </select>
                                </div>
                           </div>
                       </div>
                    </div>
                    <div class="col-md-5">
                       <div class="row">
                           <div class="col-md-2">
                               <label class="mt-2">Batch:</label>
                           </div>
                           <div class="col-md-7">
                               <div class="form-group">
                                    <select class="form-control">
                                        <option>G2 - A 2020</option>
                                    </select>
                                </div>
                           </div>
                       </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                       <div class="row">
                           <div class="col-md-2">
                               <label class="mt-2">Subject</label>
                           </div>
                           <div class="col-md-10 pl-md-0 pl-lg-0">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Behaviour" name="">
                                </div>
                           </div>
                       </div>
                    </div>
                    <div class="col-md-5 offset-md-1">
                       <div class="row">
                           <div class="col-md-3">
                               <label class="mt-2">Remark by</label>
                           </div>
                           <div class="col-md-7">
                               <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Arsalan" name="">
                                </div>
                           </div>
                       </div>
                    </div>
                </div>
                <hr>

                <table class="w-100">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Roll Number</th>
                            <th>Addmmission No.</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="font-weight-bold">Amjad khan</td>
                            <td class="font-weight-bold">G204</td>
                            <td class="font-weight-bold">S104</td>
                            <td>
                                <textarea class="form-control mt-3" rows="2" placeholder="Good in Behaviour"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Amjad khan</td>
                            <td class="font-weight-bold">G204</td>
                            <td class="font-weight-bold">S104</td>
                            <td>
                                <textarea class="form-control mt-3" rows="2" placeholder="Good in Behaviour"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Amjad khan</td>
                            <td class="font-weight-bold">G204</td>
                            <td class="font-weight-bold">S104</td>
                            <td>
                                <textarea class="form-control mt-3" rows="2" placeholder="Good in Behaviour"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <a href="" class="btn btn-primary width70">Finish</a>

			</div>
		</div>

	</div>
</div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



