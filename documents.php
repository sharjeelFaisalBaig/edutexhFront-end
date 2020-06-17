<!-- header -->
<?php require 'header.php';?>
<style>
    .nav-tabs li a.active {
        color: #8d0302 !important;
        background-color: rgba(255, 255, 255, 0);
         border: 0;
         border-bottom: none;
         border-top-left-radius: 0;
         border-top-right-radius: 0;
    }
    .has-search .form-control {
        padding-left: 2.375rem;
    }

    .has-search .form-control-feedback {
        position: absolute;
        z-index: 2;
        display: block;
        width: 2.375rem;
        height: 2.375rem;
        line-height: 2.375rem;
        text-align: center;
        pointer-events: none;
        color: #aaa;
    }
    .nav-tabs.left-tabs + .tab-content, .nav-tabs.right-tabs + .tab-content {
        width: calc(100% - 150px);
    }
</style>
<!-- header -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">

	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="Collaboration_sub.php">Collaboration</a></li>
					<li class="breadcrumb-item active" aria-current="page">Documents</li>
				</ol>
			</nav>
		</div>
        <div class="col-md-8 m-auto">
            <div class="ms-panel w-100">
                <div class="ms-panel-header">
                    <div>
                        <div class="d-inline-block">
                            <i class="fas fa-file-alt"></i>
                            <h6 class="d-inline-block">Document</h6>
                            <span class="ml-2 mr-2">|</span>
                            <p class="d-inline-block">Upload View, And Share</p>
                        </div>
                        <div class="dropdown float-right">
                            <button class="btn btn-primary dropdown-toggle m-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Create
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item create-docs cursor-pointer">Document</a>
                                <a class="dropdown-item create-folder" href="#">Folder</a>
                                <a class="dropdown-item create-privileged" href="#">Privileged Docs</a>
                                <a class="dropdown-item create-user-specific" href="#">User-specific Docs</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ms-panel-body">
                    <ul class="nav nav-tabs tabs-bordered left-tabs nav-justified" role="tablist" aria-orientation="vertical">
                        <li role="presentation" ><a href="#tab1" aria-controls="tab1" class="active show" role="tab" data-toggle="tab"> My docs </a></li>
                        <li role="presentation" ><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"> Shared docs </a></li>
                        <li role="presentation" ><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"> Privileged docs </a></li>
                        <li role="presentation" ><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"> Favorite docs </a></li>
                        <li role="presentation" ><a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab"> Recent docs </a></li>
                        <li role="presentation" ><a href="#tab6" aria-controls="tab6" role="tab" data-toggle="tab"> User docs </a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active show fade in" id="tab1">
                            <div class="table-responsive">
                                <div>
                                    <div class="d-inline-block">
                                        <i class="fas fa-folder-open"></i>
                                        <h6 class="d-inline-block">My Docs</h6>
                                    </div>
                                    <div class="form-group has-search float-md-right">
                                        <span class="fa fa-search form-control-feedback"></span>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                                <table class="table table-hover thead-primary">
                                    <thead>
                                    <tr>
                                        <th scope="col">
                                            <label class="ms-checkbox-wrap ms-checkbox-primary">
                                                <input type="checkbox" value="" > <i class="ms-checkbox-check"></i>
                                            </label>
                                        </th>
                                        <th scope="col">Document Name</th>
                                        <th scope="col">Modified</th>
                                        <th scope="col"></th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">
                                            <label class="ms-checkbox-wrap ms-checkbox-primary">
                                                <input type="checkbox" value=""> <i class="ms-checkbox-check"></i>
                                            </label>
                                        </th>
                                        <td>
                                            <a href="list-employee.php">
                                                <i class="fas fa-folder-open"></i>
                                                List of Employee
                                            </a>

                                        </td>

                                        </td>
                                        <td>12/10/19</td>
                                        <td>
                                            <a href="#"><i class="material-icons">star</i></a>
                                            <a href="#"><i class="fas fa-pencil-alt text-secondary"></i></a>
                                            <a href="#"><i class="far fa-trash-alt ms-text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <label class="ms-checkbox-wrap ms-checkbox-primary">
                                                <input type="checkbox" value="" > <i class="ms-checkbox-check"></i>
                                            </label>
                                        </th>

                                        <td>
                                            <i class="fas fa-file-alt"></i>
                                            My Resume
                                        </td>
                                        <td>12/10/19</td>
                                        <td>
                                            <a href="#"><i class="material-icons">star</i></a>
                                            <a href="#"><i class="fas fa-pencil-alt text-secondary"></i></a>
                                            <a href="#"><i class="far fa-trash-alt ms-text-danger"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <a href="#"><b>Delete</b></a>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab2">
                            <div class="table-responsive">
                                <div>
                                    <div class="d-inline-block">
                                        <i class="fas fa-folder-open"></i>
                                        <h6 class="d-inline-block">Shared Document</h6>
                                    </div>
                                    <div class="form-group has-search float-md-right">
                                        <span class="fa fa-search form-control-feedback"></span>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                                <table class="table table-hover thead-primary">
                                    <thead>
                                    <tr>
                                        <th scope="col">
                                            <label class="ms-checkbox-wrap ms-checkbox-primary">
                                                <input type="checkbox" value="" > <i class="ms-checkbox-check"></i>
                                            </label>
                                        </th>
                                        <th scope="col">Document Name</th>
                                        <th scope="col">Modified</th>
                                        <th scope="col"></th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">
                                            <label class="ms-checkbox-wrap ms-checkbox-primary">
                                                <input type="checkbox" value=""> <i class="ms-checkbox-check"></i>
                                            </label>
                                        </th>
                                        <td>
                                            <i class="fas fa-folder-open"></i>
                                            List of Employee
                                        </td>

                                        </td>
                                        <td>12/10/19</td>
                                        <td>
                                            <a href="#"><i class="material-icons">star</i></a>
                                            <a href="#"><i class="fas fa-pencil-alt text-secondary"></i></a>
                                            <a href="#"><i class="far fa-trash-alt ms-text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <label class="ms-checkbox-wrap ms-checkbox-primary">
                                                <input type="checkbox" value="" > <i class="ms-checkbox-check"></i>
                                            </label>
                                        </th>

                                        <td>
                                            <i class="fas fa-file-alt"></i>
                                            My Resume
                                        </td>
                                        <td>12/10/19</td>
                                        <td>
                                            <a href="#"><i class="material-icons">star</i></a>
                                            <a href="#"><i class="fas fa-pencil-alt text-secondary"></i></a>
                                            <a href="#"><i class="far fa-trash-alt ms-text-danger"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <a href="#"><b>Delete</b></a>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab3">
                            <div class="table-responsive">
                                <div>
                                    <div class="d-inline-block">
                                        <i class="fas fa-folder-open"></i>
                                        <h6 class="d-inline-block">Privileged Docs</h6>
                                    </div>
                                    <div class="form-group has-search float-md-right">
                                        <span class="fa fa-search form-control-feedback"></span>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                                <table class="table table-hover thead-primary">
                                    <thead>
                                    <tr>
                                        <th scope="col">
                                            <label class="ms-checkbox-wrap ms-checkbox-primary">
                                                <input type="checkbox" value="" > <i class="ms-checkbox-check"></i>
                                            </label>
                                        </th>
                                        <th scope="col">Document Name</th>
                                        <th scope="col">Modified</th>
                                        <th scope="col"></th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">
                                            <label class="ms-checkbox-wrap ms-checkbox-primary">
                                                <input type="checkbox" value=""> <i class="ms-checkbox-check"></i>
                                            </label>
                                        </th>
                                        <td>
                                            <a href="cofidential.php">
                                                <i class="fas fa-folder-open"></i>
                                                Confidendial
                                            </a>
                                        </td>

                                        </td>
                                        <td>12/10/19</td>
                                        <td>
                                            <a href="#"><i class="material-icons">star</i></a>
                                            <a href="#"><i class="far fa-trash-alt ms-text-danger"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <a href="#"><b>Delete</b></a>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab4">
                            <div class="table-responsive">
                                <div>
                                    <div class="d-inline-block">
                                        <i class="fas fa-folder-open"></i>
                                        <h6 class="d-inline-block">Favorite Docs</h6>
                                    </div>
                                    <div class="form-group has-search float-md-right">
                                        <span class="fa fa-search form-control-feedback"></span>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                                <table class="table table-hover thead-primary">
                                    <thead>
                                    <tr>
                                        <th scope="col">
                                            <label class="ms-checkbox-wrap ms-checkbox-primary">
                                                <input type="checkbox" value="" > <i class="ms-checkbox-check"></i>
                                            </label>
                                        </th>
                                        <th scope="col">Document Name</th>
                                        <th scope="col">Modified</th>
                                        <th scope="col"></th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">
                                            <label class="ms-checkbox-wrap ms-checkbox-primary">
                                                <input type="checkbox" value=""> <i class="ms-checkbox-check"></i>
                                            </label>
                                        </th>
                                        <td>
                                            <i class="fas fa-folder-open"></i>
                                            List of Employee
                                        </td>

                                        </td>
                                        <td>12/10/19</td>
                                        <td>
                                            <a href="#"><i class="material-icons">star</i></a>
                                            <a href="#"><i class="fas fa-pencil-alt text-secondary"></i></a>
                                            <a href="#"><i class="far fa-trash-alt ms-text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <label class="ms-checkbox-wrap ms-checkbox-primary">
                                                <input type="checkbox" value="" > <i class="ms-checkbox-check"></i>
                                            </label>
                                        </th>

                                        <td>
                                            <i class="fas fa-file-alt"></i>
                                            My Resume
                                        </td>
                                        <td>12/10/19</td>
                                        <td>
                                            <a href="#"><i class="material-icons">star</i></a>
                                            <a href="#"><i class="fas fa-pencil-alt text-secondary"></i></a>
                                            <a href="#"><i class="far fa-trash-alt ms-text-danger"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <a href="#"><b>Delete</b></a>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab5">
                            <div class="table-responsive">
                                <div>
                                    <div class="d-inline-block">
                                        <i class="fas fa-folder-open"></i>
                                        <h6 class="d-inline-block">Recent Docs</h6>
                                    </div>
                                    <div class="form-group has-search float-md-right">
                                        <span class="fa fa-search form-control-feedback"></span>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                                <table class="table table-hover thead-primary">
                                    <thead>
                                    <tr>
                                        <th scope="col">
                                            <label class="ms-checkbox-wrap ms-checkbox-primary">
                                                <input type="checkbox" value="" > <i class="ms-checkbox-check"></i>
                                            </label>
                                        </th>
                                        <th scope="col">Document Name</th>
                                        <th scope="col">Modified</th>
                                        <th scope="col"></th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">
                                            <label class="ms-checkbox-wrap ms-checkbox-primary">
                                                <input type="checkbox" value=""> <i class="ms-checkbox-check"></i>
                                            </label>
                                        </th>
                                        <td>
                                            <i class="fas fa-folder-open"></i>
                                            List of Employee
                                        </td>

                                        </td>
                                        <td>12/10/19</td>
                                        <td>
                                            <a href="#"><i class="material-icons">star</i></a>
                                            <a href="#"><i class="far fa-trash-alt ms-text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <label class="ms-checkbox-wrap ms-checkbox-primary">
                                                <input type="checkbox" value="" > <i class="ms-checkbox-check"></i>
                                            </label>
                                        </th>

                                        <td>
                                            <i class="fas fa-file-alt"></i>
                                            Announcement 2
                                        </td>
                                        <td>12/10/19</td>
                                        <td>
                                            <a href="#"><i class="fas fa-pencil-alt text-secondary"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <label class="ms-checkbox-wrap ms-checkbox-primary">
                                                <input type="checkbox" value="" > <i class="ms-checkbox-check"></i>
                                            </label>
                                        </th>

                                        <td>
                                            <i class="fas fa-file-alt"></i>
                                            Announcement
                                        </td>
                                        <td>12/10/19</td>
                                        <td>
                                            <a href="#"><i class="fas fa-pencil-alt text-secondary"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <label class="ms-checkbox-wrap ms-checkbox-primary">
                                                <input type="checkbox" value="" > <i class="ms-checkbox-check"></i>
                                            </label>
                                        </th>

                                        <td>
                                            <i class="fas fa-file-alt"></i>
                                            My Resume
                                        </td>
                                        <td>12/10/19</td>
                                        <td>
                                            <a href="#"><i class="material-icons">star</i></a>
                                            <a href="#"><i class="far fa-trash-alt ms-text-danger"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <a href="#"><b>Delete</b></a>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab6">
                            <div class="table-responsive">
                                <div>
                                    <div class="form-group has-search">
                                        <label for="">Search User</label>
                                        <span class="fa fa-search form-control-feedback"></span>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                                <table class="table table-hover thead-primary">
                                    <thead>
                                    <tr>
                                        <th scope="col">
                                            <label class="ms-checkbox-wrap ms-checkbox-primary">
                                                <input type="checkbox" value="" > <i class="ms-checkbox-check"></i>
                                            </label>
                                        </th>
                                        <th scope="col">Document Name</th>
                                        <th scope="col">Modified</th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">
                                            <label class="ms-checkbox-wrap ms-checkbox-primary">
                                                <input type="checkbox" value=""> <i class="ms-checkbox-check"></i>
                                            </label>
                                        </th>
                                        <td>
                                            <a href="user-docs.php">
                                                <i class="fas fa-folder-open"></i>
                                                My Docs
                                            </a>
                                        </td>
                                        </td>
                                        <td>12/10/19</td>
                                        <td>
                                            <a href="#"><i class="fas fa-pencil-alt text-secondary"></i></a>
                                            <a href="#"><i class="far fa-trash-alt ms-text-danger"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ms-panel docs w-100" style="display: none">
                <div class="ms-panel-header">
                    <h6>Documents</h6>
                </div>
                <div class="ms-panel-body">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-6">
                                <h6 class="text-primary">Select users</h6>
                                <div class="row mb-4">

                                    <div class="col-lg-4 col-md-2">
                                        <label class="">Select department :</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>English</option>
                                                <option>English</option>
                                                <option>English</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-2">
                                        <label for="validationCustom37">Select people</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="ms-card ms-widget ms-card-fh">
                                            <div class="ms-card-header clearfix">
                                                <h6 class="ms-card-title">Select All</h6>
                                            </div>
                                            <div class="ms-card-body">
                                                <ul class="ms-list ms-task-block">
                                                    <li class="">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="">
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Muhammad Saleem</span>

                                                    </li>
                                                    <li class="">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="">
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Muhammad Sufiyan sh...</span>

                                                    </li>
                                                </ul>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-2">
                                        <label class="">Select a batch :</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>Pg-Blue</option>

                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-2">
                                        <label for="validationCustom37">Select People</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="ms-card ms-widget ms-card-fh">
                                            <div class="ms-card-header clearfix">
                                                <h6 class="ms-card-title">Select All</h6>
                                            </div>
                                            <div class="ms-card-body">
                                                <ul class="ms-list ms-task-block">
                                                    <li class="">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="">
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Muhammad Saleem</span>

                                                    </li>
                                                </ul>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="btn btn-primary width70">Save</div>
                            </div>
                            <div class="col-lg-6">
                                <div class="pl-4 border-left ">
                                    <label for="validationCustom37">Member</label>
                                    <div class="ms-card ms-widget ms-card-fh">
                                        <div class="ms-card-body">
                                            <ul class="ms-list ms-task-block">
                                                <li class="">
                                                    <label class="ms-checkbox-wrap">
                                                        <i class="fas fa-window-close text-primary"></i>
                                                    </label>
                                                    <span> Muhammad Saleem</span>

                                                </li>
                                                <li class="">
                                                    <label class="ms-checkbox-wrap">
                                                        <i class="fas fa-window-close text-primary"></i>
                                                    </label>
                                                    <span> Muhammad Sufiyan sh...</span>

                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border-bottom mt-4 pb-4">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="">Document Name :</label>
                                    </div>
                                    <div class="col-md-8">
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="">File :</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="validatedCustomFile">
                                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1">
                                <a href="#">
                                    <i class="fas fa-window-close"></i>
                                </a>

                            </div>
                        </div>
                        <div class="pt-4">
                            <a href="#">+ Add File</a>
                            <button class="btn btn-primary ml-4 mt-0">Submit</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="ms-panel folder w-100" style="display: none">
                <div class="ms-panel-header">
                    <h6>Folder</h6>
                </div>
                <div class="ms-panel-body">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-6">
                                <h6 class="mb-4 text-primary">Create folder</h6>
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-2">
                                        <label class="">Folder Name :</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleName" placeholder="List of Employee">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-2">
                                        <label class="">Select Department :</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>English</option>
                                                <option>English</option>
                                                <option>English</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-2">
                                        <label for="validationCustom37">Select People</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="ms-card ms-widget ms-card-fh">
                                            <div class="ms-card-header clearfix">
                                                <h6 class="ms-card-title">Select All</h6>
                                            </div>
                                            <div class="ms-card-body">
                                                <ul class="ms-list ms-task-block">
                                                    <li class="">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="">
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Muhammad Saleem</span>

                                                    </li>
                                                    <li class="">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="">
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Muhammad Sufiyan sh...</span>

                                                    </li>
                                                </ul>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-2">
                                        <label class="">Select a Batch :</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>Pg-Blue</option>

                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-2">
                                        <label for="validationCustom37">Select People</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="ms-card ms-widget ms-card-fh">
                                            <div class="ms-card-header clearfix">
                                                <h6 class="ms-card-title">Select All</h6>
                                            </div>
                                            <div class="ms-card-body">
                                                <ul class="ms-list ms-task-block">
                                                    <li class="">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="">
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Muhammad Saleem</span>

                                                    </li>
                                                </ul>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="btn btn-primary width70">Save</div>
                            </div>
                            <div class="col-lg-6">
                                <div class="pl-4 border-left ">
                                    <label for="validationCustom37">Member</label>
                                    <div class="ms-card ms-widget ms-card-fh">
                                        <div class="ms-card-body">
                                            <ul class="ms-list ms-task-block">
                                                <li class="">
                                                    <label class="ms-checkbox-wrap">
                                                        <i class="fas fa-window-close text-primary"></i>
                                                    </label>
                                                    <span> Muhammad Saleem</span>

                                                </li>
                                                <li class="">
                                                    <label class="ms-checkbox-wrap">
                                                        <i class="fas fa-window-close text-primary"></i>
                                                    </label>
                                                    <span> Muhammad Sufiyan sh...</span>

                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border-bottom mt-4 pb-4">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="">Document Name :</label>
                                    </div>
                                    <div class="col-md-8">
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="">File :</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="validatedCustomFile">
                                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1">
                                <a href="#">
                                    <i class="fas fa-window-close"></i>
                                </a>

                            </div>
                        </div>
                        <div class="pt-4">
                            <a href="#">+ Add File</a>
                            <button class="btn btn-primary ml-4 mt-0">Submit</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="ms-panel privileged w-100" style="display: none">
                <div class="ms-panel-header">
                    <h6>Create Privileged Folder</h6>
                </div>
                <div class="ms-panel-body">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-6">
                                <h6 class="mb-4 text-primary">Create folder</h6>
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-2">
                                        <label class="">Folder Name :</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleName" placeholder="Confidential">
                                        </div>
                                    </div>
                                </div>
                                <h6 class="mb-4 text-primary">Add menber with 'Upload' privilege</h6>
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-2">
                                        <label class="">Select Department :</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>English</option>
                                                <option>English</option>
                                                <option>English</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-2">
                                        <label for="validationCustom37">Select People</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="ms-card ms-widget ms-card-fh">
                                            <div class="ms-card-header clearfix">
                                                <h6 class="ms-card-title">Select All</h6>
                                            </div>
                                            <div class="ms-card-body">
                                                <ul class="ms-list ms-task-block">
                                                    <li class="">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="">
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Muhammad Saleem</span>

                                                    </li>
                                                    <li class="">
                                                        <label class="ms-checkbox-wrap">
                                                            <input type="checkbox" value="">
                                                            <i class="ms-checkbox-check"></i>
                                                        </label>
                                                        <span> Muhammad Sufiyan sh...</span>

                                                    </li>
                                                </ul>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="btn btn-primary width70">Submit</div>
                            </div>
                            <div class="col-lg-6">
                                <div class="pl-4 border-left ">
                                    <label for="validationCustom37">Upload Privileged Member</label>
                                    <div class="ms-card ms-widget ms-card-fh">
                                        <div class="ms-card-body">
                                            <ul class="ms-list ms-task-block">
                                                <li class="">
                                                    <label class="ms-checkbox-wrap">
                                                        <i class="fas fa-window-close text-primary"></i>
                                                    </label>
                                                    <span> Muhammad Saleem</span>

                                                </li>
                                                <li class="">
                                                    <label class="ms-checkbox-wrap">
                                                        <i class="fas fa-window-close text-primary"></i>
                                                    </label>
                                                    <span> Muhammad Sufiyan sh...</span>

                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="ms-panel user-specific w-100" style="display: none">
                <div class="ms-panel-header">
                    <h6>User-Specific Document</h6>
                </div>
                <div class="ms-panel-body">
                    <h6 class="text-primary mb-4">Create User-Specific Folder</h6>
                    <form>
                        <div class="row">
                            <div class="col-md-2">
                                <label class="">Folder Name :</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleName" placeholder="List D">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="">Category</label>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <ul class="ms-list d-flex">
                                    <li class="m-auto">
                                        <input type="checkbox" value="" >
                                    </li>
                                    <li class="m-auto">
                                        <input type="checkbox" value="">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="">Status :</label>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <ul class="ms-list d-flex">
                                    <li class="ms-list-item m-0 p-1">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample" value="" checked=""> <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span> Active </span>
                                    </li>
                                    <li class="ms-list-item  m-0  p-1">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample" value=""> <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span> Inactive </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary">Submit</button>

                    <div class="table-responsive">
                        <table id="" class="table w-100 mt-4 thead-primary border-1">
                            <thead>
                            <tr>
                                <th colspan="col">Active Folder</th>
                                <th colspan="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>My Files</td>

                                <td class="text-right">
                                    <a href="" class="nav-item" data-toggle="modal" data-target="#modal-3">Edit</a> |
                                    <a href="" class="nav-item">Delete</a>
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

<!-- footer -->

<?php require 'footer.php';?>
<script>
    // create docs
    $(".create-docs").on("click",function(){
        $(".docs").css("display","block")
    });

    // my folder
    $(".create-folder").on("click",function(){
        $(".folder").css("display","block")
    });

    // my privileged
    $(".create-privileged").on("click",function(){
        $(".privileged").css("display","block")
    });

    // my User-specific
    $(".create-user-specific").on("click",function(){
        $(".user-specific").css("display","block")
    });
</script>
<!-- footer -->



