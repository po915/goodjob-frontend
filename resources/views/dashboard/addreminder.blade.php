@extends('layout.dash')

@section('content')
    <!-- Header -->
    <div class="header">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row mb--3 mt-2 ml-1">
                    <button type="button" class="btn  bg-base text-white btn-icon-only rounded-circle my-auto" id="back">
                        <span class="btn-inner--icon"><i class="fa fa-arrow-left"></i></span>
                    </button>
                    <h4 class="my-auto ml-2">Back</h4>
                </div>

                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h1 class="d-inline-block mb-0 txt-dark">Add Reminder</h1>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <button type="button" class="btn btn-twitter btn-icon-only rounded-circle">
                            <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
                        </button>
                        <div class="dropdown">
                            <a class="btn btn-sm btn-icon-only text-light bg-white shadow" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid">
        <div class="container-fluid page-content py-5">
            <div class="col-md-7 col-sm-12">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="form-control-label" for="industry">Reminder type</label>
                            <select id="industry" class="custom-select-1" placeholder="Industry">
                                <option value="it">Type 1</option>
                                <option value="sas">Type 2</option>
                                <option value="web">Type 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="title">Reminder title</label>
                            <input type="text" class="form-control" id="title" placeholder="Reminder title">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="form-control-label" for="description">Job description</label>
                            <textarea class="form-control" id="description" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="pl-3">REMINDER DETAILS</h4>
            <div class="col-md-7 col-sm-12">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="form-control-label" for="industry">Date</label>
                            <input class="form-control datepicker" placeholder="Select date" type="text" value="MM/DD/YYYY">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="form-control-label" for="industry">Repeat</label>
                            <select id="industry" class="custom-select-1" placeholder="Industry">
                                <option value="it">Type 1</option>
                                <option value="sas">Type 2</option>
                                <option value="web">Type 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="form-control-label" for="industry">Time</label>
                            <input class="form-control" placeholder="Select time" type="time" value="MM/DD/YYYY">
                        </div>
                    </div>
                </div>
                <label class="custom-checkbox">
                    <div>Email reminder</div>
                    <input type="checkbox" id="email-reminder"><span class="checkmark"></span>
                </label>
                <div class="row">
                    <button type="button" class="btn btn-default ml-3 mt-4">Save</button>
                    <button type="button" class="btn btn-default mt-4">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    


@endsection


@section('script')

<script>
$("#back").on("click", function() {
    window.location.href = "/reminder";
})
</script>
@endsection