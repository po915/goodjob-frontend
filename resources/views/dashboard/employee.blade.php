@extends('layout.dash')

@section('style')
<link rel="stylesheet" href="{{ asset('css/multi-select.css') }}">
@endsection

@section('content')
<div class="is-active" val="employee"></div>
    <!-- Header -->
    <div class="header">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h1 d-inline-block mb-0 txt-dark">Employees</h6>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <button type="button" class="btn btn-twitter btn-icon-only rounded-circle" data-toggle="modal" data-target="#addEmployee">
                            <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
                        </button>
                        <div class="dropdown">
                            <a class="btn btn-sm btn-icon-only text-light bg-white shadow 3dots">
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
    <div class="container-fluid page-content">

        <div class="card">
            <div class="card-header border-0">
                <div class="row">
                    <div class="col">
                        <div class="row row-1">
                            <div class="col-auto">
                                <button type="button" class="btn btn-icon-only rounded-circle btn-4">
                                    <span class="btn-inner--icon"><i class="fa fa-arrow-left"></i></span>
                                </button>
                                <h6 class="d-inline-block mb-0 txt-10">March, 2021</h6>
                                <button type="button" class="btn btn-icon-only rounded-circle btn-4">
                                    <span class="btn-inner--icon"><i class="fa fa-arrow-right"></i></span>
                                </button>
                            </div>
                            <div class="col-auto">
                                <form class="form-1 row-1 row">
                                    <select name="team" id="team" class="cus-select" placeholder="Team: Support">
                                        <option value="tiger">Tiger</option>
                                        <option value="lion">Lion</option>
                                        <option value="elephant">Elephant</option>
                                    </select>
                                    <select name="location" id="location" class="cus-select" placeholder="Locations">
                                        <option value="carnivora">Carnivora</option>
                                        <option value="herbivora">Herbivora</option>
                                        <option value="omnivora">Omnivora</option>
                                    </select>
                                    <select name="assigned" id="assigned" class="cus-select" placeholder="Assigned">
                                        <option value="carnivora">Carnivora</option>
                                        <option value="herbivora">Herbivora</option>
                                        <option value="omnivora">Omnivora</option>
                                    </select>
                                    <select name="level" id="level" class="cus-select" placeholder="Support Level">
                                        <option value="carnivora">Lorem</option>
                                        <option value="herbivora">Ipsum</option>
                                        <option value="omnivora">Dolor</option>
                                    </select>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Light table -->
            <div class="table-responsive" data-toggle="list" data-list-values='["name", "team", "phone"]'>
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="table-check-all" type="checkbox">
                                    <label class="custom-control-label" for="table-check-all"></label>
                                </div>
                            </th>
                            <th scope="col" class="sort" data-sort="name">Name</th>
                            <th scope="col" class="sort" data-sort="team">Team</th>
                            <th scope="col" class="sort" data-sort="phone">Phone number</th>
                            <th scope="col">Email</th>
                            <th scope="col">Assigned Customers</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="table-check-all" type="checkbox">
                                    <label class="custom-control-label" for="table-check-all"></label>
                                </div>
                            </td>
                            <td scope="row">
                                <div class="media align-items-center">
                                    <a href="#" class="avatar rounded-circle mr-3">
                                        <img alt="avatar" src="{{ asset('image/user-avatar.jpg') }}" />
                                    </a>
                                    <div class="media-body">
                                        <span class="name mb-0 text-sm">Jane Snow</span>
                                    </div>
                                </div>
                            </td>
                            <td class="team">
                                Global, international Team
                            </td>
                            <td class="phone">
                                +123 089 293 9821                                
                            </td>
                            <td class="email">
                                example@example.com
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet
                            </td>
                            <!-- <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </td> -->
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<div class="modal" id="addEmployee">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card mb-0">
                <div class="card-header py-3">
                    <div class="row align-items-center">
                        <div class="box-3">
                            <h3 class="mb-0">Add Employee</h3>
                        </div>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="avatar-upload ml-4">
                            <div class="avatar-edit profile-avatar-edit">
                                <form action="" method="post" id="form-image">
                                    <input type="file" id="avatarUpload" accept=".png, .jpg, .jpeg" />
                                    <label for="avatarUpload"></label>
                                </form>
                            </div>
                            <div class="avatar-preview">
                                <img class="profile-user-img img-responsive img-circle" id="avatarPreview" src="{{ asset('image/s3.jpg') }}" alt="User profile picture" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="compnay">Company</label>
                                <input type="text" id="company" class="form-control "/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="phone-number-2">Phone number 2</label>
                                <input type="text" id="phone-number-2" class="form-control "/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="phone-number-1">Phone number 1</label>
                                <input type="text" id="phone-number-1" class="form-control "/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="email">Email directly</label>
                                <input type="text" id="email" class="form-control "/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="team">Team</label>
                                <select id="team" class="custom-select-1" placeholder="Team">
                                    <option value="1">Support, 1st level</option>
                                    <option value="2">Support, 2nd level</option>
                                    <option value="3">Support, 3rd level</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="role">Role</label>
                                <select id="role" class="custom-select-1" placeholder="Role">
                                    <option value="1">Manager</option>
                                    <option value="2">Editor</option>
                                    <option value="3">Director</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="customer">Customers</label>
                                <select multiple data-placeholder="Please select customers" class="form-control">
                                    <option>Mercedes</option>
                                    <option>Audi</option>
                                    <option>BMW</option>
                                    <option>Lexus</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="role">Locations</label>
                                <select id="role" class="custom-select-1" placeholder="Role">
                                    <option value="1">Manager</option>
                                    <option value="2">Editor</option>
                                    <option value="3">Director</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <h3>Activities</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body px-2 py-2">
                                    <div class="row align-items-center">
                                        <div class="col ml-2">
                                            <p class="text-sm text-muted mb-0">08.09.20, 12:23 Uhr</p>
                                            <h4 class="mb-0">Lorem ipsum</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body px-2 py-2">
                                    <div class="row align-items-center">
                                        <div class="col ml-2">
                                            <p class="text-sm text-muted mb-0">08.09.20, 12:23 Uhr</p>
                                            <h4 class="mb-0">Lorem ipsum</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body px-2 py-2">
                                    <div class="row align-items-center">
                                        <div class="col ml-2">
                                            <p class="text-sm text-muted mb-0">08.09.20, 12:23 Uhr</p>
                                            <h4 class="mb-0">Lorem ipsum</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="flex mb-2">
                                <label class="custom-toggle my-auto">
                                    <input type="checkbox" checked>
                                    <span class="custom-toggle-slider rounded-circle"></span>
                                </label>
                                <p class="my-auto ml-3">User is active</p>
                            </div>
                            <div class="flex mb-2">
                                <label class="custom-toggle my-auto">
                                    <input type="checkbox">
                                    <span class="custom-toggle-slider rounded-circle"></span>
                                </label>
                                <p class="my-auto ml-3">Blocked</p>
                            </div>
                            <div class="flex mb-2">
                                <label class="custom-toggle my-auto">
                                    <input type="checkbox">
                                    <span class="custom-toggle-slider rounded-circle"></span>
                                </label>
                                <p class="my-auto ml-3">New password</p>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-lg-6">
                            <div class="box-11">
                                <p>Last Login:</p>
                                <p class="txt-20">23.09.2020, 11:21 AM</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-11">
                                <p>Registered Since:</p>
                                <p class="txt-20">12.07.2020</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex mt-3">
                        <button class="update-job px-3 py-2 btn-5">Save</button>
                        <button class="px-3 py-2 btn-5" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="side-menu">
    <button class="btn-14"><i class="fa fa-times"></i> Close</button>
    <h1>What exactly <br> do you want to do?</h1>
    <div class="card-7 mx-auto mt-4">
        <p class="my-auto">Register New Employees</p>
        <button type="button" class="btn btn-icon-only rounded-circle mr-3 my-auto">
            <span class="btn-inner--icon"><i class="fa fa-user"></i></span>
        </button>
    </div>
    <div class="card-7 mx-auto">
        <p class="my-auto">Register a new job</p>
        <button type="button" class="btn btn-icon-only rounded-circle mr-3 my-auto">
            <span class="btn-inner--icon"><i class="fa fa-folder"></i></span>
        </button>
    </div>
    <div class="card-7 mx-auto">
        <p class="my-auto">Add new date to calendar</p>
        <button type="button" class="btn btn-icon-only rounded-circle mr-3 my-auto">
            <span class="btn-inner--icon"><i class="fa fa-calendar"></i></span>
        </button>
    </div>
    <div class="card-7 mx-auto mt-4">
        <p class="my-auto">Register new contact person</p>
        <button type="button" class="btn btn-icon-only rounded-circle mr-3 my-auto">
            <span class="btn-inner--icon"><i class="fa fa-user"></i></span>
        </button>
    </div>
    <div class="card-7 mx-auto mt-4">
        <p class="my-auto">Register new customers</p>
        <button type="button" class="btn btn-icon-only rounded-circle mr-3 my-auto">
            <span class="btn-inner--icon"><i class="fa fa-user"></i></span>
        </button>
    </div>
    <div class="card-7 mx-auto mt-4">
        <p class="my-auto">Capture new location</p>
        <button type="button" class="btn btn-icon-only rounded-circle mr-3 my-auto">
            <span class="btn-inner--icon"><i class="fa fa-map-marker"></i></span>
        </button>
    </div>
</div>

@endsection


@section('script')
<script src="{{ asset('assets/vendor/list.js/dist/list.min.js') }}"></script>
<script src="{{ asset('js/multi-select.js') }}"></script>
@endsection