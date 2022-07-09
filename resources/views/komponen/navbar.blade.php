<nav class="navbar navbar-expand-lg fixed-top navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Tokoku</a>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Staff
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('staff')}}"><i class="fa-solid fa-users"></i> Data Staff </a></li>
                        <li><a class="dropdown-item" href="{{route('pengaturan_shift')}}"> <i class="fa-solid fa-clock"></i> Pengaturan Shift</a></li>
                        <li><a class="dropdown-item" href="{{route('pengaturan_akses')}}"><i class="fa-solid fa-key"></i> Pengaturan Akses</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Inventori
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-boxes-stacked"></i> Stok</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-down-left-and-up-right-to-center"></i> In - Out Produk</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Penjualan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('kasir')}}"> <i class="fa-solid fa-cash-register"></i> Kasir</a></li>
                        <li><a class="dropdown-item" href="{{route('mutasi')}}"><i class="fa-solid fa-dolly"></i> Mutasi</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{route('proses-bulanan')}}">Proses Bulanan</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Laporan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Master
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('produk')}}"><i class="fa-solid fa-box"></i> Produk</a></li>
                        <li><a class="dropdown-item" href="{{route('kategori_produk')}}"><i class="fa-solid fa-boxes-packing"></i> Kategori Produk</a></li>
                        <li><a class="dropdown-item" href="{{route('variasi')}}"> <i class="fa-solid fa-diagram-project"></i> Variasi Produk</a></li>
                        <li><a class="dropdown-item" href="{{route('kategori_variasi')}}"><i class="fa-solid fa-list-ol"></i> Kategori Variasi</a></li>
                        <li><a class="dropdown-item" href="{{route('satuan')}}"><i class="fa-solid fa-hand-holding"></i> Satuan</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{route('penentuan_jual')}}"><i class="fa-solid fa-rupiah-sign"></i> Penentuan Harga Jual</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Basis Data
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Backup</a></li>
                        <li><a class="dropdown-item" href="#">Restore</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>

            <div class="d-flex">

                <ul class="navbar-nav me-2">
                    <li class="me-5 mt-2"><h6>
                        Selamat Datang Di
                        <small class="text-muted">Pusat</small>  <i class="fa-solid fa-store"></i>
                    </h6></li>
                    <li class="nav-item dropstart">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user"></i> Didik Wijanarko 
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('setting')}}">Setting</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
                
                
            </div>



        </div>
    </div>
</nav>
