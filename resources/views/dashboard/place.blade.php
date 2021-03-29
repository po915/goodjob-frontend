@extends('layout.dash')

@section('style')
<link href="https://api.tiles.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css" rel="stylesheet" />
@endsection

@section('content')
    <!-- Header -->
    <div class="header">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-8 col-7">
                        <h1 class="d-inline-block mb-0 txt-dark my-auto">Places</h1>
                        <p>These are you appointments nearby.</p>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7">
                <div id="map-2"></div>
            </div>
            <div class="col-lg-5">
                <div class="card ml-2">
                    <!-- Card header -->
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <!-- Title -->
                                <h5 class="h3 mb-0">Distance</h5>
                            </div>
                            <div class="col-4 text-right">
                                <p>25, July</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card bg-grey distance-card mb-1" job-id="1">
                            <!-- Card body -->
                            <div class="card-body py-4">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <h2>15 km</h2>
                                    </div>
                                    <div class="col ml--2">
                                        <h4 class="mb-0">
                                            <a href="#!">AVIA gas station</a>
                                        </h4>
                                        <p class="text-sm text-muted mb-0">Lorem ipsum dolor sit amet consectetur</p>
                                        
                                    </div>
                                    <div class="col-auto">
                                        <span class="text-success">●</span>
                                        <small>Done</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-sub-distance bg-grey mb-1 detail-1">
                            <h4 class="mt-4 ml-3 ">Update printer driver</h4>
                            <p class="ml-3">COO1</p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 px-0">  
                                        <p class="txt-13"><span>Start Date: </span>Thursday, July 24th | 5:30 PM</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 px-0">  
                                        <p class="txt-13"><span>End Date: </span>Thursday, July 24th | 5:30 PM</p>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-6 col-md-6 col-sm-12 px-0">  
                                        <p class="txt-14"> <span>CustomerCoop WareHouse:</span></p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 px-0">  
                                        <p class="txt-14"><span>Address: </span>Staingess 7 4234 lorem ipsum</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 px-0">  
                                        <p class="txt-14"> <span>Contact Person: </span>Jane Snow</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 px-0">  
                                        <p class="txt-14"><span>Responsible: </span>Jane Winter</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 px-0">  
                                        <p class="txt-14"> <span>Phone: </span>+1 234 567 8901</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 px-0">  
                                        <p class="txt-14"><span>Place of Use: </span>Somewhere anywhere</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 px-0">  
                                        <p class="txt-14"> <span>Email: </span>loremipsum@www.com</p>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <button class="btn-8"><i class="fa fa-folder"></i> Request a job</button>
                                </div>
                                
                            </div>
                        </div>

                        <div class="card bg-grey distance-card mb-1" job-id="2">
                            <!-- Card body -->
                            <div class="card-body py-4">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <h2>15 km</h2>
                                    </div>
                                    <div class="col ml--2">
                                        <h4 class="mb-0">
                                            <a href="#!">AVIA gas station</a>
                                        </h4>
                                        <p class="text-sm text-muted mb-0">Lorem ipsum dolor sit amet consectetur</p>
                                        
                                    </div>
                                    <div class="col-auto">
                                        <span class="text-success">●</span>
                                        <small>Done</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-sub-distance bg-grey mb-1 detail-2">
                            <h4 class="mt-4 ml-3 ">Update printer driver</h4>
                            <p class="ml-3">COO1</p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 px-0">  
                                        <p class="txt-13"><span>Start Date: </span>Thursday, July 24th | 5:30 PM</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 px-0">  
                                        <p class="txt-13"><span>End Date: </span>Thursday, July 24th | 5:30 PM</p>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-6 col-md-6 col-sm-12 px-0">  
                                        <p class="txt-14"> <span>CustomerCoop WareHouse:</span></p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 px-0">  
                                        <p class="txt-14"><span>Address: </span>Staingess 7 4234 lorem ipsum</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 px-0">  
                                        <p class="txt-14"> <span>Contact Person: </span>Jane Snow</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 px-0">  
                                        <p class="txt-14"><span>Responsible: </span>Jane Winter</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 px-0">  
                                        <p class="txt-14"> <span>Phone: </span>+1 234 567 8901</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 px-0">  
                                        <p class="txt-14"><span>Place of Use: </span>Somewhere anywhere</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 px-0">  
                                        <p class="txt-14"> <span>Email: </span>loremipsum@www.com</p>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <button class="btn-8"><i class="fa fa-folder"></i> Request a job</button>
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
<script src="https://api.tiles.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
<script>
    $(".distance-card").on("click", function() {
        var job_id = $(this).attr('job-id');
        $(".detail-"+job_id).slideToggle("slow");
    })
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
    $(document).ready(function () {
        $("#imageUpload").change(function (data) {
            var imageFile = data.target.files[0];
            var reader = new FileReader();
            reader.readAsDataURL(imageFile);

            reader.onload = function (evt) {
                $("#imagePreview").attr("src", evt.target.result);
                $("#imagePreview").hide();
                $("#imagePreview").fadeIn(650);
            };
        });
    });
    mapboxgl.accessToken = "pk.eyJ1IjoiY29tbWE5MTUiLCJhIjoiY2trajB6czdkMjluazJ3cGF1ampyeHMwbCJ9.MK9s2uQZxIaJMZiBCk3bjA";

    var geojson = {
        type: "FeatureCollection",
        features: [
            {
                type: "Feature",
                geometry: {
                    type: "Point",
                    coordinates: [-77.032, 38.913],
                },
                properties: {
                    title: "Mapbox",
                    description: "Washington, D.C.",
                },
            },
        ],
    };
    var map = new mapboxgl.Map({
        container: "map-2",
        style: "mapbox://styles/mapbox/streets-v9",
        center: [-77.032, 38.913],
        zoom: 9,
    });

    // add markers to map
    geojson.features.forEach(function (marker) {
        var markerbox = document.createElement("div");
        var mark      = document.createElement("div");
        var avatar    = document.createElement("img");
        var after     = document.createElement("img");
        markerbox.className = "marker-box";
        mark.className    = "marker";
        avatar.className    = "mark-avatar";
        after.className     = "mark-after";
        avatar.src = "{{ asset('image/map-avatar.jpg') }}"
        after.src  = "{{ asset('image/ripple.svg') }}"
        mark.append(avatar);
        
        markerbox.append(mark);
        markerbox.append(after);

        new mapboxgl.Marker(markerbox,{ offset: [-28, -50] })
            .setLngLat(marker.geometry.coordinates)
            .addTo(map);
    });
    map.on('load', function() {
        var btn = document.getElementsByClassName('sidenav-toggler');
        // console.log(btn);
        btn.onclick = function() {
            alert();
        }
        // fixButton.onclick = function() {
        //     // map.resize();
        //     alert();
        // }
        
    });
</script>
@endsection