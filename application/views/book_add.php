<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom mt-5">
    <h1 class="h2">Tambah Data <?php echo $title ?></h1>
</div>

<?php if ($editState) {
    echo form_open_multipart('index.php/book/edit/' . $data['id_buku']);
} else {
    echo form_open_multipart('index.php/book/add');
} ?>


<form method="post">
    <div class="row mb-3">
        <div class="col">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" required class="form-control" value="<?php if (isset($data['judul_buku'])) {
                                                                                        echo $data['judul_buku'];
                                                                                    } ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="pengarang" class="form-label">Pengarang</label>
            <input type="text" name="penulis" required class="form-control" value="<?php if (isset($data['pengarang'])) {
                                                                                        echo $data['pengarang'];
                                                                                    } ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" name="penerbit" required class="form-control" value="<?php if (isset($data['penerbit'])) {
                                                                                        echo $data['penerbit'];
                                                                                    } ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="tahun_tertib" class="form-label">Tahun Terbit</label>
            <input type="number" name="tahun_terbit" required class="form-control" value="<?php if (isset($data['tahun_terbit'])) {
                                                                                                echo $data['tahun_terbit'];
                                                                                            } ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="stok" class="form-label">Stok Buku</label>
            <input type="number" name="stok" required class="form-control" value="<?php if (isset($data['stok_buku'])) {
                                                                                        echo $data['stok_buku'];
                                                                                    } ?>">
        </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Simpan">
</form>
</body>

</html>