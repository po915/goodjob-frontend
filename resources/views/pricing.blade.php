@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div class="row no-gutter">
        <div class="d-none d-md-flex col-lg-6 f-img-box">
            <img src="{{ asset('image/first.png') }}" class="f-img" alt="">
        </div>
        <div class="col-md-8 col-lg-6" style="padding: 0px">
            <div class="login d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        
                        <div class="box-1">
                            <button class="btn-1" id="back"><i class="fa fa-arrow-left"></i> Back</button>
                            <div class="logo-box">
                                <img src="{{ asset('image/logo.png') }}" class="logo mx-auto" alt="">
                            </div>

                            <p class="txt-5">Congratulations! <br> You are a great starter!</p>
                            <p class="txt-4">Prices in CHF excl. VAT</p>

                            <div class="container">
                                <div class="row">
                                    
                                    <div class="col-lg-4 box-03">
                                        <div class="card card-pricing text-center card-2">
                                            <div class="card-header bg-transparent">
                                                <img src="{{ asset('image/l-2.png') }}" class="i-3" alt="high">
                                                <h4 class="text-uppercase ls-1 text-white mb-0">HIGH FIVE</h4>
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
                                                            <p class="txt-8">Unlimited Storage</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <button class="btn-3">Start Package</button>
                                    </div>

                                    <div class="col-lg-4 box-03">
                                        <div class="card card-pricing text-center card-2">
                                            <div class="card-header bg-transparent">
                                                <img src="{{ asset('image/l-3.png') }}" class="i-3" alt="high">
                                                <h4 class="text-uppercase ls-1 text-white mb-0">FLY HIGH</h4>
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
                                                            <p class="txt-8">Xy GB Stroage</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <button class="btn-3">Start Package</button>
                                    </div>

                                    <div class="col-lg-4 box-03">
                                        <div class="card card-pricing text-center card-2">
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
                                        </div>
                                        <button class="btn-3">Start Package</button>
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
    $(".card-1").on("click", function() {
        window.location.href = "/pricing";
    })
    $("#back").on("click", function() {
        window.history.back();
    })
    $(".btn-3").on("click", function() {
        window.location.href = "/pay";
    })

</script>
@endsection