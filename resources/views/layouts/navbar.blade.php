<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Aplikasi Laravel</a>
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
          <a class="nav-link {{ Request::is('laporan') ? 'active' : '' }}" href="{{ url('laporan') }}">Laporan</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
