@extends('layout.dash')

@section('style')
<link rel="stylesheet" href="{{ asset('template/vendor/fullcalendar5.1/main.css') }}">
<style>

</style>

@endsection('style')

@section('content')
<div class="is-active" val="calendar"></div>
    <!-- Header -->
    <div class="header">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <!-- <h6 class="h1 text-white d-inline-block mb-0 txt-dark">Calendar</h6> -->
                        <a href="/calendar" class="h1 d-inline-block mb-0 txt-dark my-auto medium txt-11">Calendar</a>
                        &nbsp;&nbsp;&nbsp;
                        <a class="h1 d-inline-block mb-0 txt-dark my-auto txt-12">Scheduling</a>
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
        <div class="card card-3">
            <div class="card-header bg-base">
                <div class="container-fluid">
                    <form class="form-2 row-1 row">
                        <p class="h4 mb-0 text-white my-auto">Sory By : </p>
                        
                    </form>
                </div>
            </div>
            <div class="card-body">
                <h1>Unscheduled Jobs : 3</h1>
                
                <div class="flex">
                    <div class="card card-4 mr-3">
                        <div class="card-body" job-id="1">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <button type="button" class="btn bg-base btn-icon-only rounded-circle text-white">2</button>
                                </div>
                                <div class="col ml--2">
                                    <p class="mb-0 bold txt-dark">Maintenance in House Blabla</p>
                                    <p class="text-sm text-muted mb-0">Lorem Ipsum Dolor Sit</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-4-dropdown" id="card-4-1">
                            <h3 class="mb-0">Maintenance in House blabla</h3>
                            <p>Lorem ipsum dolor sit means...</p>
                            
                            <form class="form-3 row-1 row">
                                <select name="ort" id="ort" class="cus-select col" placeholder="Status : All">
                                    <option value="tiger"><span class="text-warning">●</span>Waiting</option>
                                    <option value="lion"><span class="text-warning">●</span>Pending</option>
                                    <option value="elephant">Done</option>
                                </select>
                            </form>


                        </div>
                    </div>
                    

                    <div class="card card-4 mr-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <button type="button" class="btn bg-base btn-icon-only rounded-circle text-white">3</button>
                                </div>
                                <div class="col ml--2">
                                    <p class="mb-0 bold txt-dark">Maintenance in House Blabla</p>
                                    <p class="text-sm text-muted mb-0">Lorem Ipsum Dolor Sit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
        
    </div>

    

@endsection


@section('script')
<script src="{{ asset('template/vendor/fullcalendar5.1/main.min.js') }}"></script>
<script>
$(".card-4 .card-body").on("click", function() {
    var job_id = $(this).attr('job-id');
    $("#card-4-"+job_id).slideToggle("slow");
});

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches(".dropbtn")) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains("show")) {
                openDropdown.classList.remove("show");
            }
        }
    }
};  
</script>
@endsection