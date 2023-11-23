@extends('layouts.master')

@section('content')
  @include('components.navbar')

  <div class='page p-2 flex d-flex flex-column justify-content-start align-items-center'>
    <h1 class='fw-bold'>DASHBOARD</h1>
    <div class='container mt-4 flex d-flex flex-column justify-content-start'>
      <div class="container table-section">
        <h4>Events</h4>
        <table class='mt-2 table table-striped'>
          <thead>
            <td>Nama</td>
            <td>Tanggal</td>
            <td>Jam</td>
            {{-- <td>Edit</td>
            <td>Delete</td> --}}
          </thead>

          <tbody>
            @foreach ($events as $e)
              <tr>
                <td>{{$e['event_title']}}</td>
                <td>{{$e['event_date']}}</td>
                <td>{{$e['event_time']}}</td>
                <td> 
                  <a href='/events/{{$e['id']}}/edit'>
                    <button class='btn btn-primary'>Edit</button>
                  </a>
                </td>
                <td> 
                  <a href='/events/{{$e['id']}}/delete'>
                    <button class='btn btn-danger'>Delete</button>
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>

        <a href='events/create'>
          <button class='btn btn-primary'> Buat Event baru</button>
        </a>
      </div>
      
    </div>
  
  </div>
  @include('components.footer')
@endsection