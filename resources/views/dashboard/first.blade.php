@extends('layout.dash')

@section('content')
    <!-- Header -->
    <div class="header">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0 txt-dark">Hello, Jane</h6>
                        <p>Welcome! This is your personal dashboard.</p>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="#" class="btn btn-sm btn-neutral">New</a>
                        <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card card-calendar">
                    <div class="card-header" style="display: flex;">
                        <div class="col-lg-3 mt-3 mt-lg-0 text-lg-left">
                            <h5 class="h3 mb-0">Calendar</h5>
                        </div>

                        <div class="col-lg-9 mt-3 mt-lg-0 text-lg-right">
                            <a href="#" class="btn btn-sm btn-neutral" data-calendar-view="month">Month</a>
                            <a href="#" class="btn btn-sm btn-neutral" data-calendar-view="basicWeek">Week</a>
                            <a href="#" class="btn btn-sm btn-neutral" data-calendar-view="basicDay">Day</a>
                            <button type="button" class="btn btn-icon-only rounded-circle fullcalendar-btn-prev btn-4">
                                <span class="btn-inner--icon"><i class="fa fa-arrow-left"></i></span>
                            </button>
                            <h6 class="fullcalendar-title d-inline-block mb-0"></h6>
                            <button type="button" class="btn btn-icon-only rounded-circle fullcalendar-btn-next btn-4">
                                <span class="btn-inner--icon"><i class="fa fa-arrow-right"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="calendar" data-toggle="calendar" id="calendar"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" style="padding-bottom: 30px;">
                <div class="card map-1">
                    <div id="map"></div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h5 class="h3 mb-0">Your next job</h5>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card next-job-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col ml--2">
                                            <h4 class="mb-0">
                                                <a href="#!">Maintenance in house blabla</a>
                                            </h4>
                                            <p class="text-sm text-muted mb-0">Lorem ipsum dolor Lorem ipsum dolor</p>
                                        </div>
                                        <p class="mb-0 work-time">09.00 - 12.00 AM</p>
                                        <small>Pending </small>
                                        <span class="text-warning">●</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card next-job-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col ml--2">
                                            <h4 class="mb-0">
                                                <a href="#!">Maintenance in house blabla</a>
                                            </h4>
                                            <p class="text-sm text-muted mb-0">Lorem ipsum dolor Lorem ipsum dolor</p>
                                        </div>
                                        <p class="mb-0 work-time">09.00 - 12.00 AM</p>
                                        <small>Pending </small>
                                        <span class="text-warning">●</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card next-job-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col ml--2">
                                            <h4 class="mb-0">
                                                <a href="#!">Maintenance in house blabla</a>
                                            </h4>
                                            <p class="text-sm text-muted mb-0">Lorem ipsum dolor Lorem ipsum dolor</p>
                                        </div>
                                        <p class="mb-0 work-time">09.00 - 12.00 AM</p>
                                        <small>Approved </small>
                                        <span class="text-success">●</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card next-job-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col ml--2">
                                            <h4 class="mb-0">
                                                <a href="#!">Maintenance in house blabla</a>
                                            </h4>
                                            <p class="text-sm text-muted mb-0">Lorem ipsum dolor Lorem ipsum dolor</p>
                                        </div>
                                        <p class="mb-0 work-time">09.00 - 12.00 AM</p>
                                        <small>Pending </small>
                                        <span class="text-warning">●</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Job Add Modal -->
<div class="modal fade" id="new-event" tabindex="-1" role="dialog" aria-labelledby="new-event-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-secondary" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form class="new-event--form">
                    <div class="form-group">
                        <label class="form-control-label">Job title</label>
                        <input type="text" class="form-control form-control-alternative new-event--title" placeholder="Event Title" />
                    </div>
                    <div class="form-group mb-0">
                        <label class="form-control-label d-block mb-3">Status color</label>
                        <div class="btn-group btn-group-toggle btn-group-colors event-tag" data-toggle="buttons">
                            <label class="btn bg-info active"><input type="radio" name="event-tag" value="bg-info" autocomplete="off" checked /></label>
                            <label class="btn bg-warning"><input type="radio" name="event-tag" value="bg-warning" autocomplete="off" /></label>
                            <label class="btn bg-danger"><input type="radio" name="event-tag" value="bg-danger" autocomplete="off" /></label>
                            <label class="btn bg-success"><input type="radio" name="event-tag" value="bg-success" autocomplete="off" /></label>
                            <label class="btn bg-default"><input type="radio" name="event-tag" value="bg-default" autocomplete="off" /></label>
                            <label class="btn bg-primary"><input type="radio" name="event-tag" value="bg-primary" autocomplete="off" /></label>
                        </div>
                    </div>
                    <input type="hidden" class="new-event--start" />
                    <input type="hidden" class="new-event--end" />
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary new-event--add">Add Job</button>
                <button type="button" class="btn btn-link ml-auto" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Job Edit Modal -->
<div class="modal fade" id="edit-event" tabindex="-1" role="dialog" aria-labelledby="edit-event-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-secondary" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form class="edit-event--form">
                    <div class="form-group">
                        <label class="form-control-label">Job title</label>
                        <input type="text" class="form-control form-control-alternative edit-event--title" placeholder="Event Title" />
                    </div>
                    <div class="form-group">
                        <label class="form-control-label d-block mb-3">Status color</label>
                        <div class="btn-group btn-group-toggle btn-group-colors event-tag mb-0" data-toggle="buttons">
                            <label class="btn bg-info active"><input type="radio" name="event-tag" value="bg-info" autocomplete="off" checked /></label>
                            <label class="btn bg-warning"><input type="radio" name="event-tag" value="bg-warning" autocomplete="off" /></label>
                            <label class="btn bg-danger"><input type="radio" name="event-tag" value="bg-danger" autocomplete="off" /></label>
                            <label class="btn bg-success"><input type="radio" name="event-tag" value="bg-success" autocomplete="off" /></label>
                            <label class="btn bg-default"><input type="radio" name="event-tag" value="bg-default" autocomplete="off" /></label>
                            <label class="btn bg-primary"><input type="radio" name="event-tag" value="bg-primary" autocomplete="off" /></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Description</label>
                        <textarea class="form-control form-control-alternative edit-event--description textarea-autosize" placeholder="Event Desctiption"></textarea>
                        <i class="form-group--bar"></i>
                    </div>
                    <input type="hidden" class="edit-event--id" />
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-calendar="update">Update</button>
                <button class="btn btn-danger" data-calendar="delete">Delete</button>
                <button class="btn btn-link ml-auto" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


@endsection


@section('script')
<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMGmInKS9ci-aYtcPuCA0AEm64UxPxwv4&callback=initMap&libraries=&v=weekly"
      async
    ></script>
<script>
    function initMap() {
        const uluru = { lat: -25.344, lng: 131.036 };
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 4,
            center: uluru,
        });
        const marker = new google.maps.Marker({
            position: uluru,
            map: map,
        });
    }
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
</script>
@endsection