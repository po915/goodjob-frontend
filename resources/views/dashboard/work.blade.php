@extends('layout.dash')

@section('style')
<link rel="stylesheet" href="{{ asset('css/flags.css') }}">
<link rel="stylesheet" href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1569006288/BBBootstrap/choices.min.css?version=7.0.0">
<style>

</style>
@endsection
@section('content')
    <!-- Header -->
    <div class="header">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-8 col-7">
                        <a href="/setting" class="h1 d-inline-block mb-0 txt-dark my-auto medium  txt-11">Settings</a>
                        &nbsp;&nbsp;&nbsp;
                        <a class="h1 d-inline-block mb-0 txt-dark my-auto txt-12">Work</a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="/company-info" class="h1 d-inline-block mb-0 txt-dark my-auto medium txt-11">Company Information</a>
                    </div>
                    <div class="col-lg-4 col-5 text-right">
                        <button type="button" class="btn btn-twitter btn-icon-only rounded-circle" data-toggle="modal" data-target="#addCustomer">
                            <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
                        </button>
                        <div class="dropdown">
                            <a class="btn btn-sm btn-icon-only text-light bg-white shadow" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                                <a class="dropdown-item" href="#">Import</a>
                                <a class="dropdown-item" href="#">Export</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid vertical-tabs">
        <div class="row">
            <div class="col-md-3">
                <div class="nav flex-column nav-pills cus-nav" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active pt-3" id="v-pills-one-tab" data-toggle="pill" href="#v-pills-one" role="tab" aria-controls="v-pills-one" aria-selected="true">Fieldworker app</a>
                    <a class="nav-link" id="v-pills-two-tab" data-toggle="pill" href="#v-pills-two" role="tab" aria-controls="v-pills-two" aria-selected="false">On my way tracking</a>
                    <a class="nav-link" id="v-pills-three-tab" data-toggle="pill" href="#v-pills-three" role="tab" aria-controls="v-pills-three" aria-selected="false">Email activity feed</a>
                    <a class="nav-link" id="v-pills-four-tab" data-toggle="pill" href="#v-pills-four" role="tab" aria-controls="v-pills-four" aria-selected="false">Job statuses</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content" id="v-pills-tabContent">

                    <!-- Fieldworkers app -->
                    <div class="tab-pane show active container-fluid pt-5 pb-3" id="v-pills-one" role="one" aria-labelledby="v-pills-one-tab">
                        <h3>ROLES & PERMISSION</h3>
                        <p>Select what you would like your fieldworkers to see in the jobs listing screen. <br>
                            You may want to hide or show things such as the Job number on your customers name.</p>
                        <h3 class="mt-4">FIELD WORKER APP SETTINGS</h3>
                        <div class="card card-6 mb-2">
                            <div class="card-body">
                                <label class="custom-checkbox mb-0">
                                    <div>Hide completed jobs from mobile app</div>
                                    <input type="checkbox" id="hide-day">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="card card-6 mt-2 mb-2">
                            <div class="card-body">
                                <label class="custom-checkbox mb-0">
                                    <div>Show job number</div>
                                    <input type="checkbox" id="hide-day">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="card card-6 mt-2 mb-2">
                            <div class="card-body">
                                <label class="custom-checkbox mb-0">
                                    <div>Show customer name</div>
                                    <input type="checkbox" id="hide-day">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="card card-6 mt-2 mb-2">
                            <div class="card-body">
                                <label class="custom-checkbox mb-0">
                                    <div>Show site name</div>
                                    <input type="checkbox" id="hide-day">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <button type="button" class="btn-9 mt-4">Save</button>
                    </div>
                    
                    <!-- On my way tracking -->
                    <div class="tab-pane fade container-fluid pt-5 pb-3" id="v-pills-two" role="two" aria-labelledby="v-pills-two-tab">
                        <div class="col flex">
                            <label class="custom-toggle my-auto">
                                <input type="checkbox" checked="">
                                <span class="custom-toggle-slider rounded-circle"></span>
                            </label>
                            <p class="my-auto ml-3">Allow your customers to see the location of your fieldworker and estimated time of arrival (ETA) on a map. <br>
                            (They will be sent a link via SMS and/or Email when the Fieldworker changes the job status to travelling).</p>
                        </div>
                        <div class="col flex mt-4">
                            <label class="custom-toggle my-auto">
                                <input type="checkbox" checked="">
                                <span class="custom-toggle-slider rounded-circle"></span>
                            </label>
                            <p class="my-auto ml-3">Hide fieldworker contact details</p>
                        </div>
                        <button type="button" class="btn-9 mt-4">Save</button>
                    </div>

                    <!-- Email activity feed -->
                    <div class="tab-pane fade container-fluid px-3" id="v-pills-three" role="three" aria-labelledby="v-pills-three-tab">
                        <div class="row bg-base py-3 px-3">
                            <div class="form-group mb-0">
                                <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text form-preicon-sm"><i class="fa fa-search"></i></span>
                                    </div>
                                    <input class="form-control form-control-sm" placeholder="Keyword" type="text">
                                </div>
                            </div>
                            <button class="btn-15 ml-3"><i class="fa fa-cloud-download"></i> Download XLS</button>
                        </div>
                        <div class="table-responsive mt-2" data-toggle="list" data-list-values='["name", "budget", "status", "completion"]'>
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="name">Status</th>
                                        <th scope="col" class="sort" data-sort="budget">Email</th>
                                        <th scope="col" class="sort" data-sort="status">Subject</th>
                                        <th scope="col" class="sort" data-sort="completion">Method</th>
                                        <th scope="col" class="sort" data-sort="completion">Time</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    <tr>
                                        <th scope="row">
                                            Open
                                        </th>
                                        <td class="budget">
                                            www@www.com
                                        </td>
                                        <td>
                                           Lorem ipsum
                                        </td>
                                        <td> 
                                            Auto
                                        </td>
                                        <td>10/07/2020</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Job status -->
                    <div class="tab-pane fade container-fluid pt-5 pb-3" id="v-pills-four" role="four" aria-labelledby="v-pills-four-tab">
                        <p class="mb-5">Status settings apply across system including mobile apps.</p>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="bg-grey py-3 px-3 card-8">
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-warning"></i>
                                        <span class="status">Waiting</span>
                                    </span>
                                    <p>Delete</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="bg-grey py-3 px-3 card-8">
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-purple"></i>
                                        <span class="status">In progress</span>
                                    </span>
                                    <p>Delete</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="bg-grey py-3 px-3 card-8">
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-green"></i>
                                        <span class="status">Completed</span>
                                    </span>
                                    <p>Delete</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="bg-grey py-3 px-3 card-8">
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-light"></i>
                                        <span class="status">Hold</span>
                                    </span>
                                    <p>Delete</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="bg-grey py-3 px-3 card-8">
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-yellow"></i>
                                        <span class="status">Attention</span>
                                    </span>
                                    <p>Delete</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="bg-grey py-3 px-3 card-8">
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-danger"></i>
                                        <span class="status">Cancelled</span>
                                    </span>
                                    <p>Delete</p>
                                </div>
                            </div>
                            
                        </div>

                        <button type="button" class="btn btn-12 mt-4" id="add-reminder" data-toggle="modal" data-target="#addStatus"><i class="fa fa-plus"></i> ADD STATUS</button>

                        <div class="row mt-3">
                            <p class="txt-21 ml-3">Reset all status</p>
                            <p class="txt-21 ml-3">Reset statuses to default name</p>
                        </div>

                        <button type="button" class="btn-9 mt-4">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="modal" id="addStatus">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add new status</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="status-color">Status Color</label>
                            <input class="form-control" type="color" value="#5e72e4" id="status-color">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="status-name">Status name</label>
                            <input class="form-control" type="text" id="status-name">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-base text-white" data-dismiss="modal" id="add-status">SAVE</button>
                <button type="button" class="btn bg-base text-white" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

@endsection


@section('script')
<script src="{{ asset('js/chosen.js') }}"></script>
<script src="{{ asset('js/jquery.flagstrap.min.js') }}"></script>
<script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1569006273/BBBootstrap/choices.min.js?version=7.0.0"></script>
<script>
$(".card-8 p").on("click", function () {
    $(this).parents().eq(1).hide();
})
</script>
@endsection