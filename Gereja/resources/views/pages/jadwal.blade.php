@extends('layouts.master')
@section('content')
  @include('components.navbar')
  <div class='hero flex d-flex flex-column justify-content-center align-items-center'>
    <img class='section-bg' src="images/cross.jpg" alt="foto gereja">  
    <h1>ACARA</h1>
  </div>
  <div class='container-fluid flex d-flex flex-column p-3'>
    @if(count($events) == 0)
      <div style="min-height:50vh" class="container-fluid flex d-flex flex-column justify-content-center align-items-center">
        <h1>Tidak Ada Acara </h1>
      </div>


    @endif
    @foreach ($events as $event)
      <div class='event mt-3 p-3 container md-rounded d-flex flex flex-column'>
        <h3 class=' mb-4 fw-bold'>{{$event->event_title}}</h3>
        {{$event->event_date}}
        <p>{{$event->event_time}}</p>
      </div>
    @endforeach
  </div>
  @include('components.footer')
@endsection