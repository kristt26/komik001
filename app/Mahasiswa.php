<?php
class Mahasiswa
{
    protected $conn;

    public function __construct()
    {
        $this->conn = new Connection();
    }

    function tampil(): array
    {
        $string = "SELECT * FROM mahasiswa";
        $sql = $this->conn->conn->prepare($string);
        $sql->execute();
        $data = [];
        while ($row = $sql->fetch()) {
            $data[] = $row;
        }
        return $data;
    }
    function tambah($data)
    {
        try {
            $string = "INSERT INTO mahasiswa (npm, nama_mahasiswa, gender, no_telp, alamat, id_jurusan) 
            value(:npm, :nama_mahasiswa, :gender, :no_telp, :alamat, :id_jurusan)";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute($data);
            return true;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
