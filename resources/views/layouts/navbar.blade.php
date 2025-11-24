<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Manajemen Data</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="{{ url('home') }}">Home</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('tampil-produk') ? 'active' : '' }}" href="{{ url('tampil-produk') }}">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('tampil-kategori') ? 'active' : '' }}" href="{{ url('tampil-kategori') }}">Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('transaksi') ? 'active' : '' }}" href="{{ url('transaksi') }}">Transaksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('tampil-laporan') ? 'active' : '' }}" href="{{ url('tampil-laporan') }}">Laporan</a>
        </li>
        @auth
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="route('profile')">Profile</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    @else
        <a href="{{ route('login') }}">Login</a> | <a href="{{ route('register') }}">Register</a>
    @endauth

      </ul>
    </div>
  </div>
</nav>
