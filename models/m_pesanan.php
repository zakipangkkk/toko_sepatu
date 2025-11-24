<?php
include_once '../m_koneksi.php';

class m_pesan extends koneksi
{
    public function tambahPesanan($user_id, $produk_id, $jumlah, $no_hp, $alamat)
    {
        $sql = "INSERT INTO pesanan (user_id, produk_id, jumlah, no_hp, alamat)
                VALUES('$user_id', '$produk_id', '$jumlah', '$no_hp', '$alamat')";

        return mysqli_query($this->koneksi, $sql);
    }
}
?>
