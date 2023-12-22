@extends('layouts.forms')


@section('content')

  <?php
    session_start();
  
  ?>
  <h1 class='fw-bold'>Tambah Gambar ke Galeri </h1>
    <h4>Max 10 mb</h4>
  <form id='upload-gambar-form' method='post' enctype="multipart/form-data" action='add/execute' class='login-form'>
    @csrf
    <div class="w-100 form-group mt-4">
      <label for="Upload gambar"></label>
      <input required type="file" class="form-control" id="gambar" name="gambar">
    </div>

    <div class="form-group mt-4 flex d-flex flex-column">
      <label for="desc">Deskripsi Gambar</label>
      <textarea class='p-3' required name='desc'></textarea>
    </div>

    @if(session('success'))
      <p class="text-danger">
          {{ session('success') }}
      </p>  
    @endif



    <button type="submit" class="mt-4 btn btn-primary">Submit</button>
  </form>

  <script src={{asset('js/verifyImage.js')}}></script>
  
@endsection