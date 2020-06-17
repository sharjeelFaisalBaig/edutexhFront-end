

<!-- header -->

<?php require 'header.php';?>

<!-- header -->


<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Administration_sub.php">Administration</a></li>
					<li class="breadcrumb-item"><a href="Administration-HumanResource_sub.php">Human Resource</a></li>
                    <li class="breadcrumb-item"><a href="Administration-HR-Setting_sub.php">HR Settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Payroll Settings</li>
                </ol>
            </nav>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 my-2">
                    <h5>Payroll Settings</h5>
                    <hr>
                </div>
                <div class="col-md-12">
                    <p class="text-muted">Depending Upon The Process Followed In Your Institutions You Can Choose Between Two  Modes  Of Employee Payroll Calculation </p>
                </div>
                <div class="col-md-8 mb-sm-4">
                    <div class="custom-control custom-radio custom-control mt-3">
                        <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
                        <label class="custom-control-label cursor-pointer" for="customRadio">
                            <h6>Gross Based Payroll</h6>
                        </label><br>
                        <p class="text-muted mt-3">In the Gross Mode The Values Of Gross Pay Is Entered First And Based On It The Values OF All Other Dependent Catagories Are Calculated</p>
                        <p class="text-muted mt-5">Use This Mode If Your Institution Follows A Single Value Like Gross Salary And All Other Payroll Catagories Depend On It Directly Or Indirectly</p>
                        <a href="" class="my-2"  data-toggle="modal" data-target=".bd-example-modal-lg">View Example</a>
                    </div>
                    <div class="custom-control custom-radio custom-control mt-5">
                        <input type="radio" class="custom-control-input" id="customRadio1" name="example" value="customEx">
                        <label class="custom-control-label cursor-pointer" for="customRadio1">
                            <h6>Custom Mode Payroll</h6>
                        </label><br>
                        <p class="text-muted mt-3">In the Custom Mode, Value of Payroll Categpries Having Fixed Numeric Value are Entered First and Based on these Values Other Dependent Categpries are Calculated.</p>
                        <p class="text-muted mt-5">Use This Mode If Your Institution Follows no Single Value Like Gross Salary on Which All Other Payroll Categpries Depend, Instead Has One or Two Like Basic Salary Based on Which All Other Categpries are Calculated.</p>
                        <a href="" class="my-2"  data-toggle="modal" data-target=".bd-example-modal-lg1">View Example</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ms-card p-2">
                        <h6>Earnings</h6>
                        <form class="needs-validation mt-4" novalidate>
                            <div class="row">
                                <div class="col-md-7">
                                    <label class="" for="validationCustom03">
                                        <strong>Gross Pay</strong>
                                    </label>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationCustom03" placeholder="" required>
                                        <div class="invalid-feedback">Enter the value!</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-7">
                                    <label class="">Basic Salary</label>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-7">
                                    <label class="">Grade Pay</label>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-7">
                                    <label class="">House Rent Allowance</label>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <label class="">Conveyance Allowance</label>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-7">
                                </div>
                                <div class="col-md-5">
                                    <button class="btn btn-primary width30 m-auto" type="submit">Calculate</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="ms-card p-2">
                        <h6>Earnings</h6>
                        <form class="needs-validation mt-4" novalidate="">
                            <div class="row mb-3">
                                <div class="col-md-7">
                                    <label class="" for="validationCustom03">
                                        Basic Salary
                                    </label>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationCustom03" placeholder="" required="">
                                        <div class="invalid-feedback">Enter the value!</div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-md-7">
                                    <label class="">Grade Pay</label>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="" required="">
                                        <div class="invalid-feedback">Enter the value!</div>
                                    </div>
                                </div>
                            </div>
                       
                            <div class="row my-3">
                                <div class="col-md-7">
                                    <label class="">House Rent Allowance</label>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="" required="">
                                        <div class="invalid-feedback">Enter the value!</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-7">
                                    <label class="">Conveyance Allowance</label>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <label class="">Medical Allowance</label>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-7">

                                </div>
                                <div class="col-md-5">
                                    <button class="btn btn-primary width30 m-auto" type="submit">Calculate</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12">
                    <button class="btn btn-primary mt-5">Save Settings</button>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="modal fade bd-example-modal-lg"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h6 class="modal-title">Advanced Search for Employees</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <div class="table-responsive">
                    <table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-right">Payroll Category</th>
                                <th class="text-center">Code</th>
                                <th class="text-center">Formula</th>
                                <th class="text-center">Auto Computed Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="bg-white">
                                    <i>Basic</i>
                                </td>
                                <td class="text-center">B</td>
                                <td class="text-center">40% Gross</td>
                                <td class="text-center">10000</td>
                            </tr>
                            <tr>
                                <td class="bg-white">
                                    <i>Dearness Allowance</i>
                                </td>
                                <td class="text-center">DA</td>
                                <td class="text-center">50% B</td>
                                <td class="text-center">5000</td>
                            </tr>
                            <tr>
                                <td class="bg-white">
                                    <i>Human Resource Allowance</i>
                                </td>
                                <td class="text-center">HRA</td>
                                <td class="text-center">40% B</td>
                                <td class="text-center">4000</td>
                            </tr>
                            <tr>
                                <td class="bg-white">
                                    <i>Conveyance Allowance</i>
                                </td>
                                <td class="text-center">CA</td>
                                <td class="text-center">Fixed</td>
                                <td class="text-center">2000</td>
                            </tr>
                            <tr>
                                <td class="bg-white">
                                    <i>Medical Allowance</i>
                                </td>
                                <td class="text-center">MA</td>
                                <td class="text-center">Fixed</td>
                                <td class="text-center">2400</td>
                            </tr>
                            <tr>
                                <td class="bg-white">
                                    <i>Food Allowance</i>
                                </td>
                                <td class="text-center">FA</td>
                                <td class="text-center">Fixed</td>
                                <td class="text-center">1600</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg1"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h6 class="modal-title">Advanced Search for Employees</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <div class="table-responsive">
                    <table id="data-table-4" class="ms-card table w-100 thead-primary table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-right">Payroll Category</th>
                                <th class="text-center">Code</th>
                                <th class="text-center">Formula</th>
                                <th class="text-center">Auto Computed Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="bg-white">
                                    <i>Basic</i>
                                </td>
                                <td class="text-center">B</td>
                                <td class="text-center">Fixed</td>
                                <td class="text-center">16218</td>
                            </tr>
                            <tr>
                                <td class="bg-white">
                                    <i>Gross Pay</i>
                                </td>
                                <td class="text-center">GP</td>
                                <td class="text-center">Fixed</td>
                                <td class="text-center">5000</td>
                            </tr>
                            <tr>
                                <td class="bg-white">
                                    <i>Dearness Allowance</i>
                                </td>
                                <td class="text-center">DA</td>
                                <td class="text-center">86% (B+GP)</td>
                                <td class="text-center">18247</td>
                            </tr>
                            <tr>
                                <td class="bg-white">
                                    <i>Human Resource Allowance</i>
                                </td>
                                <td class="text-center">HRA</td>
                                <td class="text-center">20% (B+GP)</td>
                                <td class="text-center">4244</td>
                            </tr>
                            <tr>
                                <td class="bg-white">
                                    <i>Performance Bonus</i>
                                </td>
                                <td class="text-center">PB</td>
                                <td class="text-center">Fixed</td>
                                <td class="text-center">1273</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>


    <!-- footer -->

    <?php require 'footer.php';?>

    <!-- footer -->



