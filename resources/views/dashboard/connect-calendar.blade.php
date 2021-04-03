@extends('layout.dash')

@section('style')
<link rel="stylesheet" href="{{ asset('css/flags.css') }}">
<link rel="stylesheet" href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1569006288/BBBootstrap/choices.min.css?version=7.0.0">
<style>

</style>
@endsection
@section('content')
<div class="is-active" val="setting"></div>
    <!-- Header -->
    <div class="header">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-8 col-8">
                        <a href="/setting" class="h1 d-inline-block mb-0 txt-dark my-auto medium  txt-11">Settings</a>
                        <a href="/work" class="h1 d-inline-block mb-0 txt-dark medium my-auto txt-11">Work</a>
                        <a href="/company-info" class="h1 d-inline-block mb-0 txt-dark my-auto medium txt-11">Company Information</a>
                        <a class="h1 d-inline-block mb-0 txt-dark my-auto txt-12">Connect Calendar</a>
                    </div>
                    <div class="col-lg-4 col-4 text-right">
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
                    <a class="nav-link active pt-3" id="v-pills-one-tab" data-toggle="pill" href="#v-pills-one" role="tab" aria-controls="v-pills-one" aria-selected="true">Calendar integration</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content" id="v-pills-tabContent">

                    <!-- Calendar integration -->
                    <div class="tab-pane show active container-fluid pt-5 pb-3" id="v-pills-one" role="one" aria-labelledby="v-pills-one-tab">
                        <h3>CLAENDAR INTEGRAION</h3>

                        <div class="box-12 mt-3">
                            <img src="{{ asset('image/icon-1.png') }}" alt="">
                        </div>

                        <p class="mt-4">Sync your calendar in GoodJob with major email clients including: <br>
                            GMAIL, Office365, Yahoo and Outlook <br>
                            <br>
                            The calendar sync service is powered by Nylas in subject to their Terms of Use and Privacy Policy.</p>
                        
                        <button type="button" class="btn-9 mt-4">Add new account</button>
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