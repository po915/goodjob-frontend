@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
        <div class="col-md-8 col-lg-6" style="padding: 0px">
            <div class="login d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        
                        <div class="login-snip">
                            <div class="logo-box">
                                <img src="{{ asset('image/logo.png') }}" class="logo mx-auto" alt="">
                            </div>
                            
                            <h3 class="txt-1">Hi! Nice to See you.</h3>
                            <h5 class="txt-2">Please register or login.</h5>
                            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">New Account</label> 
                            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign In</label>

                            <div class="login-space">                            
                                <div class="login">
                                    <div class="container" style="padding:0px">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="group"> <input id="s_f_name" type="text" class="input" placeholder="Firstname"> </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="group"> <input id="s_email" type="email" class="input" placeholder="Email"> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="group"> <input id="s_l_name" type="text" class="input" placeholder="Lastname"> </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="group"> <input id="s_pwd" type="password" class="input" placeholder="Password"> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="group"> <input id="check" type="checkbox" class="check"> <label for="check" style="fontsize:8px"><span class="icon"></span> By registering, you agree with our terms and conditions.</label> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="group"> <input type="button" id="sign_up" class="button" value="Create new account"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sign-up-form">
                                    <div class="container" style="padding:0px">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="group"> <input id="l_email" type="email" class="input" placeholder="Email"> </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="group"> <input id="l_pwd" type="password" class="input" placeholder="Password"> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="group"> <input id="remember" type="checkbox" class="check"> <label for="remember" style="fontsize:8px"><span class="icon"></span> Remember me.</label> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="group"> <input type="button" id="sign_in" class="button" value="Sign In"> </div>
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
</script>
@endsection