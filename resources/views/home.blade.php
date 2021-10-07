
<x-layout>
@section('title','homepage')
 
<div class="container-fluid pt-3 pb-4">
    <div class="row"> 
        <h1 class="text-center pb-2">This is Home page</h1>

         
        <x-slider showAtATime="1" >
            @foreach($item as $it)
                <x-slider-item ide="{{ $it['title'] }}" item="{{ $it['image'] }}"></x-slider-item>
            @endforeach 
        </x-slider>  
    </div>
</div>

 
<div class="container-fluid pt-3 pb-4">
    <div class="row">  
       <div class="col-md-6">
            <h3 class="text-center pb-2">Small Slider One</h3>
            {{--<x-slider>
                @foreach($item as $it)
                <div>
                    <h5>bos</h5>
                    <img src="{{ $it['image'] }}" alt=""> 
                </div>
                @endforeach 
            </x-slider>--}}
       </div>
      <div class="col-md-6">
            <h3 class="text-center pb-2">Small Slider Two</h3>
            <x-slider showAtATime="2">
                @foreach($item as $it)
                    <x-slider-item ide="{{ $it['title'] }}" item="{{ $it['image'] }}"></x-slider-item>
                @endforeach 
            </x-slider> 
       </div>
    </div>
</div>
  
@section('content')
@endsection
</x-layout>