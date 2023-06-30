<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom mt-5">
    <h1 class="h2">Daftar <?php echo $title ?></h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a type="button" class="btn btn-sm btn-primary me-2" href="<?php echo base_url('index.php/user/add'); ?>">Tambah <?php echo $title ?></a>
    </div>
</div>

<table class="table table-bordered table-hover text-center">
    <thead class="table-secondary">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Role</th>
            <th>Aksi</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $count = 0;
        foreach ($data as $item) {
            $count = $count + 1;
        ?>
            <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $item['nama']; ?></td>
                <td><?php echo $item['email']; ?></td>
                <td><?php echo $item['gender']; ?></td>
                <td><?php echo $item['role']; ?></td>
                <td class="d-flex justify-content-center">
                    <a class="btn btn-sm btn-warning me-2" href="<?php echo base_url('index.php/user/edit/' . $item['id_user']); ?>">Edit</a>
                    <a class=" btn btn-sm btn-danger" href="<?php echo base_url('index.php/user/delete/' . $item['id_user']); ?>">Hapus</a>
                </td>
            </tr>
        <?php  } ?>
    </tbody>
</table>