@extends('layouts.master')
@section('content')
  @include('components.navbar')
  @include('components.hero')
  @include('components.sambutan')
  @include('components.pengumuman')
  @include('components.ayat')
  @include('components.galeriPreview')
  @include('components.footer')
  <script src='js/announcement.js'></script>
  <script src='/js/ayat.js'></script>
@endsection
