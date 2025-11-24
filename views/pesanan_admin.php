<?php
session_start();
include_once '../models/m_koneksi.php';

// Cek login
if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Harus login dulu!');window.location='login.php';</script>";
    exit;
}

$k = new koneksi();
$conn = $k->koneksi;

$user_id = $_SESSION['user_id'];

// Query join tabel sesuai database kamu
$sql = "
SELECT 
    p.pesanan_id,
    u.nama AS nama_user,
    pr.nama_produk AS nama_produk,
    p.jumlah,
    p.no_hp,
    p.alamat
FROM pesanan p
INNER JOIN users u ON p.user_id = u.user_id
INNER JOIN produk pr ON p.produk_id = pr.produk_id
WHERE p.user_id = '$user_id'
ORDER BY p.pesanan_id DESC
";

$data = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Checkout Pesanan</title>
    <style>
        table {
            border-collapse: collapse;
            width: 90%;
            margin: 20px;
        }
        th, td {
            border: 1px solid #444;
            padding: 8px;
        }
        th {
            background: #eee;
        }
    </style>
</head>

<body>

<h2>Checkout Pesanan</h2>

<table>
    <tr>
        <th>No</th>
        <th>Nama Pembeli</th>
        <th>Produk</th>
        <th>Jumlah</th>
        <th>No. HP</th>
        <th>Alamat</th>
    </tr>

    <?php
    $no = 1;
    while ($row = mysqli_fetch_assoc($data)) {
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $row['nama_user'] ?></td>
        <td><?= $row['nama_produk'] ?></td>
        <td><?= $row['jumlah'] ?></td>
        <td><?= $row['no_hp'] ?></td>
        <td><?= $row['alamat'] ?></td>
    </tr>
    <?php } ?>
</table>

</body>
</html>
