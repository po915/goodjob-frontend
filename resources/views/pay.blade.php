@extends('layout.main')

@section('content')
<div class="box-center box-2">
<h1>LOGO</h1>
<p class="txt-9">Pay and start immediately!</p>
<p class="txt-10">How do you want to pay today?</p>
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