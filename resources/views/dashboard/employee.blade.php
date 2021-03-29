@extends('layout.dash')

@section('content')
    <!-- Header -->
    <div class="header">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h1 d-inline-block mb-0 txt-dark">Employees</h6>
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
    <div class="container-fluid">

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
                                    <select name="team" id="team" class="cus-select col" placeholder="Team: Support">
                                        <option value="tiger">Tiger</option>
                                        <option value="lion">Lion</option>
                                        <option value="elephant">Elephant</option>
                                    </select>
                                    <select name="location" id="location" class="cus-select col" placeholder="Locations">
                                        <option value="carnivora">Carnivora</option>
                                        <option value="herbivora">Herbivora</option>
                                        <option value="omnivora">Omnivora</option>
                                    </select>
                                    <select name="assigned" id="assigned" class="cus-select col" placeholder="Assigned">
                                        <option value="carnivora">Carnivora</option>
                                        <option value="herbivora">Herbivora</option>
                                        <option value="omnivora">Omnivora</option>
                                    </select>
                                    <select name="level" id="level" class="cus-select col" placeholder="Support Level">
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
                                        <span class="name mb-0 text-sm">Aane Snow</span>
                                    </div>
                                </div>
                            </td>
                            <td class="team">
                                Alobal, international Team
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
                        </tr>
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
                                        <span class="name mb-0 text-sm">Bane Snow</span>
                                    </div>
                                </div>
                            </td>
                            <td class="team">
                                Clobal, international Team
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
                        </tr>
                    </tbody>
                </table>
            </div>


        </div>

    </div>



@endsection


@section('script')
<script src="{{ asset('assets/vendor/list.js/dist/list.min.js') }}"></script>
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
    });

    
</script>
@endsection