<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom mt-5">
    <h1 class="h2">Daftar <?php echo $title ?></h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <?php if ($show) { ?>
            <a type="button" class="btn btn-sm btn-primary me-2" href="<?php echo base_url('index.php/transaksi/add'); ?>">Tambah <?php echo $title ?></a>
        <?php } ?>
    </div>
</div>

<table class="table table-bordered table-hover table-sm text-center">
    <thead class="table-secondary">
        <tr>
            <th>No</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Periode</th>
            <th>ID Buku</th>
            <th>ID Anggota</th>
            <th>Status</th>
            <th>Tanggal Pengembalian</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $count = 0;
        foreach ($data as $key) {
            $count = $count + 1;
        ?>
            <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $key['tgl_pinjam']; ?></td>
                <td><?php echo $key['tgl_kembali']; ?></td>
                <td><?php echo $key['periode']; ?></td>
                <td><?php echo $key['id_buku']; ?></td>
                <td><?php echo $key['id_anggota']; ?></td>
                <td><?php echo $key['status']; ?></td>
                <td><?php echo $key['tgl_pengembalian']; ?></td>
                <td class="d-flex justify-content-center">
                    <a class="btn btn-sm btn-info me-2" href="<?php echo base_url('index.php/transaksi/detail/' . $key['id_transaksi']); ?>">Detail</a>
                    <?php if ($show) { ?>
                        <a class="btn btn-sm btn-warning me-2" href="<?php echo base_url('index.php/transaksi/edit/' . $key['id_transaksi']); ?>">Dikembalikan</a>
                    <?php } ?>
                    <!-- <a class=" btn btn-sm btn-danger" href="<?php echo base_url('index.php/transaksi/delete/' . $key['id_transaksi']); ?>">Hapus</a> -->
                </td>
            </tr>
        <?php  } ?>
    </tbody>
</table>