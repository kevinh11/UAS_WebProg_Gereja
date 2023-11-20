<nav class='navbar navbar-light navbar-expand-lg p-3 flex-row justify-content-between'>
  <div class='nav-logo flex d-flex'>
    <img src='images/logo.png'>
    <h5 class='fw-bold'> Isa Almasih <br> Jemaat <br>Rajawali</h5>
  </div>

  <button class='navbar-toggler collapsed' data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"'>
    <img id='hamburger-icon' src='images/hamburger-icon.jpg'>
  </button>

  <div class='justify-content-end navbar-collapse collapse' id="navbarNavAltMarkup">
    <div class="navbar-text fw-bold px-3"> 
      <a href='/'> Home </a>
    </div>
    <div class="navbar-text fw-bold px-3"><a>Acara</a></div>
    <div class="navbar-text fw-bold px-3"> <a>Tentang Kami </a></div>
    
    @if(!isset($_COOKIE['loggedIn']))
      <a href='/admin-login'><img id='auth' src='images/login.png'></a>
      @else
    @endif
  
  </div>



</nav>