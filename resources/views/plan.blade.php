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
        <div class="container-fluid desktop">
            <div class="row no-gutter desktop-inner">
                <div class="col-lg-6 box-1">
                    <img src="{{ asset('image/first.png') }}" class="f-img" alt="First Image" />
                </div>
                <div class="col-lg-6 box-2">
                    <div class="box-x">
                        <div class="row">
                            <img src="{{ asset('image/logo.png') }}" class="logo mx-auto" alt="LOGO" />
                        </div>
                        <div class="row">
                            <h3 class="txt-3 mx-auto mt-2">Congratulations!</h3>
                        </div>
                        <div class="row">
                            <h3 class="txt-3 mx-auto">You are a great starter!</h3>
                        </div>
                        <div class="row">
                            <p class="txt-5 mx-auto mt-2 mb-4">Prices in CHF excl. VAT</p>
                        </div>
                        <div class="row" style="justify-content:center">

                            <div class="card-box">
                                <div class="card text-center card-2">
                                    <div class="card-header bg-transparent">
                                        <img src="{{ asset('image/l-1.png') }}" class="i-3" alt="high">
                                        <h4 class="text-uppercase ls-1 text-white mb-0">FREE BIE</h4>
                                        <div class="line"></div>
                                    </div>
                                    <div class="card-body">
                                        <p class="txt-7">VER</p>
                                        <div class="txt-05 text-white">FREE</div>
                                        <span class="text-white txt-6">Permenantly free</span>
                                        <ul class="list-unstyled list-1">
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <i class="fa fa-check i-2"></i>
                                                    <p class="txt-8">1 User</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <i class="fa fa-check i-2"></i>
                                                    <p class="txt-8">Support within 8 hours</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <i class="fa fa-check i-2"></i>
                                                    <p class="txt-8">Limited Storage</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <button class="btn-3">Start Package</button>
                                </div>
                                <div class="card text-center card-2">
                                    <div class="card-header bg-transparent">
                                        <img src="{{ asset('image/l-2.png') }}" class="i-3" alt="high">
                                        <h4 class="text-uppercase ls-1 text-white mb-0">HIGH FIVE</h4>
                                        <div class="line"></div>
                                    </div>
                                    <div class="card-body">
                                        <p class="txt-7">CHF</p>
                                        <div class="txt-05 text-white">19.90</div>
                                        <span class="text-white txt-6">per month, paid annually</span>
                                        <ul class="list-unstyled list-1">
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <i class="fa fa-check i-2"></i>
                                                    <p class="txt-8">5 Users</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <i class="fa fa-check i-2"></i>
                                                    <p class="txt-8">Support within 24 hours</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <i class="fa fa-check i-2"></i>
                                                    <p class="txt-8">Xy GB Storage</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <button class="btn-3">Start Package</button>
                                </div>
                                <div class="card text-center card-2">
                                    <div class="card-header bg-transparent">
                                        <img src="{{ asset('image/l-3.png') }}" class="i-3" alt="high">
                                        <h4 class="text-uppercase ls-1 text-white mb-0">FLY HIGH</h4>
                                        <div class="line"></div>
                                    </div>
                                    <div class="card-body">
                                        <p class="txt-7">CHF</p>
                                        <div class="txt-05 text-white">29.90</div>
                                        <span class="text-white txt-6">per month, paid annually</span>
                                        <ul class="list-unstyled list-1">
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <i class="fa fa-check i-2"></i>
                                                    <p class="txt-8">5 Users</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <i class="fa fa-check i-2"></i>
                                                    <p class="txt-8">Support within 8 hours</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <i class="fa fa-check i-2"></i>
                                                    <p class="txt-8">Xy GB Storage</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <button class="btn-3">Start Package</button>
                                </div>
                                <div class="card text-center card-2">
                                    <div class="card-header bg-transparent">
                                        <img src="{{ asset('image/l-4.png') }}" class="i-3" alt="high">
                                        <h4 class="text-uppercase ls-1 text-white mb-0">GALACTIC</h4>
                                        <div class="line"></div>
                                    </div>
                                    <div class="card-body">
                                        <p class="txt-7">CHF</p>
                                        <div class="txt-05 text-white">49.90</div>
                                        <span class="text-white txt-6">per month, paid annually</span>
                                        <ul class="list-unstyled list-1">
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <i class="fa fa-check i-2"></i>
                                                    <p class="txt-8">Unlimited Users</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <i class="fa fa-check i-2"></i>
                                                    <p class="txt-8">Support within 1 hours</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <i class="fa fa-check i-2"></i>
                                                    <p class="txt-8">Unlimited Storage</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <button class="btn-3">Start Package</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mobile">
            <div class="row pt-5">
                <img src="{{ asset('image/logo.png') }}" class="logo mx-auto" alt="LOGO" />
            </div>
            <div class="row">
                <h4 class="txt-3 mx-auto mt-2">Choose your license package</h4>
            </div>
            <div class="card card-1 mt-4">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <img src="{{ asset('image/l-1.png') }}" class="i-1" alt="free">
                        </div>
                        <div class="col ml--2">
                        <p class="mb-0 txt-03">FREEBIE</p>
                        <p class="text-sm text-muted mb-0 txt-04">1 User</p>
                        <p class="text-sm text-muted mb-0 txt-04">Free version</p>
                        </div>
                        <div class="col-auto">
                        <button type="button" class="btn-2"><i class="fa fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-1">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <img src="{{ asset('image/l-2.png') }}" class="i-1" alt="free">
                        </div>
                        <div class="col ml--2">
                        <p class="mb-0 txt-03">HIGH FIVE!</p>
                        <p class="text-sm text-muted mb-0 txt-04">Up to 5 Users</p>
                        <p class="text-sm text-muted mb-0 txt-04">9.90 / month</p>
                        </div>
                        <div class="col-auto">
                        <button type="button" class="btn-2"><i class="fa fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-1">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <img src="{{ asset('image/l-3.png') }}" class="i-1" alt="free">
                        </div>
                        <div class="col ml--2">
                        <p class="mb-0 txt-03">FLY HIGH</p>
                        <p class="text-sm text-muted mb-0 txt-04">Up to 10 Users</p>
                        <p class="text-sm text-muted mb-0 txt-04">19.90 / month</p>
                        </div>
                        <div class="col-auto">
                        <button type="button" class="btn-2"><i class="fa fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-1">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <img src="{{ asset('image/l-4.png') }}" class="i-1" alt="free">
                        </div>
                        <div class="col ml--2">
                        <p class="mb-0 txt-03">GALACTIC</p>
                        <p class="text-sm text-muted mb-0 txt-04">Unlimited Users</p>
                        <p class="text-sm text-muted mb-0 txt-04">29.90 / month</p>
                        </div>
                        <div class="col-auto">
                        <button type="button" class="btn-2"><i class="fa fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            $(".btn-3").on("click", function() {
                window.location.href = "/pay";
            });
            $(".btn-2").on("click", function() {
                window.location.href = "/pay";
            });
        </script>
    </body>  
</html>
