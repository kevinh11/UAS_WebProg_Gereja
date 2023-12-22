<div class="footer container-fluid d-flex flex-lg-row p-3 flex-column align-items-sm-center justify-content-lg-between">
    <div class='text w-50'>
        <p class='fw-bold'> ©Copyright 2023 Isa Almasih Jemaat Rajawali</p>
        <p>Jl. Rajawali Selatan Raya No.35 Jakarta <br>
            (021) 64713664 <br>
            giarajawali35@gmail.com</p>
        @if(!isset($_COOKIE['loggedIn']))
        <a href='admin-login' class='admin-link'> Admin </a>
        @else
        <a href='logout' class='admin-link'> Logout </a>
        @endif
    </div>

    <div class='w-50 socmed d-flex flex-column align-items-end px-5'>

        <p class='fw-bold w-sm-100 w-lg-10'>Ikuti Sosmed Kami</p>

        <div class="socmed-row flex d-flex flex-row align-items-center justify-content-center">
            <a href="https://www.instagram.com/giarajawali.jkt/" target="_blank"><img class='brand' src={{ asset('images/insta.png') }}></a>
            <a href="https://www.facebook.com/giarajawali.jkt/" target="_blank"><img class='brand' src={{ asset('images/facebook.png') }}></a>
            <a href="https://www.youtube.com/channel/UCYvHKxc8qZh60C8rdEQOjpg" target="_blank"><img class='brand' src={{ asset('images/youtube.png') }}></a>

        </div>
    </div>

</div>