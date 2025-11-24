<?php
session_start();
include_once '../models/m_user.php';

// Cek apakah sudah login
if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Anda harus login terlebih dahulu');window.location='../views/login.php';</script>";
    exit;
}

$pesan = new m_user();

// Jika tombol submit ditekan
if (isset($_POST['submit'])) {

    $user_id   = $_SESSION['user_id']; // Dari session login
    $produk_id = $_POST['produk_id'];
    $jumlah    = $_POST['jumlah'];
    $no_hp     = $_POST['no_hp'];
    $alamat    = $_POST['alamat'];

    $hasil = $pesan->tambahPesanan($user_id, $produk_id, $jumlah, $no_hp, $alamat);

    if ($hasil) {
        echo "<script>alert('Pesanan berhasil dibuat');window.location='../views/notif_sukses.php';</script>";
    } else {
        echo "<script>alert('Gagal membuat pesanan');window.location='../views/pesanan_tambah.php';</script>";
    }
}
?>
