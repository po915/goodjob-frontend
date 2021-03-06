@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 f-img-box">
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

                            <p class="txt-3">Choose your license Package</p>
                            <p class="txt-4">Monthly prices in CHF excluding VAT, <br> annual payment</p>

                            <!-- License Package card -->
                            <div class="card card-1">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <img src="{{ asset('image/l-1.png') }}" class="i-1" alt="free">
                                        </div>
                                        <div class="col ml--2">
                                        <p class="mb-0 txt-03">FREEBIE</p>
                                        <p class="text-sm text-muted mb-0 txt-04">1 User</p>
                                        <p class="text-sm text-muted mb-0 txt-04">Free Version</p>
                                        </div>
                                        <div class="col-auto">
                                        <button type="button" class="btn-2"><i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- License Package card -->
                            <div class="card card-1">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <img src="{{ asset('image/l-2.png') }}" class="i-1" alt="free">
                                        </div>
                                        <div class="col ml--2">
                                        <p class="mb-0 txt-03">HIGHFIVE!</p>
                                        <p class="text-sm text-muted mb-0 txt-04">Up to 5 Users</p>
                                        <p class="text-sm text-muted mb-0 txt-04">9.90 / month</p>
                                        </div>
                                        <div class="col-auto">
                                        <button type="button" class="btn-2"><i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- License Package card -->
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

                            <!-- License Package card -->
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

</script>
@endsection