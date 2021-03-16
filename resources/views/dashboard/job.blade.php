@extends('layout.dash')

@section('content')
    <!-- Header -->
    <div class="header">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0 txt-dark">John Snow's Jobs</h6>
                        <p>These are your current jobs.</p>
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

                        <select name="xxx" id="xxx" class="opt-1">
                            <option value="0" selected>Period</option>
                        </select>
                        <select name="xxx" id="xxx" class="opt-1">
                            <option value="0" selected>Status: </option>
                        </select>
                        <select name="xxx" id="xxx" class="opt-1">
                            <option value="0" selected>Customer: </option>
                        </select>
                        <select name="xxx" id="xxx" class="opt-1">
                            <option value="0" selected>Support level: </option>
                        </select>

                    </div>
                </div>
            </div>
            <!-- Light table -->
            <div class="table-responsive" data-toggle="list" data-list-values='["name", "description", "time","place"]'>
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="table-check-all" type="checkbox">
                                    <label class="custom-control-label" for="table-check-all"></label>
                                </div>
                            </th>
                            <th scope="col" class="sort" data-sort="name">Title</th>
                            <th scope="col" class="sort" data-sort="description">Description</th>
                            <th scope="col" class="sort" data-sort="time">Time</th>
                            <th scope="col" class="sort" data-sort="place">Place of Use</th>
                            <th scope="col">Responsible</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <tr data-toggle="modal" data-target="#jobEdit">
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="table-check-all" type="checkbox">
                                    <label class="custom-control-label" for="table-check-all"></label>
                                </div>
                            </td>
                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="name mb-0 text-sm">Jane Snow</span>
                                    </div>
                                </div>
                            </td>
                            <td class="description">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </td>
                            <td class="time">
                                13:00 - 15:00                               
                            </td>
                            <td class="place">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet
                            </td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr data-toggle="modal" data-target="#jobEdit">
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="table-check-all" type="checkbox">
                                    <label class="custom-control-label" for="table-check-all"></label>
                                </div>
                            </td>
                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="name mb-0 text-sm">Jane Snow</span>
                                    </div>
                                </div>
                            </td>
                            <td class="description">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </td>
                            <td class="time">
                                13:00 - 15:00                               
                            </td>
                            <td class="place">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet
                            </td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr data-toggle="modal" data-target="#jobEdit">
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="table-check-all" type="checkbox">
                                    <label class="custom-control-label" for="table-check-all"></label>
                                </div>
                            </td>
                            <td scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="name mb-0 text-sm">Jane Snow</span>
                                    </div>
                                </div>
                            </td>
                            <td class="description">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </td>
                            <td class="time">
                                13:00 - 15:00                               
                            </td>
                            <td class="place">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet
                            </td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>


        </div>


<div class="modal" id="jobEdit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card">
                <div class="card-header py-3">
                    <div class="row align-items-center">
                        <div class="box-3">
                            <h2 class="mb-0">Maintenance In House Blabla</h2>
                            <small>Pending </small>
                            <span class="text-warning">●</span>
                        </div>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <h6 class="heading-small text-muted mb-4">ID: HOE12 &nbsp;&nbsp;&nbsp; Start: Friday, 27</h6>
                        <div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label label-1" for="input-jobtitle">Job title</label>
                                        <input type="text" id="input-jobtitle" class="form-control form-1"/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label label-1" for="input-customer">Customer</label>
                                        <input type="text" id="input-customer" class="form-control form-1"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label label-1" for="input-start-date">Start date</label>
                                        <input type="date" id="input-first-name" class="form-control form-1"/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label label-1" for="input-end-date">End date</label>
                                        <input type="date" id="input-end-date" class="form-control form-1"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 box-5">
                                    <div class="col-8 pl-0 pr-2">
                                        <div class="form-group">
                                            <label class="form-control-label label-1" for="input-place">Place</label>
                                            <input type="text" id="input-place" class="form-control form-1"/>
                                        </div>
                                    </div>
                                    <div class="col-4 px-0">
                                        <div class="form-group">
                                            <label class="form-control-label label-1" for="input-zip-code">Zip Code</label>
                                            <input type="text" id="input-zip-code" class="form-control form-1"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 box-5">
                                    <div class="col-8 pl-0 pr-2">
                                        <div class="form-group">
                                            <label class="form-control-label label-1" for="input-place">Place</label>
                                            <input type="text" id="input-place" class="form-control form-1"/>
                                        </div>
                                    </div>
                                    <div class="col-4 px-0">
                                        <div class="form-group">
                                            <label class="form-control-label label-1" for="input-zip-code">Zip Code</label>
                                            <input type="text" id="input-zip-code" class="form-control form-1"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label label-1" for="input-phone-number">Phone number</label>
                                        <input type="text" id="input-phone-number" class="form-control form-1"/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label label-1" for="input-email">Email</label>
                                        <input type="email" id="input-email" class="form-control form-1"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label label-1" for="input-contact-person">Contact person</label>
                                        <input type="text" id="input-contact-person" class="form-control form-1"/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label label-1" for="input-assigned-employee">Assigned Employees</label>
                                        <input type="email" id="input-assigned-employee" class="form-control form-1"/>
                                    </div>
                                </div>
                            </div>

                            <div class="map-1">

                            </div>
                            
                            <div class="row px-3 py-3">
                                <h3>Description</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima delectus cupiditate ut corporis adipisci impedit ipsam numquam natus perferendis beatae placeat maxime ipsa recusandae molestiae doloremque ipsum facilis, illo hic?</p>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="dropzone dropzone-multiple file-1 mt-2" data-toggle="dropzone" data-dropzone-multiple data-dropzone-url="http://">
                                        <div class="fallback">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFileUploadMultiple" multiple />
                                                <label class="custom-file-label" for="customFileUploadMultiple">Choose file</label>
                                            </div>
                                        </div>
                                        <ul class="dz-preview dz-preview-multiple list-group list-group-lg list-group-flush">
                                            <li class="list-group-item px-0">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="avatar">
                                                            <img class="avatar-img rounded" src="..." alt="..." data-dz-thumbnail />
                                                        </div>
                                                    </div>
                                                    <div class="col ml--3">
                                                        <h4 class="mb-1" data-dz-name>...</h4>
                                                        <p class="small text-muted mb-0" data-dz-size>...</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item" data-dz-remove>
                                                                    Remove
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="dropzone dropzone-multiple file-2 mt-2" data-toggle="dropzone" data-dropzone-multiple data-dropzone-url="http://">
                                        <div class="fallback">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFileUploadMultiple" multiple />
                                                <label class="custom-file-label" for="customFileUploadMultiple">Choose file</label>
                                            </div>
                                        </div>
                                        <ul class="dz-preview dz-preview-multiple list-group list-group-lg list-group-flush">
                                            <li class="list-group-item px-0">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="avatar">
                                                            <img class="avatar-img rounded" src="..." alt="..." data-dz-thumbnail />
                                                        </div>
                                                    </div>
                                                    <div class="col ml--3">
                                                        <h4 class="mb-1" data-dz-name>...</h4>
                                                        <p class="small text-muted mb-0" data-dz-size>...</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item" data-dz-remove>
                                                                    Remove
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row px-3 py-3">
                                <h3>Notes</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima delectus cupiditate ut corporis adipisci impedit ipsam numquam natus perferendis beatae placeat maxime ipsa recusandae molestiae doloremque ipsum facilis, illo hic?</p>
                            </div>

                            <div class="">
                                <h3>Activities</h3>
                                <div class="card col-lg-8">
                                    <!-- Card body -->
                                    <div class="card-body px-2 py-2">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <a href="#" class="avatar avatar-xl rounded-circle">
                                                    <img alt="Image placeholder" src="../../assets/img/theme/team-2.jpg" />
                                                </a>
                                            </div>
                                            <div class="col ml--2">
                                                <p class="text-sm text-muted mb-0">08.09.20, 12:23 Uhr</p>
                                                <h4 class="mb-0">Lorem ipsum</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="edit-job px-3 py-2"><i class="fa fa-pencil"></i> Edit job</button>

                        </div>
                    </form>
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