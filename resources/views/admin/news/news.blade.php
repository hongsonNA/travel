@extends('layout/main')
@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" id="bordered-layout-icons">Timesheet</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                        <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                        <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content collpase show">
                <div class="card-body">

                    <div class="card-text">
                        <p>Add <code>.form-bordered</code> to form tag to add border to a form-group. In this example icons are used with form controls to show the bordered form functionality.</p>
                    </div>

                    <form class="form form-horizontal form-bordered">
                        <div class="form-body">
                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="timesheetinput1">Employee Name</label>
                                <div class="col-md-9">
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="timesheetinput1" class="form-control" placeholder="employee name" name="employeename">
                                        <div class="form-control-position">
                                            <i class="feather icon-user"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="timesheetinput2">Project Name</label>
                                <div class="col-md-9">
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="timesheetinput2" class="form-control" placeholder="project name" name="projectname">
                                        <div class="form-control-position">
                                            <i class="fa fa-briefcase"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="timesheetinput3">Date</label>
                                <div class="col-md-9">
                                    <div class="position-relative has-icon-left">
                                        <input type="date" id="timesheetinput3" class="form-control" name="date">
                                        <div class="form-control-position cc_cursor">
                                            <i class="feather icon-message-square"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control">Rate Per Hour</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Rate Per Hour" aria-label="Amount (to the nearest dollar)" name="rateperhour">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="timesheetinput5">Start Time</label>
                                <div class="col-md-9">
                                    <div class="position-relative has-icon-left">
                                        <input type="time" id="timesheetinput5" class="form-control" name="starttime">
                                        <div class="form-control-position">
                                            <i class="feather icon-clock"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="timesheetinput6">End Time</label>
                                <div class="col-md-9">
                                    <div class="position-relative has-icon-left">
                                        <input type="time" id="timesheetinput6" class="form-control" name="endtime">
                                        <div class="form-control-position">
                                            <i class="feather icon-clock"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row last">
                                <label class="col-md-3 label-control" for="timesheetinput7">Notes</label>
                                <div class="col-md-9">
                                    <div class="position-relative has-icon-left">
                                        <textarea id="timesheetinput7" rows="5" class="form-control" name="notes" placeholder="notes"></textarea>
                                        <div class="form-control-position">
                                            <i class="feather icon-file"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions right">
                            <button type="button" class="btn btn-warning mr-1">
                                <i class="feather icon-x"></i> Cancel
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-check-square-o"></i> Save
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection