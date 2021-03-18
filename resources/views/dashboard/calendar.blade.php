@extends('layout.dash')

@section('content')
    <!-- Header -->
    <div class="header">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h1 text-white d-inline-block mb-0 txt-dark">Calendar</h6>
                        <p>These are your appointments today.</p>
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

        <div class="card">
            <div class="card-header border-0">
                <div class="row">
                    <div class="col">
                        <button type="button" class="btn btn-icon-only rounded-circle btn-4">
                            <span class="btn-inner--icon"><i class="fa fa-arrow-left"></i></span>
                        </button>
                        <h6 class="d-inline-block mb-0 txt-10">March, 2021</h6>
                        <button type="button" class="btn btn-icon-only rounded-circle btn-4">
                            <span class="btn-inner--icon"><i class="fa fa-arrow-right"></i></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

@endsection


@section('script')
<script>
    $(".pay-img").on("click", function() {
        // $.ajax({
        //     url: '/sign-up',
        //     method: 'post',
        //     data: {

        //     },
        //     dataType: false,
        //     success: function(data) {
        //         alert(data)
        //     }
        // });
        window.location.href = "/search";
    })
    $(document).ready(function() {
        $(".file-1 .dz-message span").html("<i class='fa fa-camera'></i> Upload photos");
        $(".file-2 .dz-message span").html("<i class='fa fa-cloud'></i> Upload files");
    });
</script>
@endsection