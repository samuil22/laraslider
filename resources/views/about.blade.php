
<x-layout>
@section('title','aboutpage')
 
<div class="container-fluid pt-3 pb-4">
    <div class="row"> 
    <h1 class="text-center pb-2">This is About page</h1>
        <x-slider>
            <x-slider-item item="asset/image/slider05.jpg"></x-slider-item>
            <x-slider-item item="asset/image/slider06.jpg"></x-slider-item>
            <x-slider-item item="asset/image/slider07.jpg"></x-slider-item>
        </x-slider>
           
    </div>
</div>


@section('content')
@endsection
</x-layout>