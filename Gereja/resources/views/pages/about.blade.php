@extends('layouts.master')
@section('content')
  @include('components.navbar')
  <div class='hero flex d-flex flex-column justify-content-center align-items-center'>
    <img class='section-bg' src="images/gereja.jpg" alt="gia rajawali">  
    <h1>Tentang Kami</h1>
  </div>
  @include('components.gembala')
  @include('components.footer')
@endsection