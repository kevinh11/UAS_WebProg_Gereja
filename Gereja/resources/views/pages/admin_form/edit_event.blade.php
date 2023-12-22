@extends('layouts.forms')


@section('content')
  <h1 class='fw-bold'>Edit Acara</h1>
  <form method='post' action='edit/execute' class='login-form'>
    @csrf
    <div class="w-100 form-group mt-4">
      <label for="username">ID Acara</label>
      <input disabled type="text" class="form-control" value= {{$event['id']}}>
    </div>

    <div class="form-group mt-4 flex d-flex flex-column">
      <label for="jam">Judul Acara</label>
      <textarea required name='judul'></textarea>
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