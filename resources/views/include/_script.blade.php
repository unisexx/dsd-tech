<!-- Javascript -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="{{ url('comport_theme/assets/js/vendor/wow.min.js') }}"></script>
<!-- <script src="{{ url('comport_theme/assets/js/vendor/owl-carousel.min.js') }}"></script>
<script src="{{ url('comport_theme/assets/js/vendor/jquery.nice-select.min.js') }}"></script>
<script src="{{ url('comport_theme/assets/js/vendor/ion.rangeSlider.js') }}"></script> -->
<script src="{{ url('comport_theme/assets/js/main.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

{{-- alertify --}}
<script src="{{ url('/js/alertify/alertify.min.js') }}"></script>
<link href="{{ url('/js/alertify/css/alertify.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('/js/alertify/css/themes/default.min.css') }}" rel="stylesheet" type="text/css" />

<script>
$(function () {
    $("#rateYo").rateYo({
        maxValue: 4,
        numStars: 4,
        rating: 4,
        fullStar: true,
        // onChange: function (rating, rateYoInstance) {
        //     $(this).next().text(rating);
        // }
    });

    // var $rateYo = $("#rateYo").rateYo();
    // console.log( $rateYo.rateYo("rating") );

    // ตอนกดดาวให้คะแนน
    $("#rateYo").rateYo().on("rateyo.set", function (e, data) {
        // alert("The rating is set to " + data.rating + "!");
        $('input[name=score]').val(data.rating);
    });
});
</script>