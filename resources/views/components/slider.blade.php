@push('css')

<link rel="stylesheet" href="asset/css/owl.carousel.min.css">
<link rel="stylesheet" href="asset/css/owl.theme.default.min.css">
<link rel="stylesheet" href="asset/css/home.css">
@endpush 
 
    <div class="owl-carousel p-0"> 
        {{$slot}}
    </div> 

@once
@push('scripts')
<script src="asset/js/owl.carousel.min.js" type="text/javascript"></script>
<!-- <script  src="asset/js/carousel.js" type="text/javascript"></script> -->
<script>
    $(document).ready(function(){ 
    $(".owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        items:{{$showAtATime}},
        dots:true,
    });
  });
</script>
@endpush
@endonce




 
 