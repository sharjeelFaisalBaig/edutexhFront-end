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
					<li class="breadcrumb-item active" aria-current="page">List Custom Remarks</li>
				</ol>
			</nav>
		</div>

		<div class="ms-panel w-100">
			<div class="ms-panel-body">

                <div class="row">
                    <div class="col-md-4">
                       <div class="row">
                           <div class="col-md-3">
                               <label class="mt-2">Classes:</label>
                           </div>
                           <div class="col-md-9">
                               <div class="form-group">
                                    <select class="form-control">
                                        <option>Grade 2</option>
                                    </select>
                                </div>
                           </div>
                       </div>
                    </div>
                    <div class="col-md-4">
                       <div class="row">
                           <div class="col-md-3">
                               <label class="mt-2">Batches:</label>
                           </div>
                           <div class="col-md-9">
                               <div class="form-group">
                                    <select class="form-control">
                                        <option>G2 - A 2020</option>
                                    </select>
                                </div>
                           </div>
                       </div>
                    </div>
                    <div class="col-md-4">
                       <div class="row">
                           <div class="col-md-3">
                               <label class="mt-2">Stuents:</label>
                           </div>
                           <div class="col-md-9">
                               <div class="form-group">
                                    <select class="form-control">
                                        <option>Arsalan Ali</option>
                                    </select>
                                </div>
                           </div>
                       </div>
                    </div>
                </div>
                <hr>

                <table class="w-100">
                    <tbody>
                        <tr>
                            <td class="font-weight-bold">Arsalan</td>
                            <td class="font-weight-bold">Behaviour</td>
                            <td class="font-weight-bold">Bad in Behaviour</td>
                            <td class="font-weight-bold text-muted">Admin on 14 May 2020</td>
                            <td>
                            	<a href="javascript:void(0)" class="text-danger">
                            		<i class="fas fa-pencil-alt"></i>
                            	</a>
                            </td>
                            <td>
                            	<a href="javascript:void(0)" class="text-danger">
                            		<i class="fas fa-times"></i>
                            	</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <a href="" class="btn btn-primary width70">PDF Report</a>
                <a href="" class="btn btn-primary width70">CSV Report</a>

			</div>
		</div>

	</div>
</div>

<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->



