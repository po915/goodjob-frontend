@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
        <div class="col-md-8 col-lg-6" style="padding: 0px">
            <div class="login d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        
                        <div class="box-1">
                            <button class="btn-1" id="back"><i class="fa fa-arrow-left"></i> Back</button>
                            <h1 class="logo">LOGO</h1>

                            <p class="txt-3">Choose your license Package</p>
                            <p class="txt-4">Monthly prices in CHF excluding VAT, annual payment</p>

                            <!-- License Package card -->
                            <div class="card card-1">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                        <!-- Avatar -->
                                        <i class="fa fa-send-o i-1" style="font-size:36px; color:#69757E"></i>
                                        </div>
                                        <div class="col ml--2">
                                        <h4 class="mb-0">
                                            <a href="#!" style="color: #69757E">FREEBIE</a>
                                        </h4>
                                        <p class="text-sm text-muted mb-0">1 User</p>
                                        <p class="text-sm text-muted mb-0">Free Version</p>
                                        </div>
                                        <div class="col-auto">
                                        <button type="button" class="btn-2"><i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- License Package card -->
                            <div class="card card-1">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                        <!-- Avatar -->
                                        <i class="fa fa-fighter-jet i-1"></i>
                                        </div>
                                        <div class="col ml--2">
                                        <h4 class="mb-0">
                                            <a href="#!" style="color: #69757E">HIGHFIVE!</a>
                                        </h4>
                                        <p class="text-sm text-muted mb-0">Up to 5 Users</p>
                                        <p class="text-sm text-muted mb-0">9.90 / month</p>
                                        </div>
                                        <div class="col-auto">
                                        <button type="button" class="btn-2"><i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- License Package card -->
                            <div class="card card-1">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                        <!-- Avatar -->
                                        <i class="fa fa-plane i-1"></i>
                                        </div>
                                        <div class="col ml--2">
                                        <h4 class="mb-0">
                                            <a href="#!" style="color: #69757E">FLY HIGH</a>
                                        </h4>
                                        <p class="text-sm text-muted mb-0">Up to 10 Users</p>
                                        <p class="text-sm text-muted mb-0">19.90 / month</p>
                                        </div>
                                        <div class="col-auto">
                                        <button type="button" class="btn-2"><i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- License Package card -->
                            <div class="card card-1">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                        <!-- Avatar -->
                                        <i class="fa fa-space-shuttle i-1"></i>
                                        </div>
                                        <div class="col ml--2">
                                        <h4 class="mb-0">
                                            <a href="#!" style="color: #69757E">GALACTIC</a>
                                        </h4>
                                        <p class="text-sm text-muted mb-0">Unlimited Users</p>
                                        <p class="text-sm text-muted mb-0">29.90 / month</p>
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