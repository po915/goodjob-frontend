@extends('layout.main')

@section('content')
<div class="box-center box-2">
    <div class="logo-box">
        <img src="{{ asset('image/logo1.png') }}" class="logo mx-auto" alt="">
    </div>
    <p class="txt-9">Pay and start immediately!</p>
    <p class="txt-10">How do you want to pay today?</p>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 text-center">
                <img src="{{ asset('image/visa.png') }}" alt="visa" class="pay-img">
            </div>
            <div class="col-lg-6 col-sm-12 text-center">
                <img src="{{ asset('image/master.png') }}" alt="master" class="pay-img">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12 text-center">
                <img src="{{ asset('image/paypal.png') }}" alt="paypal" class="pay-img">
            </div>
            <div class="col-lg-6 col-sm-12 text-center">
                <img src="{{ asset('image/twint.png') }}" alt="twint" class="pay-img">
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
        window.location.href = "/first";
    })
</script>
@endsection