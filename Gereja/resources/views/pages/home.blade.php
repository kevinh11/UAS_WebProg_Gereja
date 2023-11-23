@extends('layouts.master')
@section('content')
  @include('components.navbar')
  @include('components.hero')
  @include('components.sambutan')
  @include('components.pengumuman')
  @include('components.galeriPreview')
  @include('components.footer')
  <script src='js/announcement.js'></script>
@endsection
