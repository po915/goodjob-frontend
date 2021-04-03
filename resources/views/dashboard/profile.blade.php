@extends('layout.dash')

@section('style')
<style>

</style>

@endsection('style')

@section('content')
    <!-- Header -->
    <div class="header">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h1 class="d-inline-block mb-0 txt-dark">Profile</h1>
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
            <div class="card-header bg-base px-0 px-sm-2">
                <div class="container-fluid">
                    <ul class="nav nav-tabs profile-nav" role="tablist">
                        <li class="nav-item">
                            <a class="my-auto nav-link active" data-toggle="tab" href="#profile"><i class="fa fa-heart mr-2"></i> Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="my-auto nav-link" data-toggle="tab" href="#user"><i class="fa fa-user mr-2"></i> User</a>
                        </li>
                        <li class="nav-item">
                            <a class="my-auto nav-link" data-toggle="tab" href="#customer"><i class="fa fa-users mr-2"></i> Customer</a>
                        </li>
                        <li class="nav-item">
                            <a class="my-auto nav-link" data-toggle="tab" href="#notification"><i class="fa fa-envelope-o mr-2"></i> Notifications</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content">

                    <div id="profile" class="container tab-pane active">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="row">
                                    <div class="avatar-upload mx-auto">
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
                                    <h3 class="user-name-avatar mx-auto">Jane Snow</h3>
                                </div>
                                <div class="row">
                                    <h5 class="user-name-avatar mx-auto">Super Administrator</h5>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="fullname">Firstname, Lastname</label>
                                            <input type="text" class="form-control" id="fullname" placeholder="Firstname, Lastname">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="company-name">Company name</label>
                                            <input type="text" class="form-control" id="company-name" placeholder="Company name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="user-group">User group</label>
                                            <input type="text" class="form-control" id="user-group" placeholder="User group">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="street">Street</label>
                                            <input type="text" class="form-control" id="street" placeholder="Street">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="number">Number</label>
                                            <input type="text" class="form-control" id="number" placeholder="Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="place">Place of Use</label>
                                            <input type="text" class="form-control" id="place" placeholder="Street">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="zipcode">Zipcode</label>
                                            <input type="text" class="form-control" id="zipcode" placeholder="Zipcode">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12" style="margin-top:2px">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="phone-1">Phone number 1</label>
                                            <input type="text" class="form-control" id="phone-1" placeholder="Phone number 1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="phone-2">Phone number 2</label>
                                            <input type="text" class="form-control" id="phone-2" placeholder="Phone number 2">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="direct-email">Email directly</label>
                                            <input type="text" class="form-control" id="direct-email" placeholder="Email directly">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="general-email">General Email</label>
                                            <input type="text" class="form-control" id="general-email" placeholder="General directly">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="website">Website</label>
                                            <input type="text" class="form-control" id="website" placeholder="Website">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <button type="button" class="btn btn-default mt-4 ml-auto">Save</button>
                                    <button type="button" class="btn btn-default mt-4 mr-3">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="user" class="container tab-pane fade">
                        <div class="row">
                            <form class="form-1 row-1 row">
                                <select name="ort" id="ort" class="cus-select" placeholder="ORT">
                                    <option value="tiger">Filter1</option>
                                    <option value="lion">Lion</option>
                                    <option value="elephant">Elephant</option>
                                </select>
                                <select name="kanton" id="kanton" class="cus-select" placeholder="Kanton">
                                    <option value="carnivora">Application</option>
                                    <option value="herbivora">Herbivora</option>
                                    <option value="omnivora">Omnivora</option>
                                </select>
                                <select name="employee" id="employee" class="cus-select" placeholder="Assigned Employee">
                                    <option value="carnivora">Support art<article></article></option>
                                    <option value="herbivora">Herbivora</option>
                                    <option value="omnivora">Omnivora</option>
                                </select>
                            </form>
                        </div>
                        <div class="row">
                            <div class="table-responsive mt-4" data-toggle="list" data-list-values='["name", "address", "phone"]'>
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
                                            <th scope="col" class="sort" data-sort="address">Type of Use</th>
                                            <th scope="col" class="sort" data-sort="phone">Phone number</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Locations</th>
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
                                                Lorem Ipsum dolor
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="customer" class="container tab-pane fade">
                        <div class="row">
                            <form class="form-1 row-1 row">
                                <select name="ort" id="ort" class="cus-select" placeholder="ORT">
                                    <option value="tiger">Branch</option>
                                    <option value="lion">Lion</option>
                                    <option value="elephant">Elephant</option>
                                </select>
                                <select name="kanton" id="kanton" class="cus-select" placeholder="Kanton">
                                    <option value="carnivora">Kanton</option>
                                    <option value="herbivora">Herbivora</option>
                                    <option value="omnivora">Omnivora</option>
                                </select>
                                <select name="employee" id="employee" class="cus-select" placeholder="Assigned Employee">
                                    <option value="carnivora">Support art<article></article></option>
                                    <option value="herbivora">Herbivora</option>
                                    <option value="omnivora">Omnivora</option>
                                </select>
                            </form>
                        </div>
                        <div class="row">
                            <div class="table-responsive mt-4" data-toggle="list" data-list-values='["name", "address", "phone"]'>
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
                                            <th scope="col">Contact person</th>
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
                                                Jhone Winter
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="notification" class="container tab-pane fade">
                        <h3>notification</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    

@endsection


@section('script')
<script>

    $("#avatarUpload").change(function (data) {
        var imageFile = data.target.files[0];
        var reader = new FileReader();
        reader.readAsDataURL(imageFile);

        reader.onload = function (evt) {
            $("#avatarPreview").attr("src", evt.target.result);
            $("#avatarPreview").hide();
            $("#avatarPreview").fadeIn(650);
        };
    });

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