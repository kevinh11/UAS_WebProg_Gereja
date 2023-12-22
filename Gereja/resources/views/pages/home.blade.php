@extends('layouts.master')
@section('content')
    @include('components.navbar')
    @include('components.hero')
    @include('components.sambutan')
    @include('components.pengumuman')
    @include('components.ayat')
    @include('components.galeriPreview')
    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src='js/announcement.js'></script>
    <script src='js/ayat.js'></script>
    <script>
        AOS.init({
            duration: 800,
            delay: 100,
        });
    </script>
@endsection
