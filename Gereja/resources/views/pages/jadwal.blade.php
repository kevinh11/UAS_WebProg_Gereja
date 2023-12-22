@extends('layouts.master')

@section('content')
  @include('components.navbar')

  <div class="hero flex d-flex flex-column justify-content-center align-items-center position-relative">
    <img class="section-bg" src="images/cross.jpg" alt="foto gereja">  
    <h1 class="display-4 text-center text-black">Acara</h1>
  </div>

  <div class="container-fluid mt-5 mb-5">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="card p-4 rounded shadow mb-4">
          <h2 class="mb-4 fw-bold text-center">Jadwal Acara</h2>

          @if(count($events) == 0)
            <div style="min-height:50vh" class="d-flex flex-column justify-content-center align-items-center">
              <h4>Tidak Ada Acara</h4>
            </div>
          @else
            @foreach ($events as $key => $event)
              <div class="event mt-3 p-3 rounded" style="background-color: {{ getColor($key) }};">
                <h3 class="mb-2 fw-bold">{{$event->event_title}}</h3>
                <p class="mb-1"><strong>Tanggal:</strong> {{$event->event_date}}</p>
                <p><strong>Waktu:</strong> {{$event->event_time}}</p>
                <hr class="my-3"> 
              </div>
            @endforeach
          @endif
        </div>
      </div>
    </div>
  </div>

  <div class="mb-5"></div> 

  @include('components.footer')
@endsection

@php
  function getColor($index) {
      $colors = ['#ffcc66', '#99cc99', '#6699cc', '#cc9999', '#9966cc'];
      return $colors[$index % count($colors)];
  }
@endphp
