<?php include_once('header.php')?>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">

	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Data_&_Reports_sub.php">Data & Reports</a></li>
                    <li class="breadcrumb-item"><a href="coursedefaulter.php">Course Fee Defaulter</a></li>
					<li class="breadcrumb-item active" aria-current="page"> Batch Fee Defaulters</li>
				</ol>
			</nav>
		</div>
    <div class="col-md-8 m-auto">
    <div class="ms-panel w-100">
      <div class="ms-panel-header">
                <div>
                   <div class="dropdown float-left">
                        <h5>Total Amount : <span>20000</span></h5>
                    </div>
                    <div class="dropdown float-right">
                        <button class="btn btn-primary" onclick="window.location.href=''">Export as CSV</button>
                    </div>
                </div>
      </div>
    </div>
    </div>
    <div class="col-md-12 text-center content-center">
        <div class="ms-panel w-100">
            <div class="ms-panel-body">
                <div class="">
                    <table class="table table-hover thead-primary">
                        <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col" class="text-left">Name</th>
                            <th scope="col" class="text-left">Start Date</th>
                            <th scope="col" class="text-left">End Date</th>
                            <th scope="col" class="text-left">Tutor</th>
                            <th scope="col" class="text-left">Fee Collections</th>
                            <th scope="col" class="text-left">Balance</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <tr>

                            <td>
                               1
                            </td>
                            <td class="text-left"><a href="batchfeecollection.php">PG-Pink</a></td>
                            <td class="text-left">29/02/2020</td>
                            <td class="text-left">29/02/2021</td>
                            <td class="text-left"></td>
                            <td class="text-left">1</td>
                            <td class="text-left">323232323</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

	</div>
</div>

<!-- footer -->

<?php include_once('footer.php')?>



