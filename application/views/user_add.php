<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom mt-5">
    <h1 class="h2">Tambah Data <?php echo $title ?></h1>
</div>

<?php if ($editState) {
    echo form_open_multipart('index.php/user/edit/' . $data['id_user']);
} else {
    echo form_open_multipart('index.php/user/add');
} ?>
<form method="post">
    <div class="row mb-3">
        <div class="col">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" required class="form-control" value="<?php if (isset($data['nama'])) {
                                                                                    echo $data['nama'];
                                                                                } ?>">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" required class="form-control" value="<?php if (isset($data['email'])) {
                                                                                        echo $data['email'];
                                                                                    } ?>">
        </div>

        <div class="col">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" required class="form-control" value="<?php if (isset($data['password'])) {
                                                                                            echo $data['password'];
                                                                                        } ?>">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label for="gender" class="form-label">Jenis Kelamin</label>
            <select name="gender" class="form-select">
                <?php if (isset($data['gender'])) { ?>
                    <option value="<?php echo $data['gender']; ?>"><?php echo $data['gender']; ?></option>
                <?php } else { ?>
                <?php } ?>
                <option>--- Pilih ---</option>
                <option>Perempuan</option>
                <option>Laki-laki</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control"><?php if (isset($data['alamat'])) {
                                                                echo $data['alamat'];
                                                            } ?></textarea>
        </div>

        <div class="col">
            <label for="telp" class="form-label">No telp</label>
            <input type="number" name="no_telp" class="form-control" value="<?php if (isset($data['no_telp'])) {
                                                                                echo $data['no_telp'];
                                                                            } ?>">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label for="role" class="form-label">Role</label>

            <select name="role" class="form-select">
                <?php if (isset($data['role'])) { ?>
                    <option value="<?php echo $data['role']; ?>"><?php echo $data['role']; ?></option>
                <?php } else { ?>
                    <option>--- Pilih ---</option>
                    <option>Petugas</option>
                    <option>Anggota</option>
                <?php } ?>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>