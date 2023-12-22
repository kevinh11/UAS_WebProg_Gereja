@extends('layouts.master');

@section('content')
@include('components.navbar')
<div class='container-fluid mt-3 mb-3 flex d-flex flex-column align-items-center'>
    <h1 class='fw-bold'>GALERI FOTO</h1>

    <div class='galeri'>
        <img data-aos="fade-right" src={{ asset('images/altar.jpg') }}>
        <img data-aos="zoom-in" src={{ asset('images/altar.jpg') }}>
        <img data-aos="fade-left" src={{ asset('images/altar.jpg') }}>
        <img data-aos="fade-right" src={{ asset('images/altar.jpg') }}>
        <img data-aos="zoom-in" src={{ asset('images/altar.jpg') }}>
        <img data-aos="fade-left" src={{ asset('images/altar.jpg') }}>
    </div>
</div>

  

@endsection