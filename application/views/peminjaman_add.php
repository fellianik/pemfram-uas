<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom mt-5">
    <h1 class="h2">Tambah Data <?php echo $title ?></h1>
</div>

<?php if ($editState) {
    echo form_open_multipart('index.php/transaksi/edit/' . $data['id_transaksi']);
} else {
    echo form_open_multipart('index.php/transaksi/add');
} ?>

<form method="post">
    <div class="row mb-3">
        <div class="col">
            <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
            <input type="date" name="tgl_pinjam" required class="form-control" value="<?php if (isset($data['tgl_pinjam'])) {
                                                                                            echo $data['tgl_pinjam'];
                                                                                        } else {
                                                                                            echo date('Y-m-d');
                                                                                        } ?>" <?php if (isset($data['tgl_pinjam'])) {
                                                                                                    echo 'disabled';
                                                                                                } ?>>
        </div>
        <div class="col">
            <label for="periode" class="form-label">Periode Peminjaman (hari)</label>
            <input type="number" name="periode" required class="form-control" value="<?php if (isset($data['periode'])) {
                                                                                            echo $data['periode'];
                                                                                        } ?>" <?php if (isset($data['periode'])) {
                                                                                                    echo 'disabled';
                                                                                                } ?>>
        </div>
    </div>

    <?php if (isset($data['tgl_kembali'])) { ?>
        <div class="row mb-3">
            <div class="col">
                <label for="tgl_kemabali" class="form-label">Tanggal Kembali</label>
                <input type="date" name="tgl_kembali" class="form-control" value="<?php echo $data['tgl_kembali'] ?>" <?php if (isset($data['periode'])) {
                                                                                                                            echo 'disabled';
                                                                                                                        } ?>>
            </div>
        </div>
    <?php } ?>


    <div class="row mb-3">
        <div class="col">
            <label for="id_buku" class="form-label">Buku</label>
            <?php if (isset($data['id_buku'])) { ?>
                <select name="id_buku" disabled class="form-select">
                    <option value=" <?php echo $buku['id_buku']; ?>"><?php echo $buku['judul_buku']; ?></option>
                </select>
            <?php } else { ?>
                <select name="id_buku" class="form-select">
                    <?php foreach ($buku as $item) { ?>
                        <option value=" <?php echo $item['id_buku']; ?>"><?php echo $item['judul_buku']; ?></option>
                    <?php } ?>
                </select>
            <?php } ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label for="id_anggota" class="form-label">Anggota</label>
            <?php if (isset($data['id_anggota'])) { ?>
                <select name="id_anggota" disabled class="form-select">
                    <option value=" <?php echo $anggota['id_user']; ?>"><?php echo $anggota['nama']; ?></option>
                </select>
            <?php } else { ?>
                <select name="id_anggota" class="form-select">
                    <?php foreach ($anggota as $item) { ?>
                        <option value=" <?php echo $item['id_user']; ?>"><?php echo $item['nama']; ?></option>
                    <?php } ?>
                </select>
            <?php } ?>
        </div>
    </div>


    <div class="row mb-3">
        <div class="col">
            <label for="status" class="form-label">Status</label>

            <select name="status" class="form-select">
                <?php if (isset($data['status'])) { ?>
                    <option value="kembali">Kembali</option>
                <?php } else { ?>
                    <option value="pinjam">Dipinjam</option>
                <?php } ?>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <?php if ($editState) { ?>
                <label for="tgl_pengembalian" class="form-label">Tanggal Pengembalian</label>
                <input type="date" name="tgl_pengembalian" class="form-control" value="<?php echo date('Y-m-d'); ?>">
            <?php } ?>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>