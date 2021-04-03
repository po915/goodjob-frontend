<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Good job</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="{{ asset('template/vendor/nucleo/css/nucleo.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('template/vendor/select2/dist/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template/vendor/quill/dist/quill.core.css') }}">     
        <!-- <link rel="stylesheet" href="{{ asset('css/chosen.css') }}"> -->
        <link rel="stylesheet" href="{{ asset('css/argon.css?v=1.1.0') }}">
        <link rel="stylesheet" href="{{ asset('css/dashstyle.css') }}">
        <link rel="stylesheet" href="{{ asset('css/dashrwd.css') }}">
        <link rel="stylesheet" href="{{ asset('css/rwd.css') }}">

        

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
                                <a class="nav-link" href="/employee">
                                    <i class="ni ni-single-02 "></i>
                                    <span class="nav-link-text">Employees</span>
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
                                <a class="nav-link" href="/reminder">
                                    <i class="ni ni-bell-55 txt-dark"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav align-items-center ml-auto ml-md-0">
                            <li class="nav-item dropdown">
                                <!-- <a class="nav-link pr-0" href="/profile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
                                <a class="nav-link pr-0" href="/profile">
                                    <div class="media align-items-center">
                                        <span class="avatar avatar-sm rounded-circle">
                                            <img alt="Image placeholder" src="../../template/img/theme/team-4.jpg" />
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
            <div class="fog"></div>
        </div>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script src="{{ asset('template/vendor/js-cookie/js.cookie.js') }}"></script>
        <script src="{{ asset('template/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
        <script src="{{ asset('template/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>


        <!-- <script src="{{ asset('template/vendor/chart.js/dist/Chart.min.js') }}"></script> -->
        <!-- <script src="{{ asset('template/vendor/chart.js/dist/Chart.extension.js') }}"></script> -->
        <!-- <script src="{{ asset('template/vendor/moment/min/moment.min.js') }}"></script> -->
        <!-- <script src="{{ asset('template/vendor/fullcalendar/dist/fullcalendar.min.js') }}"></script> -->
        <!-- <script src="{{ asset('template/vendor/select2/dist/js/select2.min.js') }}"></script> -->
        <script src="{{ asset('template/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
        <!-- <script src="{{ asset('template/vendor/nouislider/distribute/nouislider.min.js') }}"></script> -->
        <!-- <script src="{{ asset('template/vendor/quill/dist/quill.min.js') }}"></script> -->
        <script src="{{ asset('template/vendor/dropzone/dist/min/dropzone.min.js') }}"></script>
        <!-- <script src="{{ asset('template/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script> -->
        <script src="{{ asset('template/js/argon.js?v=1.1.0') }}"></script>
        <script src="{{ asset('template/js/demo.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>


        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            // yellow bar to active nav-item
            $(document).ready(function () {
                $("[href='/"+$(".is-active").attr('val')+"']").addClass('active');
                $("a.active").parent().addClass("active-nav");
            });

        </script>
        @yield('script')
    </body>  
</html>
