<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse text-white">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column px-2">
            <?php if ($this->session->userdata['role'] == "Petugas") { ?>
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="<?php echo base_url("index.php/dashboard/admin") ?>">Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo base_url("/index.php/user") ?>">Data User
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo base_url("index.php/book") ?>">
                        <i class="fa-solid fa-books text-white"></i>Data Buku
                    </a>
                </li>
                <li class="nav-item">
                    <button class="btn btn-toogle dropdown-toggle d-inline-flex text-white align-items-center border-0" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">Data Transaksi
                    </button>
                    <div class="collapse ps-4 pt-2" id="home-collapse">
                        <ul class="btn-toggle-nav list-unstyled pb-1">
                            <li class="pb-2"><a class="nav nav-link text-white" href="<?php echo base_url("/index.php/transaksi/peminjaman") ?>">Transaksi Peminjaman</a></li>
                            <li class="pb-2"><a class="nav nav-link text-white" href="<?php echo base_url("/index.php/transaksi/pengembalian") ?>">Transaksi Pengembalian</a></li>
                        </ul>
                    </div>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo base_url("index.php/dashboard/anggota") ?>">
                        <i class="fa-solid fa-books text-white"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo base_url("index.php/transaksi/peminjaman/anggota") ?>">
                        <i class="fa-solid fa-books text-white"></i>
                        Data Peminjaman
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo base_url("index.php/transaksi/pengembalian/anggota") ?>">
                        <i class="fa-solid fa-books text-white"></i>
                        Data Pengembalian
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo base_url("index.php/book") ?>">
                        <i class="fa-solid fa-books text-white"></i>Data Buku
                    </a>
                </li>
            <?php } ?>

        </ul>
        <hr class="my-3">
        <ul class="nav flex-column mb-auto">
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2" href="<?php echo base_url('index.php/login/logout') ?>">
                    Log out
                </a>
            </li>
        </ul>
    </div>
</nav>