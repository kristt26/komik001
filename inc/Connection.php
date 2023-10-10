<?php
class Connection{
    public $conn;
    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=akademik", "root", "");
        } catch (\Throwable $th) {
            die ("error" . $th->getMessage());
        }
    }
}