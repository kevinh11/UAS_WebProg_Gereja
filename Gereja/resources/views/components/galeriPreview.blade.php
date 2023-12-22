<div class='container-fluid mt-3 mb-3 flex d-flex flex-column align-items-center'>
    <h1 class='fw-bold'>GALERI FOTO</h1>

    @if(count($preview) == 0)
        <h2>Tidak ada foto di galeri saat ini</h2>
    @endif
    <div class='galeri mt-3'>
    
        @foreach($preview as $foto)
            <img class='preview-img' src="data:image/jpeg;base64,{{ base64_encode($foto['img']) }}" alt="Image">
        @endforeach
        
        
    </div>

    <a href='/galeri'><button class='mt-2 p-3 btn fw-bold'>FOTO LAIN</button></a>

</div>
