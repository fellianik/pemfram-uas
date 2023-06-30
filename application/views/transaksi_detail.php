<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom mt-5">
    <h1 class="h2">Detail <?php echo ucwords($title) ?></h1>
</div>

<div class="row">
    <div class="col">
        <div class="row mb-3">
            <div class="col">
                <h3 class="h3">Data Buku</h3>
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>Judul Buku</th>
                            <td><?php echo $buku['judul_buku'];; ?></td>
                        </tr>
                        <tr>
                            <th>Pengarang</th>
                            <td><?php echo $buku['pengarang']; ?></td>
                        </tr>
                        <tr>
                            <th>Penerbit</th>
                            <td><?php echo $buku['penerbit']; ?></td>
                        </tr>
                        <tr>
                            <th>Tahun Terbit</th>
                            <td><?php echo $buku['tahun_terbit']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3 class="h3">Data Anggota</h3>

                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>Nama Anggota</th>
                            <td><?php echo $anggota['nama']; ?></td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td><?php echo $anggota['gender']; ?></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td><?php echo $anggota['alamat']; ?></td>
                        </tr>
                        <tr>
                            <th>No. Telepon</th>
                            <td><?php echo $anggota['no_telp']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col">
        <h3 class="h3">Data Transaksi</h3>
        <table class="table table-hover">
            <tbody>
                <tr>
                    <th>Tanggal Pinjam</th>
                    <td><?php echo $data['tgl_pinjam']; ?></td>
                </tr>
                <tr>
                    <th>Tanggal Kembali</th>
                    <td><?php echo $data['tgl_kembali']; ?></td>
                </tr>
                <tr>
                    <th>Periode Peminjaman</th>
                    <td><?php echo $data['periode']; ?></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td><?php echo ucwords($data['status']); ?></td>
                </tr>
                <?php if ($show) { ?>
                    <tr>
                        <th>Tanggal Pengembalian</th>
                        <td><?php echo ucwords($data['tgl_pengembalian']); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>