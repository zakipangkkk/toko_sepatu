<?php

class koneksi {

    private $host = "localhost",
     $username = "root",
     $pass = "",
     $db = "toko_sepatu";

    public $koneksi;

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->pass, $this->db);
        if ($this->koneksi) {
            // echo "koneksi kedatabase " . $this->db . " berhasil";
            return $this->koneksi;
        } else {
            // echo "koneksi ke database gagal";
        }
    }
}

$koneksi = new koneksi();