<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Good job</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- <link rel="stylesheet" href="{{ asset('assets/vendor/fullcalendar/dist/fullcalendar.min.css') }}"> -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/fullcalendar5.1/main.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
        <!-- <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css"> -->

        <link rel="stylesheet" href="{{ asset('assets/vendor/select2/dist/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/quill/dist/quill.core.css') }}">
        
        <link href="https://api.tiles.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css" rel="stylesheet" />
        
        <link href="{{ asset('css/chosen.css') }}" rel="stylesheet">
        <link href="{{ asset('css/argon.css?v=1.1.0') }}" rel="stylesheet">
        <link href="{{ asset('css/dashstyle.css') }}" rel="stylesheet">
        <link href="{{ asset('css/dashrwd.css') }}" rel="stylesheet">
        <link href="{{ asset('css/rwd.css') }}" rel="stylesheet">
        <link href="{{ asset('css/flags.css') }}" rel="stylesheet">
        

        @yield('style')
    </head>
    <body>
        <!-- Sidenav -->
        <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-base" id="sidenav-main">
            <div class="scrollbar-inner">
                <!-- Brand -->
                <div class="sidenav-header d-flex align-items-center">
                    <a class="navbar-brand" href="/first">
                    <img src="{{ asset('image/logo.png') }}" class="navbar-brand-img" alt="LOGO">
                    </a>
                    
                    <div class="ml-auto">
                        <!-- Sidenav toggler -->
                        <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
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
                                <a class="nav-link" href="/place">
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
                                    <i class="fa fa-search"></i>
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
                                <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main" id="sidebar-toggler">
                                    <div class="sidenav-toggler-inner">
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                        <!-- <i class="fa fa-angle-double-left"></i> -->
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
            @yield('content')
        </div>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>

        <!-- Map box -->
        <script src="https://api.tiles.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>
        <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
        <!-- Optional JS -->
        <script src="{{ asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
        <script src="{{ asset('assets/vendor/moment/min/moment.min.js') }}"></script>
        <!-- <script src="{{ asset('assets/vendor/fullcalendar/dist/fullcalendar.min.js') }}"></script> -->
        <script src="{{ asset('assets/vendor/fullcalendar5.1/main.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/list.js/dist/list.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/select2/dist/js/select2.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/nouislider/distribute/nouislider.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/quill/dist/quill.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/dropzone/dist/min/dropzone.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
        <script src="https://harvesthq.github.io/chosen/chosen.jquery.js"></script>
        <!-- Argon JS -->
        <script src="{{ asset('assets/js/argon.js?v=1.1.0') }}"></script>
        <!-- Demo JS - remove this in your project -->
        <script src="{{ asset('assets/js/demo.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('js/jquery.flagstrap.min.js') }}"></script>


        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
        @yield('script')
    </body>  
</html>
