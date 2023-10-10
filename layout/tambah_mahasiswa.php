<?php
include "app/Jurusan.php";
$jur = new Jurusan();
$data = $jur->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Tambah Mahasiswa
        </div>
        <div class="card-body">
            <form action="/komik059/app/proses.php" method="post">
                <div class="form-group">
                    <label for="">NPM</label>
                    <input type="text" class="form-control" name="npm">
                </div>
                <div class="form-group">
                    <label for="">Nama Mahasiswa</label>
                    <input type="text" class="form-control" name="nama_mahasiswa">
                </div>
                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <select name="gender" class="form-control" id="">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Telp/HP</label>
                    <input type="text" class="form-control" name="no_telp">
                </div>
                <div class="form-group">
                    <label for="">Jurusan</label>
                    <select name="id_jurusan" class="form-control" id="">
                        <?php foreach ($data as $item) : ?>
                            <option value="<?= $item['id_jurusan'] ?>"><?= $item['nama_jurusan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" name="alamat" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="tambah_mahasiswa" class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

