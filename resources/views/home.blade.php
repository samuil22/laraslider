@extends('layout.masterLayout')
@section('title','homepage')


@push('css')
<link rel="stylesheet" href="asset/css/home.css">
@endpush


@section('content')
<div class="container-fluid height500">
    <div class="row"> 
        <x-slider :item="$item"/> 
    </div>
</div>

@endsection