<!-- header -->
<?php require 'header.php'; ?>

<!-- header -->
<style>
    .cstm_thead {
        background-color: #8D0302;
        color: white;
    }

    .cstm_border_left {
        border-left: none !important;
    }

    .cstm_border_right {
        border-right: none !important;
    }

    .cstm_text_vertical {
        writing-mode: tb-rl !important;
        text-orientation: sideways-right !important;
        font-size: 25px;
    }

    .context-menu {
        cursor: move;
    }

    .cstm_font {
        font-size: 13.5px;
    }
    .cstm_w{
        width: 100% !important;
    }
</style>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="ms-panel-header pt-0">
                <h6 class="d-md-inline"><i class="fa fa-building" aria-hidden="true"></i> Class Allocation</h6> | <small>New Allcoation</small>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Academic-TimeTable_sub.php">Timetable</a></li>
                    <li class="breadcrumb-item"><a href="Academic-TimeTable_classAllocate_sub.php">Class Allocation</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Allocate New</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-md-8 m-auto">
        <div class="row mt-5">
            <label class="col-md-2 mt-1 cstm_font">Allocation Type</label>
            <div class="col-md-3 d-flex">
                <div class="custom-control custom-radio custom-control">
                    <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
                    <label class="custom-control-label cstm_font" for="customRadio" onclick="show_weekly()">Weekly</label>
                </div>
                <div class="custom-control custom-radio custom-control ml-2">
                    <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
                    <label class="custom-control-label cstm_font" for="customRadio2" onclick="show_date()">Date Specific</label>
                </div>
            </div>
            <label class="col-md-2 mt-1 d-none" id="weekly_show_1">Time Table</label>
            <div class="col-md-3 d-none" id="weekly_show_2">
                <select class="form-control">
                    <option value="1 MAY 2020 - 31 MAY 2020">1 MAY 2020 - 31 MAY 2020</option>
                </select>
            </div>
            <div class="col-md-2" id="date_show_1">
                <select class="form-control">
                    <option selected>Month</option>
                </select>
            </div>
            <div class="col-md-2" id="date_show_2">
                <select class="form-control">
                    <option selected>Year</option>
                </select>
            </div>
            <div class="col-md-2">
                <a href="#" class="btn btn-primary m-0">View</a>
            </div>
        </div>
        
        <div class="d-none cstm_w" id="weekly_show">
            <div class="ms-card p-3 mt-5">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search Batch">
                </div>
                <div class="mt-2">
                    <ul class="nav nav-tabs d-flex nav-justified mb-4" role="tablist">
                        <li role="presentation"><a href="#tab13" aria-controls="tab13" class="active" role="tab" data-toggle="tab">MON</a></li>
                        <li role="presentation"><a href="#tab14" aria-controls="tab14" role="tab" data-toggle="tab">TUE</a></li>
                        <li role="presentation"><a href="#tab15" aria-controls="tab15" role="tab" data-toggle="tab">WED</a></li>
                        <li role="presentation"><a href="#tab16" aria-controls="tab16" role="tab" data-toggle="tab">THU</a></li>
                        <li role="presentation"><a href="#tab17" aria-controls="tab17" role="tab" data-toggle="tab">FRI</a></li>
                        <li role="presentation"><a href="#tab17" aria-controls="tab18" role="tab" data-toggle="tab">SAT</a></li>
                        <li role="presentation"><a href="#tab17" aria-controls="tab19" role="tab" data-toggle="tab">SUN</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active show fade in" id="tab13">
                        <div class="table-responsive">
                            <table id="data-table-4" class="table w-100 thead-primary table-bordered">
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-A-2010</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-B-2020</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G3-C-2003</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G5-D-2021</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane show fade in" id="tab14">
                        <div class="table-responsive">
                            <table id="data-table-4" class="table w-100 thead-primary table-bordered">
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-A-2010</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-B-2020</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G3-C-2003</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G5-D-2021</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane show fade in" id="tab15">
                        <div class="table-responsive">
                            <table id="data-table-4" class="table w-100 thead-primary table-bordered">
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-A-2010</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-B-2020</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G3-C-2003</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G5-D-2021</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane show fade in" id="tab16">
                        <div class="table-responsive">
                            <table id="data-table-4" class="table w-100 thead-primary table-bordered">
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-A-2010</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-B-2020</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G3-C-2003</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G5-D-2021</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane show fade in" id="tab17">
                        <div class="table-responsive">
                            <table id="data-table-4" class="table w-100 thead-primary table-bordered">
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-A-2010</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-B-2020</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G3-C-2003</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G5-D-2021</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane show fade in" id="tab18">
                        <div class="table-responsive">
                            <table id="data-table-4" class="table w-100 thead-primary table-bordered">
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-A-2010</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-B-2020</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G3-C-2003</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G5-D-2021</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane show fade in" id="tab19">
                        <div class="table-responsive">
                            <table id="data-table-4" class="table w-100 thead-primary table-bordered">
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-A-2010</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-B-2020</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G3-C-2003</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G5-D-2021</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cstm_w" id="date_show">
            <div class="ms-card p-3 mt-5">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search Batch">
                </div>
                <div class="mt-2 d-flex">
                    <h6 class="mt-3">May 2020</h6>
                    <ul class="nav nav-tabs d-flex nav-justified mb-4 ml-3" role="tablist">
                        <li role="presentation"><a href="#tab13" aria-controls="tab20" class="active" role="tab" data-toggle="tab">1 MON</a></li>
                        <li role="presentation"><a href="#tab14" aria-controls="tab21" role="tab" data-toggle="tab">2 TUE</a></li>
                        <li role="presentation"><a href="#tab15" aria-controls="tab22" role="tab" data-toggle="tab">3 WED</a></li>
                        <li role="presentation"><a href="#tab16" aria-controls="tab23" role="tab" data-toggle="tab">4 THU</a></li>
                        <li role="presentation"><a href="#tab17" aria-controls="tab24" role="tab" data-toggle="tab">5 FRI</a></li>
                        <li role="presentation"><a href="#tab17" aria-controls="tab25" role="tab" data-toggle="tab">6 SAT</a></li>
                        <li role="presentation"><a href="#tab17" aria-controls="tab26" role="tab" data-toggle="tab">7 SUN</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active show fade in" id="tab20">
                        <div class="table-responsive">
                            <table id="data-table-4" class="table w-100 thead-primary table-bordered">
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-A-2010</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-B-2020</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G3-C-2003</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G5-D-2021</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane show fade in" id="tab21">
                        <div class="table-responsive">
                            <table id="data-table-4" class="table w-100 thead-primary table-bordered">
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-A-2010</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-B-2020</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G3-C-2003</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G5-D-2021</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane show fade in" id="tab22">
                        <div class="table-responsive">
                            <table id="data-table-4" class="table w-100 thead-primary table-bordered">
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-A-2010</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-B-2020</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G3-C-2003</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G5-D-2021</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane show fade in" id="tab23">
                        <div class="table-responsive">
                            <table id="data-table-4" class="table w-100 thead-primary table-bordered">
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-A-2010</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-B-2020</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G3-C-2003</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G5-D-2021</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane show fade in" id="tab24">
                        <div class="table-responsive">
                            <table id="data-table-4" class="table w-100 thead-primary table-bordered">
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-A-2010</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-B-2020</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G3-C-2003</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G5-D-2021</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane show fade in" id="tab25">
                        <div class="table-responsive">
                            <table id="data-table-4" class="table w-100 thead-primary table-bordered">
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-A-2010</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-B-2020</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G3-C-2003</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G5-D-2021</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane show fade in" id="tab26">
                        <div class="table-responsive">
                            <table id="data-table-4" class="table w-100 thead-primary table-bordered">
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-A-2010</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G1-B-2020</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G3-C-2003</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="cstm_border_right">G5-D-2021</th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>English</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Mathamatics</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Physical Education</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Science</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Social Studies</p>
                                            <p class="text-muted">Asadullah</p>
                                            <div class="float-md-right">
                                                <label class="ms-checkbox-wrap m-0">
                                                    <input type="checkbox" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="alert alert-dark row">
            <div class="col-md-3">
                <select class="form-control">
                    <option value="Academic">Academic Block I</option>
                </select>
            </div>
            <div class="col-md-2">
               <a href="" data-toggle="modal" data-target="#modal_onDrag"><input readonly value="Room No. I" id="mydivheader" class="form-control"></a>
            </div>
            <div class="col-md-2">
                <a href="" data-toggle="modal" data-target="#modal_onDrag"><input readonly value="Room No. II" id="mydivheader" class="form-control"></a>
            </div>
            <div class="col-md-2">
                <a href="" data-toggle="modal" data-target="#modal_onDrag"><input readonly value="Room No. III" id="mydivheader" class="form-control"></a>
            </div>
        </div>
        
    </div>
</div>
<div class="modal fade" tabindex="-1" id="modal_onDrag" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title has-icon ms-icon-round"><i class="fa fa-exclamation-triangle fa-2x text-warning" aria-hidden="true"></i></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="col-md-12 m-auto">
                    <h6 class="text-danger">This Room Is Already Allocated For Same Class Timing</h6>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" href="#" data-dismiss="modal" class="btn btn-primary">Continiue</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script>
    var weekly_1 = document.querySelector("#weekly_show");
    var weekly_2 = document.querySelector("#weekly_show_1");
    var weekly_3 = document.querySelector("#weekly_show_2");

    var date_1 = document.querySelector("#date_show");
    var date_2 = document.querySelector("#date_show_1");
    var date_3 = document.querySelector("#date_show_2");

    function show_weekly() {
        weekly_1.classList.remove("d-none")
        weekly_2.classList.remove("d-none")
        weekly_3.classList.remove("d-none")
        date_1.classList.add("d-none")
        date_2.classList.add("d-none")
        date_3.classList.add("d-none")
    }

    function show_date() {
        weekly_1.classList.add("d-none")
        weekly_2.classList.add("d-none")
        weekly_3.classList.add("d-none")
        date_1.classList.remove("d-none")
        date_2.classList.remove("d-none")
        date_3.classList.remove("d-none")
    }
</script>
<!-- footer -->
<?php require 'footer.php'; ?>
<!-- footer -->