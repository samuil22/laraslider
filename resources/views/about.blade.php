@extends('layout.masterLayout')



@section('title','homepage')
@section('content')
<div class="container height500">
    <div class="row">
        <h1 class="text-center pt-3 pb-3">This is about page</h1>
            <x-slider-item>
                <img src="{{asset('asset/image/slider03.jpg')}}" class="d-block w-100" alt="...">
                 
            </x-slider-item>
    </div>
</div> 
@endsection