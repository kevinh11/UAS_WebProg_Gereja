@extends('layouts.master')

@section('content')
  @include('components.navbar')

  <div class='page p-2 flex d-flex flex-column justify-content-start align-items-center'>
    <h1 class='fw-bold'>DASHBOARD</h1>
    <div class='container mt-5 mb-3 flex d-flex flex-column justify-content-start'>
      <div class="container table-section">
        <h4>Events</h4>
        <table class='mt-2 table table-striped'>
          <thead>
            <td>ID</td>
            <td>Nama</td>
            <td>Tanggal</td>
            <td>Jam</td>
            {{-- <td>Edit</td>
            <td>Delete</td> --}}
          </thead>

          <tbody>
            @foreach ($events as $e)
              <tr>
                <td>{{$e['id']}}</td>
                <td>{{$e['event_title']}}</td>
                <td>{{$e['event_date']}}</td>
                <td>{{$e['event_time']}}</td>
                <td> 
                  <a href='/events/{{$e['id']}}/edit'>
                    <button class='btn btn-primary btn-sm'>Edit</button>
                  </a>
                </td>
                <td> 
                  <a href='/events/{{$e['id']}}/delete'>
                    <button class='btn btn-danger btn-sm'>Delete</button>
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


      <div class="container mt-5 mb-3 table-section">
        <h4>Galeri</h4>
        <table class='mt-2 table table-striped'>
          <thead>
            <td>ID</td>
            <td>File</td>
            <td>Deskripsi</td>
            {{-- <td>Edit</td>
            <td>Delete</td> --}}
          </thead>

          <tbody>
            @foreach ($images as $i)
              <tr>
                <td>{{$i['id']}}</td>
                <td>
                  <img class='dashboard-gallery-img' src="data:image/jpeg;base64,{{ base64_encode($i['img']) }}" alt="Image">
                </td>
                <td>{{$i['desc']}}</td>
                <td> 
                  <a href='/images/{{$i['id']}}/edit'>
                    <button class='btn my-auto btn-primary'>Edit</button>
                  </a>
                </td>
                <td> 
                  <a href='/images/{{$i['id']}}/delete'>
                    <button class='btn btn-danger'>Delete</button>
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <a href='images/add'>
          <button class='btn btn-primary'>Tambahkan Gambar</button>
        </a>
      </div>
      
    </div>
  
  </div>
  @include('components.footer')
@endsection