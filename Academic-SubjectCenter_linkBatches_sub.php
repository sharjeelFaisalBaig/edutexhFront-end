<!-- header -->

<?php require 'header.php';?>

<!-- header -->
<style>
    .border_cstm{
        border-right:0px !important;        
        border-left:0px !important;        
    }
</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
  <div class="row">
        <div class="col-md-12">
            <div class="ms-panel-header">
                <h6 class="my-4 d-md-inline"><b>Subject Center| </b><small>Link Batches</small></h6>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="Academic_sub.php">Academic</a></li>
                <li class="breadcrumb-item"><a href="Academic-subjectCenter_sub.php">Subject Center</a></li> 
                <li class="breadcrumb-item active" aria-current="page">Link Batches</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="row d-none" id="to_show">
            <div class="col-md-8 offset-md-2">
                <div class="alert alert-warning text-center my-4">
                    <strong>Subject Assigned To Batch Successfully</strong>
                </div>
            </div>
            <div class="col-md-2"></div> 
        </div>
        <div class="form-group row my-5">
          <label class="col-md-2 mt-1 offset-md-2">Course</label>
          <div class="col-md-4">
            <select class="form-control">
                <option>Grade I</option>
                <option>Grade II</option>
                <option>Grade III</option>
            </select>
          </div>
          <hr>
        </div>
        <div id="formname" class="col-md-12 text-center content-center">
            <div class="ms-panel w-100">
                <div class="ms-panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ms-panel ms-panel-fh">
                                <div class="ms-panel-body">
                                    <p class="ms-directions">
                                        <div class="row">		
                                            <div class="col-md-4"><p class="text-muted">Subjects</p></div>
                                            <div class="col-md-4"><p class="text-muted">Batch Assigned</p></div>
                                            <div class="col-md-4"><p class="text-muted">Allocation Status</p></div>
                                        </div>
                                    </p>
                                    <div class="accordion has-gap ms-accordion-chevron" id="accordionExample2">
                                        <div class="card">
                                            <div class="card-header" data-toggle="collapse" role="button" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p><b>Mathematics</b></p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="text-muted">0</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="text-muted">Not Allocated</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapsefour" class="collapse" data-parent="#accordionExample2">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12 m-auto">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Batches</th>
                                                                    <th>Allocation Status</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-dark">A-2020</td>
                                                                    <td class="text-dark">Not Allocated</td>
                                                                    <td class="text-dark">
                                                                        <label class="ms-checkbox-wrap">
                                                                            <input type="checkbox" id="check1">
                                                                            <i class="ms-checkbox-check" id="check1"></i>
                                                                        </label>
                                                                        <label for="check1">Assign</label> 
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-dark">B-2020</td>
                                                                    <td class="text-dark">Not Allocated</td>
                                                                    <td class="text-dark">
                                                                        <label class="ms-checkbox-wrap">
                                                                            <input type="checkbox" id="check1">
                                                                            <i class="ms-checkbox-check" id="check1"></i>
                                                                        </label>
                                                                        <label for="check1">Assign</label> 
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" data-toggle="collapse" role="button" data-target="#collapsefive" aria-expanded="false" aria-controls="collapseSix">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p><b>Islamiat (ISL)</b></p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="text-muted">0</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="text-muted">Not Allocated</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapsefive" class="collapse" data-parent="#accordionExample2">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12 m-auto">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Batches</th>
                                                                    <th>Allocation Status</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-dark">A-2020</td>
                                                                    <td class="text-dark">Not Allocated</td>
                                                                    <td class="text-dark">
                                                                        <label class="ms-checkbox-wrap">
                                                                            <input type="checkbox" id="check1">
                                                                            <i class="ms-checkbox-check" id="check1"></i>
                                                                        </label>
                                                                        <label for="check1">Assign</label> 
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-dark">B-2020</td>
                                                                    <td class="text-dark">Not Allocated</td>
                                                                    <td class="text-dark">
                                                                        <label class="ms-checkbox-wrap">
                                                                            <input type="checkbox" id="check1">
                                                                            <i class="ms-checkbox-check" id="check1"></i>
                                                                        </label>
                                                                        <label for="check1">Assign</label> 
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" data-toggle="collapse" role="button" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p><b>English (ENG)</b></p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="text-muted">0</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="text-muted">Not Allocated</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapseSix" class="collapse" data-parent="#accordionExample2">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12 m-auto">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Batches</th>
                                                                    <th>Allocation Status</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-dark">A-2020</td>
                                                                    <td class="text-dark">Not Allocated</td>
                                                                    <td class="text-dark">
                                                                        <label class="ms-checkbox-wrap">
                                                                            <input type="checkbox" id="check1">
                                                                            <i class="ms-checkbox-check" id="check1"></i>
                                                                        </label>
                                                                        <label for="check1">Assign</label> 
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-dark">B-2020</td>
                                                                    <td class="text-dark">Not Allocated</td>
                                                                    <td class="text-dark">
                                                                        <label class="ms-checkbox-wrap">
                                                                            <input type="checkbox" id="check1">
                                                                            <i class="ms-checkbox-check" id="check1"></i>
                                                                        </label>
                                                                        <label for="check1">Assign</label> 
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" data-toggle="collapse" role="button" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSix">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p><b>General Science (GLS)</b></p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="">2</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="text-success">Completely Allocated</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapseSeven" class="collapse" data-parent="#accordionExample2">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12 m-auto">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Batches</th>
                                                                    <th>Allocation Status</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-dark">A-2020</td>
                                                                    <td class="text-dark">Not Allocated</td>
                                                                    <td class="text-dark">
                                                                        <label class="ms-checkbox-wrap">
                                                                            <input type="checkbox" id="check1">
                                                                            <i class="ms-checkbox-check" id="check1"></i>
                                                                        </label>
                                                                        <label for="check1">Assign</label> 
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-dark">B-2020</td>
                                                                    <td class="text-dark">Not Allocated</td>
                                                                    <td class="text-dark">
                                                                        <label class="ms-checkbox-wrap">
                                                                            <input type="checkbox" id="check1">
                                                                            <i class="ms-checkbox-check" id="check1"></i>
                                                                        </label>
                                                                        <label for="check1">Assign</label> 
                                                                    </td>
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
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 m-auto">
            <a href="#" onclick="show()" class="btn btn-primary">Save</a>
        </div>
    </div>
</div>
<script>
    var show_var = document.getElementById("to_show").classList;
    function show(){
        show_var.remove("d-none");
    }
</script>
<!-- footer -->

<?php require 'footer.php';?>

<!-- footer -->