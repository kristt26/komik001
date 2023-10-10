<?php
include "../inc/Connection.php";
if (isset($_POST['tambah_mahasiswa'])) {
    include "Mahasiswa.php";
    $mhs = new Mahasiswa();
    // Mapping data
    $data = [
        "npm" => $_POST['npm'],
        "nama_mahasiswa" => $_POST['nama_mahasiswa'],
        "gender" => $_POST['gender'],
        "no_telp" => $_POST['no_telp'],
        "alamat" => $_POST['alamat'],
        "id_jurusan" => $_POST['id_jurusan']
    ];
    // Proses Tambah
    $mhs->tambah($data);
    header("Location: http://localhost/komik059/index.php/mahasiswa");
} else if (isset($_POST['tambah_jurusan'])) {
    include "Jurusan.php";
    $jrs = new Jurusan();
    // Mapping data
    $data = [
        "nama_jurusan"=>$_POST['nama_jurusan']
    ];
    // Proses Tambah
    $jrs->tambah($data);
    header("Location: http://localhost/komik059/index.php/jurusan");
} else if (isset($_POST['tambah_matakuliah'])) {
    include "Matakuliah.php";
    $mat = new Matakuliah();
    // Mapping data
    $data = [
        "sks"=>$_POST['sks'],
        "nama_matakuliah"=>$_POST['nama_matakuliah'],
        "id_jurusan"=>$_POST['id_jurusan']
    ];
    // Proses Tambah
    $mat->tambah($data);
    header("Location: http://localhost/komik059/index.php/dosen");
    
}else if (isset($_POST['tambah_dosen'])) {
    include "Dosen.php";
    $dsn = new Dosen();
    // Mapping data
    $data = [
        "nidn"=>$_POST['nidn'],
        "nama_dosen"=>$_POST['nama_dosen'],
        "alamat"=>$_POST['alamat'],
        "telp"=>$_POST['telp']
    ];
    $dsn->tambah($data);
    header("Location: http://localhost/komik059/index.php/dosen");
}
