@extends('layout.dash')

@section('content')
<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-base" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="#">
            <img src="{{ asset('image/logo.png') }}" class="navbar-brand-img" alt="LOGO">
            </a>
            
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <!-- <i class="fa fa-angle-double-left" style="color:white"></i> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="/employee">
                            <i class="ni ni-single-02 "></i>
                            <span class="nav-link-text">Employees</span>
                            <!-- <div class="nav-active"></div> -->
                        </a>
                        
                    </li>  
                    <li class="nav-item">
                        <a class="nav-link" href="/job">
                            <i class="ni ni-folder-17"></i>
                            <span class="nav-link-text">Jobs</span>
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="/calendar">
                            <i class="ni ni-calendar-grid-58"></i>
                            <span class="nav-link-text">Calendar</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/customer">
                            <i class="fa fa-users"></i>
                            <span class="nav-link-text">Customers</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacts">
                            <i class="fa fa-address-book"></i>
                            <span class="nav-link-text">Contacts</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/prices">
                            <i class="ni ni-pin-3"></i>
                            <span class="nav-link-text">Places</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/setting">
                            <i class="ni ni-settings-gear-65"></i>
                            <span class="nav-link-text">Settings</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/search">
                            <i class="fas fa-search"></i>
                            <span class="nav-link-text">Search</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">
                            <i class="fa fa-share-square"></i>
                            <span class="nav-link-text">Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- Main content -->
<div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Navbar links -->
                <ul class="navbar-nav align-items-center ml-md-auto">
                    <li class="nav-item d-xl-none">
                        <!-- Sidenav toggler -->
                        <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item d-sm-none">
                        <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                            <i class="ni ni-zoom-split-in"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ni ni-bell-55 txt-dark"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
                            <!-- Dropdown header -->
                            <div class="px-3 py-3">
                                <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                            </div>
                            <!-- List group -->
                            <div class="list-group list-group-flush">
                                <a href="#!" class="list-group-item list-group-item-action">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="../../assets/img/theme/team-1.jpg" class="avatar rounded-circle" />
                                        </div>
                                        <div class="col ml--2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="mb-0 text-sm">John Snow</h4>
                                                </div>
                                                <div class="text-right text-muted">
                                                    <small>2 hrs ago</small>
                                                </div>
                                            </div>
                                            <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#!" class="list-group-item list-group-item-action">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="../../assets/img/theme/team-2.jpg" class="avatar rounded-circle" />
                                        </div>
                                        <div class="col ml--2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="mb-0 text-sm">John Snow</h4>
                                                </div>
                                                <div class="text-right text-muted">
                                                    <small>3 hrs ago</small>
                                                </div>
                                            </div>
                                            <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#!" class="list-group-item list-group-item-action">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="../../assets/img/theme/team-3.jpg" class="avatar rounded-circle" />
                                        </div>
                                        <div class="col ml--2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="mb-0 text-sm">John Snow</h4>
                                                </div>
                                                <div class="text-right text-muted">
                                                    <small>5 hrs ago</small>
                                                </div>
                                            </div>
                                            <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#!" class="list-group-item list-group-item-action">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg" class="avatar rounded-circle" />
                                        </div>
                                        <div class="col ml--2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="mb-0 text-sm">John Snow</h4>
                                                </div>
                                                <div class="text-right text-muted">
                                                    <small>2 hrs ago</small>
                                                </div>
                                            </div>
                                            <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#!" class="list-group-item list-group-item-action">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="../../assets/img/theme/team-5.jpg" class="avatar rounded-circle" />
                                        </div>
                                        <div class="col ml--2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="mb-0 text-sm">John Snow</h4>
                                                </div>
                                                <div class="text-right text-muted">
                                                    <small>3 hrs ago</small>
                                                </div>
                                            </div>
                                            <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- View all -->
                            <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-center ml-auto ml-md-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg" />
                                </span>
                                <div class="media-body ml-2 d-none d-lg-block">
                                    <span class="mb-0 text-sm font-weight-bold txt-dark">Jane Snow</span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome!</h6>
                            </div>
                            <a href="#!" class="dropdown-item">
                                <i class="ni ni-single-02"></i>
                                <span>My profile</span>
                            </a>
                            <a href="#!" class="dropdown-item">
                                <i class="ni ni-settings-gear-65"></i>
                                <span>Settings</span>
                            </a>
                            <a href="#!" class="dropdown-item">
                                <i class="ni ni-calendar-grid-58"></i>
                                <span>Activity</span>
                            </a>
                            <a href="#!" class="dropdown-item">
                                <i class="ni ni-support-16"></i>
                                <span>Support</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#!" class="dropdown-item">
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0 txt-dark">Employees</h6>
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
    <div class="card">
    <!-- Card header -->
        <div class="card-header border-0">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-0">Striped table</h3>
                </div>
                <div class="col-6 text-right">
                    <a href="#" class="btn btn-sm btn-primary btn-round btn-icon" data-toggle="tooltip" data-original-title="Edit product">
                        <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                        <span class="btn-inner--text">Export</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
            <table class="table align-items-center table-flush table-striped">
                <thead class="thead-light">
                    <tr>
                        <th>Author</th>
                        <th>Created at</th>
                        <th>Product</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table-user">
                            <img src="../../assets/img/theme/team-1.jpg" class="avatar rounded-circle mr-3" />
                            <b>John Michael</b>
                        </td>
                        <td>
                            <span class="text-muted">10/09/2018</span>
                        </td>
                        <td>
                            <a href="#!" class="font-weight-bold">Argon Dashboard PRO</a>
                        </td>
                        <td class="table-actions">
                            <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
                                <i class="fas fa-user-edit"></i>
                            </a>
                            <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-user">
                            <img src="../../assets/img/theme/team-2.jpg" class="avatar rounded-circle mr-3" />
                            <b>Alex Smith</b>
                        </td>
                        <td>
                            <span class="text-muted">08/09/2018</span>
                        </td>
                        <td>
                            <a href="#!" class="font-weight-bold">Argon Design System</a>
                        </td>
                        <td class="table-actions">
                            <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
                                <i class="fas fa-user-edit"></i>
                            </a>
                            <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-user">
                            <img src="../../assets/img/theme/team-3.jpg" class="avatar rounded-circle mr-3" />
                            <b>Samantha Ivy</b>
                        </td>
                        <td>
                            <span class="text-muted">30/08/2018</span>
                        </td>
                        <td>
                            <a href="#!" class="font-weight-bold">Black Dashboard</a>
                        </td>
                        <td class="table-actions">
                            <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
                                <i class="fas fa-user-edit"></i>
                            </a>
                            <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-user">
                            <img src="../../assets/img/theme/team-1.jpg" class="avatar rounded-circle mr-3" />
                            <b>John Michael</b>
                        </td>
                        <td>
                            <span class="text-muted">10/09/2018</span>
                        </td>
                        <td>
                            <a href="#!" class="font-weight-bold">Argon Dashboard PRO</a>
                        </td>
                        <td class="table-actions">
                            <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
                                <i class="fas fa-user-edit"></i>
                            </a>
                            <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-user">
                            <img src="../../assets/img/theme/team-2.jpg" class="avatar rounded-circle mr-3" />
                            <b>John Michael</b>
                        </td>
                        <td>
                            <span class="text-muted">10/09/2018</span>
                        </td>
                        <td>
                            <a href="#!" class="font-weight-bold">Argon Dashboard PRO</a>
                        </td>
                        <td class="table-actions">
                            <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
                                <i class="fas fa-user-edit"></i>
                            </a>
                            <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
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
</script>
@endsection