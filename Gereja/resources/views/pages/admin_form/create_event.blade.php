@extends('layouts.forms')

@section('content')
  <h1 class='fw-bold'>Acara Baru</h1>

  <form method='post' action='create/execute' class='login-form'>
    @csrf
    <div class="w-100 form-group mt-4">
      <label for="username">Judul Acara</label>
      <input required type="text" class="form-control" id="judul" name="judul">
    </div>

    <div class="form-group mt-4 flex d-flex flex-column">
      <label for="jam">Jam Acara</label>
      <textarea required name='jam'></textarea>
    </div>
    <div class="form-group mt-4">
      <label for="password">Tanggal Acara</label>
      <input required type="date" class="form-control" id="date" name="tanggal">
    </div>
    <button type="submit" class="mt-4 btn btn-primary">Submit</button>
  </form>

@endsection