<?php
class Jurusan{
    protected $conn;

    public function __construct() {
        $this->conn = new Connection();
    }

    function tampil() : array {
        $string = "SELECT * FROM jurusan";
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
            $string = "INSERT INTO jurusan (nama_jurusan) value(:nama_jurusan)";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute($data);
            return true;
        } catch (\Throwable $th) {
            echo $th->getMessage();
    }
}
}