<nav class="navbar navbar-light navbar-expand-lg p-3 shadow">
  <div class="container-fluid">
    <div class="nav-logo flex d-flex">
      <a class="navbar-brand" href="/">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
      </a>
      <div>
        <h5 class="fw-bold">Isa Almasih <br> Jemaat <br>Rajawali</h5>
      </div>
    </div>

    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <img id="hamburger-icon" src="{{ asset('images/hamburger-icon.jpg') }}" alt="Hamburger Icon">
    </button>

    <div class="justify-content-end navbar-collapse collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link fw-bold px-3" href="/">Home</a>
        <a class="nav-link fw-bold px-3" href="jadwal">Acara</a>

        @if(isset($_COOKIE['loggedIn'])) 
          <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Admin
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item text-dark" href="admin-dashboard">Admin Dashboard</a>
            </div>
          </div>
        @endif

        <a class="nav-link fw-bold px-3" href="about">Tentang Kami</a>
      </div>
    </div>
  </div>
</nav>
