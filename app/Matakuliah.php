<?php
class Matakuliah{
    protected $conn;

    public function __construct() {
        $this->conn = new Connection();
    }

    function tampil() : array {
        $string = "SELECT matakuliah.*, jurusan.nama_jurusan FROM matakuliah LEFT JOIN jurusan on jurusan.id_jurusan=matakuliah.id_jurusan";
        $sql = $this->conn->conn->prepare($string);
        $sql->execute();
        $data = [];
        while ($row = $sql->fetch()){
            $data[] = $row;
        }
        return $data;
    }
    function tambah($data) {
        try {
            $string = "INSERT INTO matakuliah (sks, nama_matakuliah, id_jurusan) value(:sks, :nama_matakuliah, :id_jurusan)";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute($data);
            return true;
        } catch (\Throwable $th) {
            echo $th->getMessage();
    }
}
}