<?php
include "inc/Connection.php";
include "app/Mahasiswa.php";
$mhs = new Mahasiswa();
$data = $mhs->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>Daftar Mahasiswa</h4>
            <a href="/komik059/index.php/mahasiswa/add" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>No</td>
                    <td>NIM</td>
                    <td>Nama</td>
                    <td>Action</td>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key+1; ?></td>
                        <td><?= $item['nim']; ?></td>
                        <td><?= $item['nama']; ?></td>
                        <td><?= $item['alamat']; ?></td>
                        <td>
                            <a class="btn btn-warning btn-sm">Edit</a>
                            <a href="/komik059/app/proses.php?hapus=mahasiswa&id=<?= $item['id']?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>