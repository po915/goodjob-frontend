<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Good job</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{ asset('css/newstyle.css') }}" rel="stylesheet">
        <link href="{{ asset('css/rwd.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="container-fluid">
            <div class="row no-gutter register-content">
                <div class="col-lg-6 box-1">
                    <img src="{{ asset('image/first.png') }}" class="f-img" alt="First Image" />
                </div>
                <div class="col-lg-6 box-2">
                    <div class="box-x">
                        <div class="row pt-5">
                            <img src="{{ asset('image/logo.png') }}" class="logo mx-auto" alt="LOGO" />
                        </div>
                        <div class="row">
                            <h3 class="txt-1 mx-auto mt-5">Hi! Nice to See you.</h3>
                        </div>
                        <div class="row">
                            <p class="txt-2 mx-auto mt-2 mb-4">Please register or login.</p>
                        </div>

                        <div class="signin d-flex align-items-center">
                            <div class="login-snip">

                                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">New account</label> 
                                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign in</label>
                                
                                <div class="login-space">
                                    <div class="login">
                                        <div class="row mt-2">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-label-group">
                                                    <input type="text" id="first_name" class="form-control form-01" placeholder="First name" required>
                                                    <label for="first_name">First name</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-label-group">
                                                    <input type="email" id="inputEmail" class="form-control form-01" placeholder="Email address" required>
                                                    <label for="inputEmail">Email address</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-label-group">
                                                    <input type="text" id="last_name" class="form-control form-01" placeholder="Last name" required>
                                                    <label for="last_name">Last name</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-label-group">
                                                    <input type="password" id="sign_pwd" class="form-control form-01" placeholder="Password" name="txtPassword" />
                                                    <label for="sign_pwd">Password</label>
                                                    <button type="button" id="btnToggle" class="toggle"><i id="eyeIcon" class="fa fa-eye"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 text-left">
                                                <label class="custom-checkbox">
                                                    <div>By registering you agree to our terms and conditions.</div>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <button class="btn-1" id="sign_up">Create new account</button>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="sign-up-form">
                                        <div class="row mt-2">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-label-group">
                                                    <input type="email" id="mail" class="form-control form-01" placeholder="Email" required>
                                                    <label for="Email">Email</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-label-group">
                                                    <input type="password" id="log_pwd" class="form-control form-01" placeholder="Password" name="txtPassword" />
                                                    <label for="log_pwd">Password</label>
                                                    <button type="button" id="btnToggle-1" class="toggle"><i id="eyeIcon-1" class="fa fa-eye"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 text-left">
                                            <label class="custom-checkbox">
                                                Remember me
                                                <input type="checkbox">
                                                <span class="checkmark x-1"></span>
                                            </label>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <button class="btn-1" id="login">Sign in</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $("#sign_up").on("click", function() {
                window.location.href = "/plan";
            });
            let passwordInput = document.getElementById("sign_pwd"),
                toggle = document.getElementById("btnToggle"),
                icon = document.getElementById("eyeIcon");

            function togglePassword() {
                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    icon.classList.add("fa-eye-slash");
                } else {
                    passwordInput.type = "password";
                    icon.classList.remove("fa-eye-slash");
                }
            }
            toggle.addEventListener("click", togglePassword, false);
            passwordInput.addEventListener("keyup", checkInput, false);
        </script>
    </body>  
</html>
