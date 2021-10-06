@push('css')

<link rel="stylesheet" href="asset/css/owl.carousel.min.css">
<link rel="stylesheet" href="asset/css/owl.theme.default.min.css">
<link rel="stylesheet" href="asset/css/home.css">
@endpush 
    <div class="owl-carousel p-0"> 
        {{$slot}}
    </div>  
@push('owl-js')
<script src="asset/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="asset/js/carousel.js" type="text/javascript"></script>
@endpush


 
 