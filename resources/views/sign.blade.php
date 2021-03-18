@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div class="row no-gutter">
        <div class="d-none d-md-flex col-lg-6 f-img-box">
            <img src="{{ asset('image/first.png') }}" class="f-img" alt="">
        </div>
        <div class="col-md-12 col-lg-6 box-01">
            <div class="logo-box pt-5">
                <img src="{{ asset('image/logo.png') }}" class="logo" alt="">
                <h3 class="txt-01 pt-5">Hi, Nice to See you.</h3>
                <p class="txt-02">Please register or login.</p>
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
                                        By registering you agree to our terms and conditions.
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <button class="btn-3" id="sign_up">Create new account</button>
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
                                    <button class="btn-3" id="login">Sign in</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')
<script>
    $("#sign_up").on("click", function() {
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
        window.location.href = "/sign-up";
    })

    // password show/hide toggle
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

    // let log_pwd = document.getElementById("log_pwd"),
    //     toggleOne = document.getElementById("btnToggle-1"),
    //     iconOne = document.getElementById("eyeIcon-1");

    // function togglePassword() {
    //     if (log_pwd.type === "password") {
    //         log_pwd.type = "text";
    //         iconOne.classList.add("fa-eye-slash");
    //     } else {
    //         passwordInput.type = "password";
    //         iconOne.classList.remove("fa-eye-slash");
    //     }
    // }
    // toggleOne.addEventListener("click", togglePassword, false);
    // log_pwd.addEventListener("keyup", checkInput, false);
    // password show/hide toggle
</script>

@endsection