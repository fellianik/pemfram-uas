<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom mt-5">
    <h1 class="h2"><?php echo $title ?></h1>
</div>

<div class="row">
    <div class="col">
        <div class="card text-center text-bg-success ">
            <div class="card-header">
                <h6>Jumlah Anggota</h6>
            </div>
            <div class="card-body">
                <h1><?php echo $jmlh_anggota ?></h1>
            </div>
            <div class="card-footer ">
                <a class="btn btn-sm btn-dark" href="<?php echo base_url('index.php/user') ?>">Info</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-center text-bg-info">
            <div class="card-header">
                <h6>Jumlah Buku</h6>
            </div>
            <div class="card-body">
                <h1><?php echo $jmlh_buku ?></h1>
            </div>
            <div class="card-footer">
                <a class="btn btn-sm btn-dark" href="<?php echo base_url('index.php/book') ?>">Info</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-center text-bg-warning">
            <div class="card-header">
                <h6>Jumlah Peminjaman</h6>
            </div>
            <div class="card-body">
                <h1><?php echo $jmlh_pinjam ?></h1>
            </div>
            <div class="card-footer ">
                <a class="btn btn-sm btn-dark" href="<?php echo base_url('index.php/transaksi/peminjaman') ?>">Info</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-center text-bg-danger">
            <div class="card-header">
                <h6>Jumlah Pengembalian</h6>
            </div>
            <div class="card-body">
                <h1><?php echo $jmlh_kembali ?></h1>
            </div>
            <div class="card-footer ">
                <a class="btn btn-sm btn-dark" href="<?php echo base_url('index.php/transaksi/pengembalian') ?>">Info</a>
            </div>
        </div>
    </div>
</div>