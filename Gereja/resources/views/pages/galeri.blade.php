@extends('layouts.master')

@section('content')
@include('components.navbar')
<div class='container-fluid mt-3 mb-3 flex d-flex flex-column align-items-center'>
    <h1 class='fw-bold mt-3'>GALERI FOTO</h1>
    
    @if(count($galeri) == 0)
        <h1>Tidak ada foto di galeri saat ini</h1>
    @endif
    <div class='galeri mt-3'>
    
        @foreach($galeri as $foto)
            <img class='galeri-img' src="data:image/jpeg;base64,{{ base64_encode($foto['img']) }}" alt="Image">
        @endforeach
        
        
    </div>
    
</div>

  

@endsection