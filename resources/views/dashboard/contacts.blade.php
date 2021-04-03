@extends('layout.dash')

@section('content')
<div class="is-active" val="contacts"></div>
    <!-- Header -->
    <div class="header">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-8 col-7 row mx-0">
                        <h1 class="d-inline-block mb-0 txt-dark my-auto ml-3 txt-12">All Contacts</h1>
                        &nbsp;&nbsp;&nbsp;
                        <a href="/contacts-customer" class="h1 d-inline-block mb-0 ml-3 txt-dark my-auto medium txt-11">Customers</a>

                        <div class="form-group mb-0 my-auto ml-3 search-input">
                            <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-search"></i></span>
                                </div>
                                <input class="form-control" placeholder="Search for customers" type="text">
                            </div>
                        </div>
                            
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
        <div class="card">
            <div class="card-header border-0">
                <div class="row">
                    <div class="col">

                        <div class="container-fluid">
                            <form class="form-1 row-1 row">
                                <select name="ort" id="ort" class="cus-select" placeholder="ORT">
                                    <option value="tiger">Tiger</option>
                                    <option value="lion">Lion</option>
                                    <option value="elephant">Elephant</option>
                                </select>
                                <select name="kanton" id="kanton" class="cus-select" placeholder="Kanton">
                                    <option value="carnivora">Carnivora</option>
                                    <option value="herbivora">Herbivora</option>
                                    <option value="omnivora">Omnivora</option>
                                </select>
                                <select name="employee" id="employee" class="cus-select" placeholder="Assigned Employee">
                                    <option value="carnivora">Carnivora</option>
                                    <option value="herbivora">Herbivora</option>
                                    <option value="omnivora">Omnivora</option>
                                </select>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Light table -->
            <div class="table-responsive" data-toggle="list" data-list-values='["name", "address", "phone"]'>
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
                            <th scope="col" class="sort" data-sort="address">Address</th>
                            <th scope="col" class="sort" data-sort="phone">Phone number</th>
                            <th scope="col">Email</th>
                            <th scope="col">Assigned</th>
                            <th scope="col">Branch</th>
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
                            <td class="address">
                                Global, international Team
                            </td>
                            <td class="phone">
                                +123 089 293 9821                                
                            </td>
                            <td class="email">
                                example@example.com
                            </td>
                            <td>
                                Start Name
                            </td>
                            <td>
                                Industry Sectors
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>


        </div>

    </div>

<div class="modal" id="addCustomer">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card mb-0">
                <div class="card-header py-3">
                    <div class="row align-items-center">
                        <div class="box-3">
                            <h2 class="mb-0">Register New Customer</h2>
                        </div>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="avatar-upload ml-4">
                        <div class="avatar-edit">
                            <form action="" method="post" id="form-image">
                                <input type="file" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </form>
                        </div>
                        <div class="avatar-preview">
                            <img class="profile-user-img img-responsive img-circle" id="imagePreview" src="{{ asset('image/primary-avatar.jpg') }}" alt="User profile picture" />
                        </div>
                    </div>

                    <form>
                        <div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label " for="input-company-name">Company Name</label>
                                        <input type="text" id="input-company-name" class="form-control "/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label " for="input-phone-1">Phone number 1</label>
                                        <input type="text" id="input-phone-1" class="form-control "/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 box-5">
                                    <div class="col-8 pl-0 pr-2">
                                        <div class="form-group">
                                            <label class="form-control-label " for="input-street">Street</label>
                                            <input type="text" id="input-street" class="form-control "/>
                                        </div>
                                    </div>
                                    <div class="col-4 px-0">
                                        <div class="form-group">
                                            <label class="form-control-label " for="input-number">Number</label>
                                            <input type="text" id="input-number" class="form-control "/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label " for="input-phone-2">Phone number 2</label>
                                        <input type="text" id="input-phone-2" class="form-control "/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 box-5">
                                    <div class="col-4 pl-0 pr-2">
                                        <div class="form-group">
                                            <label class="form-control-label " for="input-zip">Zip Code</label>
                                            <input type="text" id="input-zip" class="form-control "/>
                                        </div>
                                    </div>
                                    <div class="col-8 px-0">
                                        <div class="form-group">
                                            <label class="form-control-label " for="input-place">Place</label>
                                            <input type="text" id="input-place" class="form-control "/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label " for="input-email">Email</label>
                                        <input type="text" id="input-email" class="form-control "/>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label for="" class="form-control-label">Place of Use</label>
                                <div class="form-check mb-2">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">Like company headquaters
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label " for="input-contact-person">Contact person</label>
                                        <input type="text" id="input-contact-person" class="form-control "/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label " for="input-website">Website</label>
                                        <input type="email" id="input-website" class="form-control "/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label " for="input-assigned-employee">Assigned Employees</label>
                                        <input type="email" id="input-assigned-employee" class="form-control "/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label " for="input-branch">Branch</label>
                                        <input type="email" id="input-branch" class="form-control "/>
                                    </div>
                                </div>
                            </div>

                            <div class="flex">
                                <button type="button" class="update-job px-3 py-2 btn-5">Save</button>
                                <button type="button" class="px-3 py-2 btn-5" data-dismiss="modal">Cancel</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection


@section('script')
<script src="{{ asset('template/vendor/list.js/dist/list.min.js') }}"></script>
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

</script>
@endsection