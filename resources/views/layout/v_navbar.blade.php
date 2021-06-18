  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">
    <img src="https://s.clipartkey.com/mpngs/s/157-1572285_logo-buku-terbuka.png" width="80" height="50" alt="Malas Ngoding">
    LIBRARY
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/halutama">HOME<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ABOUT</a>
        </li>
        @if(session('level')==1)
        <li class="nav-item">
        <a class="nav-link" href="/daftarbuku">DAFTAR BUKU</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/daftaruser">DAFTAR AKUN</a>
        </li>
        @elseif(session('level')==2)
        <li class="nav-item">
        <a class="nav-link" href="/daftaruser">DAFTAR AKUN</a>
        </li>
        @endif
        <li class="nav-item">
        <a class="nav-link" href="/logout">Logout</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <a class="navbar-brand" href="#">
        <img src="https://png.pngitem.com/pimgs/s/4-40070_user-staff-man-profile-user-account-icon-jpg.png" width="50" height="50" alt="person">
        </a>
      </form>
    </div>
  </nav>
