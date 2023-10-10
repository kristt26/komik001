<?php
class Dosen
{
    protected $conn;

    public function __construct()
    {
        $this->conn = new Connection();
    }

    function tampil(): array
    {
        $string = "SELECT * FROM dosen";
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
            $string = "INSERT INTO dosen (nidn, nama_dosen, telp, alamat) 
            value(:nidn, :nama_dosen, :alamat, :telp)";
            $sql = $this->conn->conn->prepare($string);
            $cek = $sql->execute($data);
            return true;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }   
}
