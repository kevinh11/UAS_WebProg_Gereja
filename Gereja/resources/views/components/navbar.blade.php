<nav class='navbar navbar-light navbar-expand-lg p-3 flex-row justify-content-between'>
  <div class='nav-logo flex d-flex'>
    <a href='/'><img src={{asset('images/logo.png')}}></a>
    <h5 class='fw-bold'> Isa Almasih <br> Jemaat <br>Rajawali</h5>
  </div>
  <button class='navbar-toggler collapsed' data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"'>
    <img id='hamburger-icon' src={{asset('images/hamburger-icon.jpg')}}>
  </button>
  <div class='justify-content-end navbar-collapse collapse' id="navbarNavAltMarkup">
    <div class="navbar-text fw-bold px-3"> 
      <a href='/'> Home </a>
    </div>
    <div class="navbar-text fw-bold px-3"><a href='/jadwal'>Acara</a></div>
    @if(isset($_COOKIE['loggedIn'])) 
      <div class="nav-item dropdown">
        <a class="fw-bold nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Admin
        </a>
        <div class="dropdown-menu">
          <a class='text-dark p-2'href='/admin-dashboard'>Admin Dashboard</a>
        </div>
      </div>
    @endif
    <div class="navbar-text fw-bold px-3"> <a href='about'>Tentang Kami </a></div>
   
    
  
  </div>

</nav>