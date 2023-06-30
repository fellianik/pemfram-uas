<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom mt-5">
    <h1 class="h2">Daftar <?php echo $title ?></h1>
    <?php if ($this->session->userdata('role') == 'Petugas') { ?>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a type="button" class="btn btn-sm btn-primary me-2" href="<?php echo base_url('index.php/book/add'); ?>">Tambah <?php echo $title ?></a>
    </div>
    <?php } ?>
</div>
<!-- Form pencarian -->
<form method="GET" action="<?php echo base_url('index.php/book/search'); ?>">
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="keyword" placeholder="Cari buku..." value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Cari</button>
            <?php if (isset($_GET['keyword'])) { ?>
                <a class="btn btn-secondary" href="<?php echo base_url('index.php/book'); ?>">Reset</a>
            <?php } ?>
        </div>
    </div>
</form>

<table class="table table-bordered table-hover text-center">
    <thead class="table-secondary">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Stok Buku</th>
            <th>Dipinjam</th>
            <?php if ($this->session->userdata('role') == 'Petugas') { ?>
            <th>Aksi</th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
        <?php
        $count = 0;
        foreach ($data as $book) {
            $count = $count + 1;
        ?>
            <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $book['judul_buku']; ?></td>
                <td><?php echo $book['pengarang']; ?></td>
                <td><?php echo $book['penerbit']; ?></td>
                <td><?php echo $book['tahun_terbit']; ?></td>
                <td><?php echo $book['stok_buku']; ?></td>
                <td>
                    <?php
                    $id = $book['id_buku'];
                    $dd = $this->db->query("SELECT * FROM table_transaksi WHERE id_buku= '$id' AND status = 'pinjam'");
                    if ($dd->num_rows() > 0) {
                        echo $dd->num_rows();
                    } else {
                        echo '0';
                    }
                    ?>
                </td>
                <?php if ($this->session->userdata('role') == 'Petugas') { ?>
                <td class="d-flex justify-content-center">
                    <a class="btn btn-sm btn-warning me-2" href="<?php echo base_url('index.php/book/edit/' . $book['id_buku']); ?>">Edit</a>
                    <a class="btn btn-sm btn-danger" href="<?php echo base_url('index.php/book/delete/' . $book['id_buku']); ?>">Hapus</a>
                </td>
                <?php } ?>
            </tr>
        <?php  } ?>
    </tbody>
</table>
